<?php 
   $produto = new Produto();
   $flaCMD =0;
   $cmd = sha1('insert');
	
	if(isset($_REQUEST['id'])){
	
		$cmd = sha1('update');
		$flaCMD =1;
		$produto->__set('id',$_REQUEST['id']);
		
	}
	
	$dpB = new DepartamentoBusiness();
	$arrDp = $dpB->retornaCampos('id, nome');
	$marca = new MarcaBusiness();
	$arrMarca = $marca->retornaCampos('id, nome');

function retornaOptionHtml($rs = null){
	  
	$optionHTML ='<option value="">Selecione...</option>';

	if($rs != null){

		foreach ($rs  as $item) {
		  
			$obj =array();
		  
		   foreach ($item as $key => $value) {

		     	$obj[$key]=$value;

		 	}

		  	 	 $optionHTML.= "<option value=". $obj['id'].">";
		    	 $optionHTML.= $obj['nome'];
		    	 $optionHTML.= "</option>";

		 } 

	}

	 return $optionHTML;
}	
function retornaOptionSituacaoEmEstoqueHtml(){

	$arrEmEstoque    = array('1'=>'2-3 Dias','2'=>'Em Estoque', '3'=>'Fora De Estoque', '4'=>'Pedido Antecipado');	
	$optionEmEstoque = ($produto->__get('situacaoestoque')!= null ? "<option value".$produto->__get('situacaoestoque').">".$arrEmEstoque[$produto->__get('situacaoestoque')]."</option>":'<option value"">Selecione...</option>');
	foreach ($arrEmEstoque as $key => $value) {
		if($produto->__get('situacaoestoque') != $key ){
			$optionEmEstoque .= '<option value="'.$key.'">'.$value.'</option>';
		}
	}
	return $optionEmEstoque;
}


/*$mySQL =  new MySQL();
	$query = "SELECT  SHA1(id), nome,posicao, dtcadastro, dtmodificacao from tb_departamento where sha1(id)='".$dp->__get('id')."'";
	$rs = $mySQL->getRows($query);
     
    if($rs){

     	 foreach ($rs as $item ){
				foreach ($item as $key=>$value){
					$dp->__set($key, $value);
	     		}
     		}
     }
*/
  $acao  = ($flaCMD == 0 ? 'Cadastrar': 'Editar');
?>

