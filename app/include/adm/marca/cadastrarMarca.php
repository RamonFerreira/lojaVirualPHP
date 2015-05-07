<?php 

  $marca = new Marca();
    $flaCMD =0;
    $cmd = sha1('insert');
	if(isset($_REQUEST['id'])){
		$cmd = sha1('update');
		$flaCMD =1;
		$marca->__set('id',$_REQUEST['id']);
		
	}


	$mySQL =  new MySQL();
	$query = "SELECT  SHA1(id), imagem, nome,posicao, descricao,  dtcadastro, dtmodificacao from tb_marca where sha1(id)='".$marca->__get('id')."'";
	$rs = $mySQL->getRows($query);
     
    if($rs){

     	 foreach ($rs as $item ){
				foreach ($item as $key=>$value){
					$marca->__set($key, $value);
	     		}
     		}
     }

  $acao  = ($flaCMD == 0 ? 'Cadastrar': 'Editar');
?>


<div class="page-heading"> 
   
	<div class="container-fluid" id="form_cadastro">
		<div class="row">
			<div id="panel-advancedoptions">
				<div class="panel panel-default" data-widget-editbutton="false" id="p1">
					<div class="panel-heading">
						<h2><?php echo  $acao; ?></h2>
					</div>
					<div class="panel-body">
						<form  enctype="multipart/form-data" action="<?php echo CONTEXTO; ?>/app/controller/marca/marcaController.php" class="form-horizontal row-border" method='POST'>
							<?php
								if($flaCMD != 0){
									echo '<div class="form-group">
												<div class="col-sm-12"> 
													<label class="">Codigo de Identificação</label>
													<div>
														<input type="text"  name="id" value="'.$marca->__get("id").'" class="form-control">
													</div>
												</div>
											</div>';
								}

							?>
							<div class="form-group">
								<div class="col-sm-12">
									<label>Imagem</label>
									<div>
										<input type="file" name="imagem"  class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<label>Marca</label>
									<div>
										<input type="text" name="nome" value='<?php echo $marca->__get("nome"); ?>' class="form-control">
										<input type="hidden" name="cmd" value='<?php echo $cmd; ?>' class="form-control">
									</div>
								</div>
								<div class="col-sm-2">
									<label>Ordem</label>
									<div>
										<input type="text" name="posicao" value="<?php echo $marca->__get("posicao"); ?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Descrição</label>
								<div>
									<textarea name="descricao" class="form-control"> <?php echo $marca->__get("descricao"); ?></textarea>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<input type='submit' class="btn-primary btn" value='<?php echo  $acao; ?>'/>
										<a href="<?php echo $linkMarca; ?>" class="btn-default btn">voltar</a>
									</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>