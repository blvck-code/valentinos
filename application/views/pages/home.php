<?php


?>
<?php $this->load->view('commons/header');?>

<!-- Slider Start -->
<div class="slide">
	<div class="slideshow owl-carousel">
		<!-- Slider Backround Image Start -->
		<div class="item">
			<img src="<?php echo base_url(); ?>assets/images/background/banner-1.jpg" alt="banner" title="banner" class="img-fluid"/>
		</div>
		<div class="item">
			<img src="<?php echo base_url(); ?>assets/images/background/banner-2.jpg" alt="banner" title="banner" class="img-fluid"/>
		</div>
		<div class="item">
			<img src="<?php echo base_url(); ?>assets/images/background/banner-3.jpg" alt="banner" title="banner" class="img-fluid"/>
		</div>
		<div class="item">
			<img src="<?php echo base_url(); ?>assets/images/background/banner-4.jpg" alt="banner" title="banner" class="img-fluid"/>
		</div>
		<!-- Slider Backround Image End -->
	</div>

	<!-- Slide Detail Start  -->
	<div class="slide-detail">
		<div class="container">
			<img src="<?php echo base_url(); ?>assets/images/logo/logo.png" alt="Valentinos Village Bistro" title="Valentinos Village Bistro" class="img-fluid" />
			<h4>LOVES HEALTHY FOOD</h4>
			<h5 class="text-white">Welcome to Valentinos Village Bistro where you will find the best local food with friendliest customer service.</h5>
			<a class="btn-primary btn btn-wide" href="<?php echo base_url(); ?>menu">Today's menu</a>
		</div>
	</div>
	<!-- Slide Detail End  -->
</div>
<!-- Slider End  -->

<!-- Order Start  -->
<div class="order">
	<div class="container">
		<div class="row justify-content-center">
			<!-- Title Content Start -->
			<div class="col-sm-12 commontop text-center">
				<h4>Order Delivery and take out</h4>
				<div class="divider style-1 center">
					<span class="hr-simple left"></span>
					<i class="icofont icofont-ui-press hr-icon"></i>
					<span class="hr-simple right"></span>
				</div>
				<p>
					Make an order now and get it delivered within 8 hours with out fast and reliable delivery members.
				</p>
			</div>
			<!-- Title Content End -->
			<div class="col-lg-7 col-sm-12">
				<!-- Search Form Start -->
				<form class="form-horizontal search-icon" method="post">
					<fieldset>
						<div class="form-group">
							<input
								name="s"
								value=""
								placeholder="Search keyword"
								class="form-control"
								type="text"
							/>
						</div>
						<button type="submit" value="submit" class="btn btn-theme">
							<i class="icofont icofont-search"></i>Search
						</button>
					</fieldset>
				</form>
				<!-- Search Form End -->
				<ul class="list-inline text-center">
					<li class="list-inline-item">
						<i class="icofont icofont-fast-food"></i>
						<p>Select Food</p>
					</li>
					<li class="list-inline-item">
						<i class="icofont icofont-food-basket"></i>
						<p>Order Food</p>
					</li>
					<li class="list-inline-item">
						<i class="icofont icofont-fast-delivery"></i>
						<p>Delivery or Take Out</p>
					</li>
				</ul>
				<img
					src="<?php echo base_url(); ?>assets/images/lines.png"
					alt="line"
					title="line"
					class="img-fluid"
				/>
			</div>
		</div>
	</div>
</div>
<!-- Order End  -->
