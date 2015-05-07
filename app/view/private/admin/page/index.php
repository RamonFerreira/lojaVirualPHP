<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <title>TRMultimarcas - inicio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avalon Admin Theme">
    <meta name="author" content="The Red Team">

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,700" rel="stylesheet" type="text/css">

    <!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->

    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link href="assets/plugins/jstree/dist/themes/avalon/style.min.css" type="text/css" rel="stylesheet">    <!-- jsTree -->
    <link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->
    <link href="assets/plugins/iCheck/skins/minimal/blue.css" type="text/css" rel="stylesheet">              <!-- iCheck -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link href="assets/css/ie8.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">    	<!-- DateRangePicker -->
<link href="assets/plugins/switchery/switchery.css" type="text/css" rel="stylesheet">        					<!-- Switchery -->
<link href="assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet"> 						<!-- FullCalendar -->

    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
</head>
<body class="infobar-offcanvas">
  
  
  <!--  header init-->
  
  <header id="topnav" class="navbar navbar-inverse navbar-fixed-top clearfix" role="banner">

	
	<a id="leftmenu-trigger" class="" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
	<a class="navbar-brand"  href="index.html">Malicia Carioca</a>
	<a id="rightmenu-trigger" class="" data-toggle="tooltip" data-placement="left" title="Toggle Infobar"></a>
	

	

	<ul class="nav navbar-nav toolbar pull-right">
		<li class="dropdown" style="display: none;">
			<a href="#" id="navbar-links-toggle" data-toggle="collapse" data-target="header>.navbar-collapse">&nbsp;</a>
		</li>

		<li class="toolbar-icon-bg demo-headerdrop-hidden">
            <a href="#" id="headerbardropdown"><span class="icon-bg"><i class="fa fa-fw fa-level-down"></i></span></a>
        </li>


		<li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-tasks"></i></span><span class="badge badge-warning">7</span></a>
			<div class="dropdown-menu taskprogresses arrow">
				<div class="dd-header">
					<span>Tasks</span>
					<span><a href="#">Settings</a></span>
				</div>
				<ul class="scrollthis">
					<li>
						<a href="#">
							<div class="contextual-progress">
			                    <div class="clearfix">
			                        <div class="progress-title">Template Styling</div>
			                        <div class="progress-percentage">5/25</div>
			                    </div>
			                    <div class="progress progress-lg">
			                        <div class="progress-bar progress-bar-inverse" style="width: 20%"></div>
			                    </div>
			                </div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="contextual-progress">
			                    <div class="clearfix">
			                        <div class="progress-title">App Development</div>
			                        <div class="progress-percentage">3/9</div>
			                    </div>
			                    <div class="progress progress-lg progress-striped active">
			                        <div class="progress-bar progress-bar-success" style="width: 33%"></div>
			                    </div>
			                </div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="contextual-progress">
			                    <div class="clearfix">
			                        <div class="progress-title">App Interface</div>
			                        <div class="progress-percentage">15%</div>
			                    </div>
			                    <div class="progress">
			                        <div class="progress-bar progress-bar-danger" style="width: 15%"></div>
			                    </div>
			                </div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="contextual-progress">
			                    <div class="clearfix">
			                        <div class="progress-title">Documentation</div>
			                        <div class="progress-percentage">4/5</div>
			                    </div>
			                    <div class="progress">
			                        <div class="progress-bar progress-bar-primary" style="width: 80%"></div>
			                    </div>
			                </div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="contextual-progress">
			                    <div class="clearfix">
			                        <div class="progress-title">eCommerce</div>
			                        <div class="progress-percentage">6/10</div>
			                    </div>
			                    <div class="progress progress-striped active">
			                        <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
			                    </div>
			                </div>
						</a>
					</li>
				
					
				</ul>
				<div class="dd-footer">
					<a href="#">View all tasks</a>
				</div>
			</div>
		</li>

		
		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-bell"></i></span><span class="badge badge-alizarin">5</span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="dd-header">
					<span>Notifications</span>
					<span><a href="#">Settings</a></span>
				</div>
				<ul class="scrollthis">
					<li class="">
						<a href="#" class="notification-success">
							<div class="notification-icon"><i class="fa fa-check fa-fw"></i></div>
							<div class="notification-content"><strong>Lorem ipsum</strong> dolor sit amet consectetur adipisicing elit!</div>
							<div class="notification-time">40m</div>
						</a>
					</li>
					<li class="">
						<a href="#" class="notification-danger">
							<div class="notification-icon"><i class="fa fa-times fa-fw"></i></div>
							<div class="notification-content">Etiam porta sem malesuada</div>
							<div class="notification-time">5h</div>
						</a>
					</li>
					<li class="">
						<a href="#" class="notification-inverse">
							<div class="notification-icon"><i class="fa fa-cloud fa-fw"></i></div>
							<div class="notification-content"><strong>Nesciunt</strong> reprehenderit provident distinctio eveniet cupiditate atque</div>
							<div class="notification-time">16h</div>
						</a>
					</li>
					<li class="">
						<a href="#" class="notification-warning">
							<div class="notification-icon"><i class="fa fa-warning fa-fw"></i></div>
							<div class="notification-content">Aperiam accusamus modi ipsum officia quas nisi!</div>
							<div class="notification-time">1d</div>
						</a>
					</li>
					<li class="">
						<a href="#" class="notification-info">
							<div class="notification-icon"><i class="fa fa-shopping-cart fa-fw"></i></div>
							<div class="notification-content">Libero distinctio eveniet</div>
							<div class="notification-time">5d</div>
						</a>
					</li>
					<li class="">
						<a href="#" class="notification-primary">
							<div class="notification-icon"><i class="fa fa-comment fa-fw"></i></div>
							<div class="notification-content">Officiis modi ipsum officia ad dolor sit amet consectetur sit voluptatem accusantium doloremque laudantium totam rem aperiam</div>
							<div class="notification-time">8d</div>
						</a>
					</li>
				</ul>
				<div class="dd-footer">
					<a href="#">View all notifications</a>
				</div>
			</div>
		</li>

		<li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-envelope"></i></span><span class="badge badge-info">1</span></a>
			<div class="dropdown-menu messages arrow">
				<div class="dd-header">
					<span>Messages</span>
					<span><a href="#">Settings</a></span>
				</div>

				<ul class="scrollthis">
					<li class="">
						<a href="#">
							<img class="msg-avatar" src="assets/demo/avatar/avatar_09.png" alt="avatar">
							<div class="msg-content">
								<span class="name">Steven Shipe</span>
								<span class="msg">Nonummy nibh epismod lorem ipsum</span>
							</div>
							<span class="msg-time">30s</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img class="msg-avatar" src="assets/demo/avatar/avatar_01.png" alt="avatar">
							<div class="msg-content">
								<span class="name">Roxann Hollingworth <i class="fa fa-paperclip attachment"></i></span>
								<span class="msg">Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
							</div>
							<span class="msg-time">5m</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img class="msg-avatar" src="assets/demo/avatar/avatar_05.png" alt="avatar">
							<div class="msg-content">
								<span class="name">Diamond Harlands</span>
								<span class="msg">:)</span>
							</div>
							<span class="msg-time">3h</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img class="msg-avatar" src="assets/demo/avatar/avatar_02.png" alt="avatar">
							<div class="msg-content">
								<span class="name">Michael Serio <i class="fa fa-paperclip attachment"></i></span>
								<span class="msg">Sed distinctio dolores fuga molestiae modi?</span>
							</div>
							<span class="msg-time">12h</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img class="msg-avatar" src="assets/demo/avatar/avatar_03.png" alt="avatar">
							<div class="msg-content">
								<span class="name">Matt Jones</span>
								<span class="msg">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et mole</span>
							</div>
							<span class="msg-time">2d</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img class="msg-avatar" src="assets/demo/avatar/avatar_07.png" alt="avatar">
							<div class="msg-content">
								<span class="name">John Doe</span>
								<span class="msg">Neque porro quisquam est qui dolorem</span>
							</div>
							<span class="msg-time">7d</span>
						</a>
					</li>					
				</ul>
				<div class="dd-footer"><a href="#">View all messages</a></div>
			</div>
		</li>

		<li class="dropdown toolbar-icon-bg demo-search-hidden mr5">
			<a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown" data-original-title="" title=""><span class="icon-bg"><i class="fa fa-fw fa-search"></i></span></a>
			
			<div class="dropdown-menu arrow search dropdown-menu-form">
				<div class="dd-header">
					<span>Search</span>
					<span><a href="#">Advanced search</a></span>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="">
					
					<span class="input-group-btn">
						
						<a class="btn btn-primary" href="#">Search</a>
					</span>
				</div>
			</div>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<span class="hidden-xs">Roberta Freitas</span>
				<img class="img-circle" src="assets/demo/avatar/avatar_13.png" alt="Dangerfield">

			</a>
			<ul class="dropdown-menu userinfo">
				<li><a href="#"><span class="pull-left">Edit Profile</span> <i class="pull-right fa fa-pencil"></i></a></li>
				<li><a href="#"><span class="pull-left">Account Settings</span> <i class="pull-right fa fa-cogs"></i></a></li>
				<li><a href="#"><span class="pull-left">Help</span> <i class="pull-right fa fa-question-circle"></i></a></li>
				<li class="divider"></li>
				<li><a href="#"><span class="pull-left">Earnings</span> <i class="pull-right fa fa-money"></i></a></li>
				<li><a href="#"><span class="pull-left">Statement</span> <i class="pull-right fa fa-file-o"></i></a></li>
				<li><a href="#"><span class="pull-left">Withdrawals</span> <i class="pull-right fa fa-credit-card"></i></a></li>
				<li class="divider"></li>
				<li><a href="#"><span class="pull-left">Sair</span> <i class="pull-right fa fa-sign-out"></i></a></li>
			</ul>
		</li>

	</ul>

