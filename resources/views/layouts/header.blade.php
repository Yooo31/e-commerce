	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav mr-auto ml-5">
							<li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                  <i class="fas fa-home mr-2"></i> Home
                </a>
              </li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-shopping-bag mr-2"></i>Shop
                </a>
							</li>
							<li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">
                <i class="fas fa-envelope mr-2"></i>Contact
                </a>
              </li>
						</ul>
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fas fa-user-plus mr-1"></i>S'inscrire
                </a>
              </li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-sign-in-alt mr-1"></i>Connexion
                </a>
							</li>
							<li class="nav-item">
                <a class="nav-link" href="">
                <i class="fas fa-truck mr-1"></i>Commander
                </a>
              </li>
							<li class="nav-item">
                <a class="nav-link" href="contact">
                <i class="fas fa-shopping-cart mr-1"></i>Panier
                </a>
              </li>
							<li class="nav-item">
                <a class="nav-link" href="contact">
                <i class="fas fa-sign-out-alt mr-1"></i>Déonnexion
                </a>
              </li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
	</header>
	<!-- End Header Area -->