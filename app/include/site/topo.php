<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>T&CMultimarcas</title>
    <link href="<?php echo HTTP_RESOURCE_SITE_ASSETS_PATH; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo HTTP_RESOURCE_SITE_ASSETS_PATH; ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo HTTP_RESOURCE_SITE_ASSETS_PATH; ?>/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo HTTP_RESOURCE_SITE_ASSETS_PATH; ?>/css/style.css" rel="stylesheet">
</head>
<body>

	<header>
	    <div class="container">
	        <div class="row">

	        	<!-- Logo -->
	            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
	            	<div class="well logo">
	            		<a href="inicio">
	            			T&C <span>Multimarcas</span>
	            		</a>
	            		<div>Qualidade na entrega e o melhor preço para você.</div>
	            	</div>
	            </div>
	            <!-- End Logo -->

				<!-- Search Form -->
	            <div  class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
	            	<div style="display: none;" class="well">
	                    <form action="">
	                        <div class="input-group">
	                            <input type="text" class="form-control input-search" placeholder="Enter something to search"/>
	                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
	                            </span>
	                        </div>
	                    </form>
	                </div>
	            </div>
	            <!-- End Search Form -->

	            <!-- Shopping Cart List -->
	            <div class="col-lg-3 col-md-4 col-sm-8 col-xs-0">
	                <div class="well" style="padding-top: 15px;">
	                <div><div>
	               		 <?php
	               		 	 if(isset($_SESSION["Login"])){
	               		 	 	$Login = new Login();
	               		 	 	$Login = $_SESSION["Login"];
	               		 	 	$tipo  = $Login->__get('tipo')=='A'? 'Administrador':'Usuário';
	               		 	 	 $linkSair   = "<a href='".CONTEXTO."/app/controller/loginController.php?cmd=".sha1("logout")."' >sair</a> ";
	               		 	 	 
	               		 	 	$linkConta = HTTP_HOST_PATH. ($Login->__get('tipo')=='A'? '/admin/inicio' : '/user/inicio')  ;
								$htmlLinkConta  = "<a href='$linkConta'><i class='fa fa-user'></i> Minha Conta</a>";
	               		 	 	 
	               		 	 	$html ='<div class="row">';
		               		 	$html .='	<div class="col-sm-12">';
		               		 	$html .='		Olá '. $Login->__get("email") ."  ". $tipo;
		               		 	$html .='	</div>';
		               		 	$html .='</div>';
		               		 	
		               		 	$html .='<div class="row">';
		               		 	$html .='	<div class="col-sm-12">';
		               		 	$html .=    $htmlLinkConta.' | <a href="#">Meus Pedidos</a> | <a href="#">CENTRAL DE ATENDIMENTO</a> | ';
		               		 	$html .=		 $linkSair;
		               		 	$html .= '	</div>';
		               		 	$html .= '</div>';
		               		 	echo $html; 
		               		 	
		               		 }else{
		               		 	echo ' <a href="login"><i class="fa fa-user"></i> MinhaConta</a> <a href="login">Login</a> 	<a
								href="login">Cadastre-se</a>';
		               		 }
						 ?>
	                </div></div>
	                    <div class="btn-group btn-group-cart">
	                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                            <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
	                            <span class="pull-left">Carrinho: 0 item(s)</span>
	                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
	                        </button>
	                        <!--ul class="dropdown-menu cart-content" role="menu">
                                <li>
                                    <a href="detail.html">
                                        <b>Penn State College T-Shirt</b>
                                        <span>x1 $528.96</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail.html">
                                        <b>Live Nation ACDC Gray T-Shirt</b>
                                        <span>x1 $428.96</span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="cart.html">Total: $957.92</a></li>
                            </ul-->
	                    </div>
	                    
	                </div>
	            </div>
	            <!-- End Shopping Cart List -->
	        </div>
	    </div>
    </header>
    
<?php 
    include_once 'menu.php';
    
    if(isset($_SESSION["MSG_ERRO"]) && $_SESSION["MSG_ERRO"] != ""){
	 
      echo'<div class="container msg-erro" >
	    		<div class="row">
		    		<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Alerta!</strong> - '.$_SESSION["MSG_ERRO"].'
					</div>
    			</div>
    		</div>';
      
      
      unset($_SESSION["MSG_ERRO"]);
      echo "<script>setTimeout(function(){ document.getElementsByClassName('msg-erro')[0].style.display ='none'},2600); </script>";
      
    }
?>
    
    
	   