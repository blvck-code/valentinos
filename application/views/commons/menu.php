<?php

?>

<!-- Food Menu Start -->
<div class="menu">
	<div class="menu-inner">
		<div class="container">
			<div class="row">
				<!-- Title Content Start -->
				<div class="col-sm-12 col-12 commontop text-center">
					<h4>Our Menu</h4>
					<div class="divider style-1 center">
						<span class="hr-simple left"></span>
						<i class="icofont icofont-ui-press hr-icon"></i>
						<span class="hr-simple right"></span>
					</div>
					<p>
						We have a set menu each lunch and dinner but would you prefer
						anything else our kitchen is happy to accommodate you.
					</p>
				</div>
				<!-- Title Content End -->
				<div class="col-sm-12 col-12">
					<!--  Menu Tabs Content Start  -->
					<div class="tab-content">
						<!--  Menu Tab Start  -->
						<div class="tab-pane show active" id="all">
							<div class="row">
								<div class="col-md-6 col-sm-6 single-dish col-12">
									<!-- Box Start -->
									<div class="box">
										<div class="image">
											<img
												src="<?php echo base_url(); ?>assets/images/our-menu/01.jpg"
												alt="image"
												title="image"
												class="img-fluid"
											/>
										</div>
										<div class="caption">
											<h4>Thai Chicken Curry</h4>
											<p class="des">Cursus / Dictum / Risus</p>
											<span>
												Coconut based sauce, flavored with lemongrass,served withsteamed rice.
											</span>
										</div>
									</div>
									<!-- Box End -->
								</div>
								<div class="col-md-6 col-sm-6 single-dish col-12">
									<!-- Box Start -->
									<div class="box">
										<div class="image">
											<img
												src="<?php echo base_url(); ?>assets/images/our-menu/04.jpg"
												alt="image"
												title="image"
												class="img-fluid"
											/>
										</div>
										<div class="caption">
											<h4>Murgh masala</h4>
											<p class="des">
												Capers, Lemon and Cream Cheese served with Toast
											</p>
											<span>
												Boneless chicken pieces cooked in tomato onion
				                             	gravy,served with rice and papadum.
				                             </span>
										</div>
									</div>
									<!-- Box End -->
								</div>
								<div class="col-md-6 col-sm-6 single-dish col-12">
									<!-- Box Start -->
									<div class="box">
										<div class="image">
											<img
												src="<?php echo base_url(); ?>assets/images/our-menu/07.jpg"
												alt="image"
												title="image"
												class="img-fluid"
											/>
										</div>
										<div class="caption">
											<h4>Indian vegetable curry</h4>
											<p class="des">
												Poached, Fried or Scrambled, Served with hash
												brown potatoes andGrilled tomatoes
											</p>
											<span>
												Mixed vegetables cooked in onion and tomato gravy
                              					servedwith rice or chapatti
                              				</span>
										</div>
									</div>
									<!-- Box End -->
								</div>
								<div class="col-md-6 col-sm-6 single-dish col-12">
									<!-- Box Start -->
									<div class="box">
										<div class="image">
											<img
												src="<?php echo base_url(); ?>assets/images/our-menu/02.jpg"
												alt="image"
												title="image"
												class="img-fluid"
											/>
										</div>
										<div class="caption">
											<h4>Palak paneer</h4>
											<p class="des">
												Ham, Onion, Tomato, Green
												Chilly, Mushroom
											</p>
											<span>
												Cottage cheese cooked in spinach gravy flavored
                              					with Indianspices, served with rice and papadum..
                              				</span>
										</div>
									</div>
									<!-- Box End -->
								</div>
								<div class="col-md-6 col-sm-6 col-12 single-dish hideable hide">
									<!-- Box Start -->
									<div class="box">
										<div class="image">
											<img
												src="<?php echo base_url(); ?>assets/images/our-menu/01.jpg"
												alt="image"
												title="image"
												class="img-fluid"
											/>
										</div>
										<div class="caption">
											<h4>Thai Chicken Curry</h4>
											<p class="des">Cursus / Dictum / Risus</p>
											<span>
												Coconut based sauce, flavored with lemongrass,served withsteamed rice.
											</span>
										</div>
									</div>
									<!-- Box End -->
								</div>
								<div class="col-md-6 col-sm-6 col-12 single-dish hideable hide">
									<!-- Box Start -->
									<div class="box">
										<div class="image">
											<img
												src="<?php echo base_url(); ?>assets/images/our-menu/04.jpg"
												alt="image"
												title="image"
												class="img-fluid"
											/>
										</div>
										<div class="caption">
											<h4>Murgh masala</h4>
											<p class="des">
												Capers, Lemon and Cream Cheese served with Toast
											</p>
											<span>
												Boneless chicken pieces cooked in tomato onion
				                             	gravy,served with rice and papadum.
				                             </span>
										</div>
									</div>
									<!-- Box End -->
								</div>
							</div>
						</div>
						<!--  Menu Tab End  -->
					</div>
					<!--  Menu Tabs Content End  -->
					<div class="text-center padbot30">
						<button class="btn btn-theme-alt btn-wide" id="show-dishes">
							view more<i class="icofont icofont-curved-double-right"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Food Menu End -->

<script type="text/javascript">
	let show = false;
	const showDishes = document.getElementById('show-dishes');

	showDishes.addEventListener('click', () => {

		if(show===false){
			document.querySelectorAll('.single-dish').forEach(item => {
				item.classList.remove('hide')
			})
			showDishes.innerHTML = 'show less<i class="icofont icofont-curved-double-right"></i>';
			show = true;
		} else if(show === true){

			document.querySelectorAll('.hideable').forEach(item => {
				item.classList.add('hide')
			})
			showDishes.innerHTML = 'view more<i class="icofont icofont-curved-double-right"></i>';
			show = false;
		}

	})

</script>