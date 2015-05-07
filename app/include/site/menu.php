	<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="index.html">T&C Multimarcas</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="inicio" <?php echo $inHome; ?> > Inicio</a></li>
                    <li><a href="catalogue.html" style="display: none;" style="display: none;"  <? echo $isActive; ?> >Catalogue</a></li>
                    <li><a href="cart.html"  style="display: none;" <? echo $isActive; ?>>Shopping Cart</a></li>
                    <li><a href="checkout.html" style="display: none;"  <? echo $isActive; ?> >Checkout</a></li>
                    <li style="display: none;"  class="nav-dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Pages <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="typography.html">Typography</a></li>
						</ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->