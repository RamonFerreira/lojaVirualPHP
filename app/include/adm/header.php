 <!--  header init-->
  
<header id="topnav" class="navbar navbar-inverse navbar-fixed-top clearfix" role="banner">
	<a id="leftmenu-trigger" class="" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
	<a class="navbar-brand-"  href="inicio" style="font-size:31px;" >T&CAdmin</a>
	<ul class="nav navbar-nav toolbar pull-right">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<span class="hidden-xs">Roberta Freitas</span>
				<img class="img-circle" src="<?php echo HTTP_RESOURCE_ADM_ASSETS_PATH; ?>/demo/avatar/avatar_13.png" alt="Dangerfield">
			</a>
			<ul class="dropdown-menu userinfo">
				<li><a href="#"><span class="pull-left">Editar Perfil</span> <i class="pull-right fa fa-pencil"></i></a></li>
				<li><a href="#"><span class="pull-left">Configurações de Conta</span> <i class="pull-right fa fa-cogs"></i></a></li>
				<li><a href="#"><span class="pull-left">Ajuda</span> <i class="pull-right fa fa-question-circle"></i></a></li>
				<li class="divider"></li>
				<li><a href="#"><span class="pull-left">Ganhos</span> <i class="pull-right fa fa-money"></i></a></li>
				<li><a href="#"><span class="pull-left">Statement</span> <i class="pull-right fa fa-file-o"></i></a></li>
				<li><a href="#"><span class="pull-left">Withdrawals</span> <i class="pull-right fa fa-credit-card"></i></a></li>
				<li class="divider"></li>
				<li><a href="<?php echo CONTEXTO; ?>/app/controller/loginController.php?cmd=<?php echo sha1('logout'); ?>"><span class="pull-left">Sair</span> <i class="pull-right fa fa-sign-out"></i></a></li>
			</ul>
		</li>
	</ul>
</header>

<!-- -->