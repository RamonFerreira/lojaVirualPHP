  <div id="wrapper">
    <div id="layout-static">

  
<?php include 'sindebar.php'; ?>

<div class="static-content-wrapper">
	<div class="static-content">
      	    <div class="page-content">
	      	    <ol class="breadcrumb">
	                                
					<li><a href="index.html">Home</a></li>
					<li>Functional Apps</li>
					<li><a href="#">Inbox</a></li>
					<li class="active"><a href="app-inbox-compose.html">Compose</a></li>

	            </ol>


<div class="page-heading"> 
	<div class="row" style='display:none;' id='mensagem'>
	  	 <div class="alert alert-info">
	        <label></label>
	        <button type="button" class="close" data-dismiss="alert">×</button>
	    </div>
	</div>      
	<!--div class="col-lg-12"  style="padding: 10px 5px;">  
		<h1>Departamento</h1>
		<div class="options ">
		    <div class="btn-toolbar">
		        <a href="<?php echo $linkDepartamento.'/'.sha1('cadastro'); ?>" class="btn btn-default" title="Novo"><i class="fa  fa-plus"></i></a>
		    </div>
		</div>
	</div--> 				

            		<?php 
							if(isset($_REQUEST['page'])){
								
								$paginaPai = strtolower($_REQUEST['page']);
								$title = ucfirst($_REQUEST['page']);

								$html ='<div class="col-lg-12"  style="padding: 10px 5px;">';  
								$html.="	<h1>$title</h1>";
								$html.='		<div class="options ">';
								$html.='	    <div class="btn-toolbar">';
								$html.=            "<a href=".$paginaPai.'/'.sha1('cadastro')."  class='btn btn-default' title='Novo'><i class='fa  fa-plus'></i></a>";
								$html.='		    </div>';
								$html.='		</div>';
								$html.='	</div>';
									echo $html; 
								switch(strtolower($_REQUEST['page'])){
									case 'inicio':
										include_once '../../include/adm/inicio/inicio.php';
									break;

									case 'departamento':

										if(isset($_REQUEST['cmd'])){

											$cmd = $_REQUEST['cmd'];

											switch($cmd){

												case sha1('cadastro'):
												case sha1('edicao'):

													include_once '../../include/adm/departamento/cadastrarDepartamento.php';

												break;
											}
										}else{
											include_once '../../include/adm/departamento/departamento.php';
										}

									    	
										break;
									case 'marca':
										if(isset($_REQUEST['cmd'])){

											$cmd = $_REQUEST['cmd'];

											switch($cmd){

												case sha1('cadastro'):

													include_once '../../include/adm/marca/cadastrarMarca.php';

												break;
											}
										}else{
											include_once '../../include/adm/marca/marca.php';
										}
										break;
									case 'produto':
										if(isset($_REQUEST['cmd'])){

											$cmd = $_REQUEST['cmd'];

											switch($cmd){

												case sha1('cadastro'):

													include_once '../../include/adm/produto/cadastrarProduto.php';

												break;
											}
										}else{
										   	include_once '../../include/adm/produto/produto.php';
										   }
										break;
								}
							}
					?>
				</div>
		</div>
			
			  <!-- all content goes here -->
		<footer role="contentinfo">
			<div class="clearfix">
				<ul class="list-unstyled list-inline pull-left">
					<li><h6 style="margin: 0;"> © 2012 T&CMultimarcas</h6></li>
				</ul>
				<button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
			</div>
		</footer>


       </div>
	  </div>
  </div>
</div>

