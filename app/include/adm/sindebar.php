  
    <div class="static-sidebar-wrapper sidebar-default">
	    <div class="static-sidebar">
          <div class="sidebar">
		  
		  
		       <!-- box perfil inicio-->
			   <div class="widget stay-on-collapse">
						<div class="widget-body welcome-box tabular">
							<div class="tabular-row">
								<div class="tabular-cell welcome-avatar">
									<a href="#"><img src="<?php echo HTTP_RESOURCE_ADM_ASSETS_PATH; ?>/demo/avatar/avatar_13.png" class="avatar img-rounded"></a>
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
								<a href="inicio">
								    <i class="fa fa-home"></i>
									<span>Painel de controle</span>
								</a>
							</li>
							
							<!--li >
								<a href="usuario.html">
								    <i class="fa fa-pencil"></i>
									<span>Meus Dados</span>
									<span class="badge badge-dark " style="display:none;">2</span>
								</a>
							</li-->
							
							<li class="hasChild">

								<a href="javascript:;">
									<i class="fa fa-columns"></i>
									<span>Catálogo</span>
								</a>

								<ul class="acc-menu" style="display:none;">

									<li><a href="<?php echo $linkDepartamento; ?>">Departamentos</a></li>
									
									<li ><a href="<?php echo $linkProduto; ?>">Produtos</a></li>
									
									<li ><a href="<?php echo $linkMarca; ?>">Marcas</a></li>
									
									<li class="hasChild" style="display:none;">
									    <a href="javascript:;">subMenu
									        <span class="badge badge-dark hide">2</span>
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