</header>

<!-- -->
  
  
  
  
  
  
  
  
  
  <div id="wrapper">
    <div id="layout-static">
      <div class="static-sidebar-wrapper sidebar-default">
	    <div class="static-sidebar">
          <div class="sidebar">
		  
		  
		       <!-- box perfil inicio-->
			   <div class="widget stay-on-collapse">
						<div class="widget-body welcome-box tabular">
							<div class="tabular-row">
								<div class="tabular-cell welcome-avatar">
									<a href="#"><img src="assets/demo/avatar/avatar_13.png" class="avatar"></a>
								</div>
								<div class="tabular-cell welcome-options">
									<span class="welcome-text">Bem-vinda,</span>
									<a href="#" class="name">Roberta Freitas</a>
								</div>
							</div>
						</div>
				</div>
			   <!-- box perfil fim -->
				
				
				<div class="widget stay-on-collapse" id="widget-sidebar">
				
					<span class="widget-heading">Menu</span>
					
					<nav role="navigation" class="widget-body">
						<ul class="acc-menu">
							<li >
								<a href="index.html">
								    <i class="fa fa-home"></i>
									<span>Inicio</span>
								</a>
							</li>
							
							<li >
								<a href="usuario.html">
								    <i class="fa fa-pencil"></i>
									<span>Meus Dados</span>
									<span class="badge badge-dark " style="display:none;">2</span>
								</a>
							</li>
							
							<li class="hasChild">
								<a href="javascript:;">
									<i class="fa fa-columns"></i>
									<span>Meu An�ncio</span>
								</a>
								<ul class="acc-menu" style="display:none;">
									<li ><a href="anuncio.html?cmd=1&id=01">Editar</a></li>
									<li ><a href="anuncio.html?cmd=2&id=01">Adcionar/Editar Fotos </a></li>
									<li ><a href="anuncio.html?cmd=3&id=01">Visualizar</a></li>
									<li class="hasChild" style="display:none;">
									    <a href="javascript:;">subMenu
									        <span class="badge badge-dark">2</span>
										</a>
										<ul class="acc-menu">
											<li><a href="layout-horizontal-small.html">Small Menu</a></li>
											<li><a href="layout-horizontal-large.html">Large Menu</a></li>
										</ul>
									</li>
								</ul>
							</li>
							
						</ul>
					</nav>
				
				</div>
				
				
				
          </div>
        </div>
      </div>
	  
      <div class="static-content-wrapper">
        <div class="static-content">
          <div class="page-content">
		  
            <div class="page-heading">            
              <h1>Inicio</h1>
            </div>
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
            </ol>
            <div class="container">
					<h1>Informa��es gerais de seu an�ncio</h1>
              <!-- all content goes here -->
            </div>
          </div>
        </div>
		
		
		<footer role="contentinfo">
			<div class="clearfix">
				<ul class="list-unstyled list-inline pull-left">
					<li><h6 style="margin: 0;"> � 2012 Mal�cia Carioca</h6></li>
				</ul>
				<button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
			</div>
		</footer>
			
			
      </div>
	  </div>
  </div>
 
 
 
 
 
  <div class="infobar-wrapper">
    <div id="widgetarea">
      <!-- all rightbar widgets here -->
    </div>
  </div>
                   
 
 
 
 
    <!--all script tags -->
	<!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="assets/js/jqueryui-1.9.2.min.js"></script> 							<!-- Load jQueryUI -->
