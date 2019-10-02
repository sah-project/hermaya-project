
			<div id="header" class="">
				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">
						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">
							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<a class="pull-right" href="#">
									<i class="fa fa-user"></i> 
								</a>
							</li>
							<!-- /QUICK SHOP CART -->
						</ul>
						<!-- /BUTTONS -->
						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="<?=base_url();?>dashboard/assets/images/logo_dark.png" alt="" />
						</a>
					<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main">
									<!-- HOME -->
									<li class="<?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
										<a href="#slider">
											HOME
										</a>
									</li>
									<!-- MANAGE BERITA -->
									<li class="<?php echo $this->uri->segment(2) == 'manage-berita' ? 'active': '' ?>">
										<a href="#">
											MANAGEMENT BERITA
										</a>
									</li>
									<!-- PAGES -->
									<li class="dropdown <?php echo $this->uri->segment(2) == 'manage-berita' ? 'active': '' ?>">
										<a class="dropdown-toggle" href="#">
											MANAGEMENT DATA
										</a>
										<ul class="dropdown-menu">
											<li><a href="page-careers.html">APBD</a></li>
											<li><a href="page-careers.html">RKPD</a></li>
											<li><a href="page-sitemap.html">RKJM</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
				<!-- /Top Nav -->
			</div>
