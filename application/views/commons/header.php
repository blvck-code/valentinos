<?php

?>
<!--  Header Start  -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-12">
				<!-- Logo Start  -->
				<div id="logo">
					<a href="<?php echo base_url(); ?>"
					><img
							id="logo_img"
							class="img-fluid"
							src="<?php echo base_url(); ?>assets/images/logo/logo.png"
							alt="Valentinos Village Bistro"
							title="Valentinos Village Bistro"
						/></a>
				</div>
				<!-- Logo End  -->
			</div>
			<div
				class="col-md-7 col-sm-6 col-12 paddleft"
			>
				<!-- Main Menu Start  -->
				<div id="menu">
					<nav class="navbar navbar-expand-md">
						<div class="navbar-header">
							<span class="menutext d-block d-md-none">Menu</span>
							<button
								data-target=".navbar-ex1-collapse"
								data-toggle="collapse"
								class="btn btn-navbar navbar-toggler"
								type="button"
							>
								<i class="icofont icofont-navigation-menu"></i>
							</button>
						</div>
						<div
							class="collapse navbar-collapse navbar-ex1-collapse padd0"
						>
							<ul class="nav navbar-nav">
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>">HOME</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>about">about us</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>menu">Our Menu</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>contact">contact us</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>reservation">book now</a>
								</li>
							</ul>
							<ul class="nav navbar-nav ml-auto pl-3">
								<li class="list-inline-item">
									<ul class="list-inline social">
										<li class="list-inline-item">
											<a class="text-white" href="javascript:void(0)" target="_blank">
												<i class="icofont-facebook"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="text-white" href="javascript:void(0)" target="_blank">
												<i class="icofont icofont-twitter"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="text-white" href="javascript:void(0)" target="_blank">
												<i class="icofont icofont-instagram"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="text-white" href="javascript:void(0)" target="_blank">
												<i class="icofont icofont-pinterest"></i>
											</a>
										</li>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- Main Menu End -->
			</div>
			<div class="col-md-2 col-sm-12 col-12 button-top paddleft">
				<a class="btn-primary btn" href="<?php echo base_url(); ?>reservation">
					Book Your Table
				</a>
			</div>
		</div>
	</div>
</header>
<!-- Header End   -->