<script src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->

<script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script>  		<!-- Sparkline -->
<script src="assets/plugins/jstree/dist/jstree.min.js"></script>  				<!-- jsTree -->

<script src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script src="assets/js/enquire.min.js"></script> 									<!-- Enquire for Responsiveness -->

<script src="assets/plugins/bootbox/bootbox.js"></script>							<!-- Bootbox -->

<script src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->

<script src="assets/js/application.js"></script>
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/demo-switcher.js"></script>


<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<script src="assets/plugins/form-daterangepicker/daterangepicker.js"></script>     	<!-- Date Range Picker -->
<script src="assets/plugins/form-daterangepicker/moment.min.js"></script>             <!-- Moment.js for Date Range Picker -->

<script src="assets/plugins/easypiechart/jquery.easypiechart.js"></script> 			<!-- EasyPieChart -->
<script src="assets/plugins/switchery/switchery.js"></script>     					<!-- Switchery -->

<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>   			<!-- FullCalendar -->

<!-- Charts -->
<script src="assets/plugins/charts-flot/jquery.flot.min.js"></script>             	<!-- Flot Main File -->
<script src="assets/plugins/charts-flot/jquery.flot.stack.min.js"></script>       	<!-- Flot Stacked Charts Plugin -->
<script src="assets/plugins/charts-flot/jquery.flot.orderBars.min.js"></script>   	<!-- Flot Ordered Bars Plugin-->
<script src="assets/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
<script src="assets/plugins/charts-flot/jquery.flot.tooltip.min.js"></script> 		<!-- Flot Tooltips -->

<!-- Maps -->
<script src="assets/plugins/jQuery-Mapael/js/raphael/raphael-min.js"></script>        <!-- Load Raphael as Dependency -->
<script src="assets/plugins/jQuery-Mapael/js/jquery.mapael.js"></script>              <!-- jQuery Mapael -->
<script src="assets/plugins/jQuery-Mapael/js/maps/world_countries.js"></script>       <!-- Vector Data of World Countries -->

<script src="assets/demo/demo-index.js"></script> 									<!-- Initialize scripts for this page-->


    <!-- End loading page level scripts-->

    </body>
</html>