<div class="page-heading">      
	<div class="col-md-12">
		<div class="tab-container tab-left tab-default">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#geral" data-toggle="tab" aria-expanded="true">Geral</a></li>
				<li class=""><a href="#detalhe" data-toggle="tab" aria-expanded="false">Detalhes</a></li>
				<li class=""><a href="#frete" data-toggle="tab" aria-expanded="false">Frete</a></li>
				<li class=""><a href="#ligacoes" data-toggle="tab" aria-expanded="false">Logações</a></li>
			</ul>

			<form action="" name='formCadProduto' class="form-horizontal row-border">
				<div class="tab-content">

					<div class="tab-pane active" id="geral">

						<div class="form-group">
								<label class="col-sm-2 control-label">Imagem</label>
								<div class="col-sm-5">
									<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
										<input type="hidden" value="" name="...">
										<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 120px; line-height: 150px;"></div>
										<div  class='hide'>
											<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
											<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="imagem"></span>
											
										</div>
									</div>
								</div>
							
						</div>

						<div class="form-group">
							<div class='col-sm-12'>
								<label>Codigo</label>							 
								<input type='text' name='codigo' value="<?php echo $produto->__get('codigo'); ?>" class='form-control'  /> 
							</div>
						</div>

						<div class='form-group' >
							<div class='col-sm-6'>
								<label>Produto <span class='obrigatorio'>*</span></label>							 
								<input type='text' name='nome' req='true' value="<?php echo $produto->__get('nome'); ?>" class='form-control'  /> 
							</div>
							<div class='col-sm-6'>
								<label>Modelo <span class='obrigatorio'>*</span></label>							 
								<input type='text' name='modelo' req='true' value="<?php echo $produto->__get('modelo'); ?>" class='form-control'   /> 
							</div>
						</div>

						<div class='form-group' >
							<div class='col-sm-12'>
								<label>Descricao <span class='obrigatorio'>*</span></label>
								<textarea name='descricao' req='true' class='form-control'   ><?php echo $produto->__get('descricao'); ?></textarea>
							</div>
						</div>


					</div>




					<div class="tab-pane" id="detalhe">


						<div class='form-group' >
							<div class='col-sm-3'>
								<label>SKU</label>							 
								<input type='text' name='sku' value="<?php echo $produto->__get('sku'); ?>" class='form-control'  /> 
							</div>
							<div class='col-sm-3'>
								<label>Preço</label>							 
								<input type='text' name='preco' value="<?php echo $produto->__get('preco'); ?>" class='form-control' /> 
							</div>
							<div class='col-sm-3'>
								<label>Quantidade</label>							 
								<input type='text' name='quantidade' value="<?php echo $produto->__get('quantidade'); ?>" class='form-control'  /> 
							</div>
							<div class='col-sm-3'>
								<label>Min. por venda</label>							 
								<input type='text' name='miporvenda' value="<?php echo $produto->__get('miporvenda'); ?>" class='form-control'  /> 
							</div>


						</div>
						<div class='form-group'>
							<div class='col-sm-12'>
								<label>Localização</label>							 
								<input type='text' name='localizacao' value="<?php echo $produto->__get('localizacao'); ?>" class='form-control'   /> 
							</div>
						</div>

						<div class='form-group'>
							<div class='col-sm-6'>
								<label>Se Esgotado</label>
								<select class='form-control'>

									<?php

										$arrEmEstoque    = array('1'=>'2-3 Dias','2'=>'Em Estoque', '3'=>'Fora De Estoque', '4'=>'Pedido Antecipado');	
										$optionEmEstoque = ($produto->__get('situacaoestoque')!= null ? "<option value".$produto->__get('situacaoestoque').">".$arrEmEstoque[$produto->__get('situacaoestoque')]."</option>":'<option value"">Selecione...</option>');
										foreach ($arrEmEstoque as $key => $value) {
											if($produto->__get('situacaoestoque') != $key ){
												$optionEmEstoque .= '<option value="'.$key.'">'.$value.'</option>';
											}
										}
										echo $optionEmEstoque;

									?>
								
									
								</select>
							</div>
							<div class='col-sm-6'>
								<label>Data Disponível</label>
								<input type='date' name='dtdisponivel' class='form-control' id='datepicker' />
							</div>
						</div>
						<div class='form-group'>
							<div class='col-sm-12'>
								<label>Url Amigável</label>
								<input type='text' name='urlamigavel' value='' class='form-control'/>
							</div>
						</div>

						<div class='form-group'>
							<div class='col-sm-6'>
								<label>Situação</label>
								<select class='form-control'>
									<option>Selecione...</option>
									<option>Habilitado</option>
									<option>Desabilitado</option>
								</select>
							</div>

							<div class='col-sm-6'>
								<label>Posição</label>
								<input type='text' name='posicao' class='form-control'/>
									
							</div>
						</div>

					</div>



					<div class="tab-pane" id="frete">
						<div class='form-group'>
							<div class='col-sm-12'>
								<label>Frete</label>
								<select class='form-control'>
									<option>Selecione...</option>
									<option>Sim</option>
									<option>Não</option>
								</select>
							</div>
						</div>

						<div class='form-group'>
							<div class='col-sm-4'>
								<label>Comprimento</label>
								<input type='text' name='comprimento' value='' class='form-control'/>
							</div>
							<div class='col-sm-4'>
								<label>Altura</label>
								<input type='text' name='altura' value='' class='form-control'/>
							</div>
							<div class='col-sm-4'>
								<label>Largura</label>
								<input type='text' name='largura' value='' class='form-control'/>
							</div>
						</div>
						<div class='form-group'>
							<div class='col-sm-12'>
								<label>Unidade De Medida</label>
								<select class='form-control'>
									<option>Selecione...</option>
									<option>Centimetro</option>
									<option>Milimetro</option>
								</select>
							</div>
						</div>

						<div class='form-group'>
							<div class='col-sm-12'>
								<label>Peso</label>
								<input type='text' name='peso' value='0.0' class='form-control' />
							</div>
						</div>
						<div class='form-group'>
							<div class='col-sm-12'>
								<label>Unidade De Peso</label>
								<select class='form-control'>
									<option>Selecione...</option>
									<option>Kg</option>
									<option>Grama</option>
								</select>
							</div>
						</div>

					</div>
					
					<div class="tab-pane" id="ligacoes">
						<div class='form-group'>
							<div class='col-sm-12'>
								<label>Departamento <span class='obrigatorio'>*</span></label>
								<select  name='departamento' class='form-control'>
									<?php
								    	echo retornaOptionHtml($arrDp);
									?>
								</select>
							</div>
						</div>
						<div class='form-group'>
							<div class='col-sm-12'>
								<label>Marca <span class='obrigatorio'>*</span></label>
								<select name='marca' class='form-control' >
									<?php
									 	echo retornaOptionHtml($arrMarca);
									?>
								</select>
							</div>
						</div>
					</div>

					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<button name='brCadastrar' class="btn-primary btn">Cadastrar</button>
								<input type='button' name='btCad' class="btn-primary btn" value='cadastrar'/	>
								<button class="btn-default btn">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</div>
<!--

	
	 

	




		private $situacao;
		private $posicao;



		
		private $dtcadastro;
		private $dtmodificacao;
		private $Fronecedor;
		private $Marca;


-->