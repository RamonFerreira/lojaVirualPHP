<?php 
    $dp = new Departamento();
    $flaCMD =0;
    $cmd = sha1('insert');
	if(isset($_REQUEST['id'])){
		$cmd = sha1('update');
		$flaCMD =1;
		$dp->__set('id',$_REQUEST['id']);
		
	}
	
	$mySQL =  new MySQL();
	$query = "SELECT  SHA1(id), nome,posicao, dtcadastro, dtmodificacao from tb_departamento where sha1(id)='".$dp->__get('id')."'";
	$rs = $mySQL->getRows($query);
     
    if($rs){

     	 foreach ($rs as $item ){
				foreach ($item as $key=>$value){
					$dp->__set($key, $value);
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
						<h2><?php echo $acao; ?></h2>
					</div>
					<div class="panel-body">
					
					<form action="<?php echo CONTEXTO; ?>/app/controller/departamentoController.php" method="POST"  class="form-horizontal row-border">
						
							<?php
								if($flaCMD != 0){
									echo '<div class="form-group">
												<div class="col-sm-12"> 
													<label class="">Codigo de Identificação</label>
													<div>
														<input type="text"  name="id" value="'.$dp->__get("id").'" class="form-control">
													</div>
												</div>
											</div>';
								}

							?>
						<div class="form-group">

							<div class="col-sm-10"> 
								<label class="">Departamento</label>
								<div>
									<input type="text"  name='nome' value="<?php echo  $dp->__get('nome'); ?>" class="form-control">
									<input type="hidden"  name='cmd' value="<?php echo $cmd ;?>" class="form-control">
								</div>
							</div>


							<div class="col-sm-2"> 
								<label>Ordem</label>
								<div>
									<input type="text" name="posicao" value="<?php echo  $dp->__get('posicao'); ?>" class="form-control" />
								</div>
							</div> 
						</div>
						

						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<button class="btn-primary btn"><?php echo $acao; ?></button>
									<a href="<?php echo $linkDepartamento; ?>" class="btn-default btn">voltar</a>
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




			