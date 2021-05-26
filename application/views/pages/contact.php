<?php

$email = $mobile = $name = $message = '';

$errors = array('name'=>'','email'=>'', 'mobile'=>'', 'message' => '');

if(isset($_POST['submit'])){

	// check name
	if(empty($_POST['name'])){
		$errors['name'] = 'Name field is required <br />';
	} else {
		$name = $_POST['name'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
			$errors['name'] = 'Name must be letter and spaces only.';
		}
	}

	// check email
	if(empty($_POST['email'])){
		$errors['email'] = 'An email is required <br />';
	} else {
		$email = $_POST['email'];
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = 'Email must be a valid email address';
		}
	}

	//check mobile
	if(empty($_POST['mobile'])){
		$errors['mobile'] = 'Mobile number is required <br />';
	} else {
		$mobile = $_POST['mobile'];
	}

	//check message
	if(empty($_POST['message'])){
		$errors['message'] = 'Message field is required <br />';
	} else {
		$message = $_POST['message'];
	}


	if(!array_filter($errors)){	
		$email = $mobile = $name = $date = $time = $persons ='';
	}

	if(!array_filter($errors)){	
		$email = $mobile = $name = $date = $time = $persons ='';

		// send mail here
	}

}

?>

<!-- Contact us Start -->
<div class="contactus">
	<div class="container">
		<div class="row">
			<!-- Title Content Start -->
			<div class="col-sm-12 commontop text-center">
				<h4>Get In Touch</h4>
				<div class="divider style-1 center">
					<span class="hr-simple left"></span>
					<i class="icofont icofont-ui-press hr-icon"></i>
					<span class="hr-simple right"></span>
				</div>
				<p>
					Feel free to contact us at any time and we we always get back to you.
				</p>
			</div>
			<!-- Title Content End -->

			<div class="col-md-5 col-12">
				<!--  Contact form Start  -->
				<form
					method="POST"
					action="contact"
					class="form-horizontal"
				>
				
					<div class="form-group row">
						<div class="col-md-12 col-sm-12 col-xs-12">
						<?php if($errors['name']) : ?>
							<i class="icofont icofont-ui-user"></i>
							<input
								type="text"
								name="name"
								value="<?php echo htmlspecialchars($name); ?>"
								id="input-name"
								class="form-control is-invalid"
								placeholder="name"
							/>
							<label style="font-size: 11px; color: red;" class="error">
								<?php echo $errors['name']; ?>
							</label>
						<?php else : ?>
							<i class="icofont icofont-ui-user"></i>
							<input
								type="text"
								name="name"
								value="<?php echo htmlspecialchars($name); ?>"
								id="input-name"
								class="form-control"
								placeholder="name"
							/>
						<?php endif; ?>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-12 col-sm-12 col-xs-12">
						<?php if($errors['email']) : ?>
							<i class="icofont icofont-ui-message"></i>
							<input
								type="email"
								name="email"
								value="<?php echo htmlspecialchars($email); ?>"
								id="input-email"
								class="form-control is-invalid"
								placeholder="email"
							/>
							<label style="font-size: 11px; color: red;" class="error">
								<?php echo $errors['email']; ?>
							</label>
						<?php else : ?>
							<i class="icofont icofont-ui-message"></i>
							<input
								type="email"
								name="email"
								value="<?php echo htmlspecialchars($email); ?>"
								id="input-email"
								class="form-control"
								placeholder="email"
							/>
						<?php endif; ?>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php if($errors['mobile']) : ?>
								<i class="icofont icofont-phone"></i>
								<input
									type="text"
									name="mobile"
									value="<?php echo htmlspecialchars($mobile); ?>"
									id="input-phone"
									class="form-control is-invalid"
									placeholder="mobile number"
								/>
								<label style="font-size: 11px; color: red;" class="error">
									<?php echo $errors['mobile']; ?>
								</label>
							<?php else : ?>
								<i class="icofont icofont-phone"></i>
								<input
									type="text"
									name="mobile"
									value="<?php echo htmlspecialchars($mobile); ?>"
									id="input-phone"
									class="form-control"
									placeholder="mobile number"
								/>
							<?php endif; ?>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12">
							<?php if($errors['message']) : ?>
								<i class="icofont icofont-pencil-alt-5"></i>
								<textarea
									name="message"
									id="input-enquiry"
									class="form-control is-invalid"
									rows="5"
									value="<?php echo htmlspecialchars($message); ?>"
									placeholder="message"
								></textarea>
								<label style="font-size: 11px; color: red;" class="error">
									<?php echo $errors['message']; ?>
								</label>
							<?php else : ?>
								<i class="icofont icofont-pencil-alt-5"></i>
								<textarea
									name="message"
									id="input-enquiry"
									value="<?php echo htmlspecialchars($message); ?>"
									class="form-control"
									rows="5"
									placeholder="message"
								></textarea>
							<?php endif; ?>
						</div>
					</div>
					<?php if(isset($_POST['submit'])) : ?>
						<?php if(array_filter($errors)) : ?>
							<div class="alert alert-danger" role="alert">
								<div class="alert-text">
									Could not submit your data <br />
									Please fill all the forms and try again later.
								</div>
							</div>
						<?php else : ?>
							<div class="alert alert-success" role="alert">
								<div class="success-text">
									Your message has been successfully sent.<br />
									We'll be intouch with you.
								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>

					<div class="buttons">
						<input
							class="btn btn-theme btn-block"
							type="submit"
							name="submit"
							value="Send Message"
						/>
					</div>
				</form>
				<!--  Contact form End  -->
			</div>
			<div class="col-md-7 col-12">
				<!--  Map Start  -->
				<div class="map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7275322866353!2d37.21741931526543!3d-1.3398036360660424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMjAnMjMuMyJTIDM3wrAxMycxMC42IkU!5e0!3m2!1sen!2ske!4v1621852279476!5m2!1sen!2ske"
					></iframe>
				</div>
				<!--  Map End  -->
			</div>
		</div>
	</div>
</div>
<!-- Contact Us End  -->

<!-- Address Start  -->
<div class="address">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="address-box">
					<div class="box text-center">
						<div class="icon">
							<i class="icofont icofont-home"></i>
						</div>
						<h4>ADDRESS</h4>
						<p>
							Komarock, Komal - Kenol Road
							Machakos, Kenya
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="address-box">
					<div class="box text-center">
						<div class="icon">
							<i class="icofont icofont-phone"></i>
						</div>
						<h4>PHONE NO.</h4>
						<p>+254789400200</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="address-box">
					<div class="box text-center">
						<div class="icon">
							<i class="icofont icofont-ui-message"></i>
						</div>
						<h4>EMAIL</h4>
						<p>
							<a href="mailto:info@valentinosvillagebistro.co.ke">
								info@valentinosvillagebistro.co.ke
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="address-box">
					<div class="box social">
						<h4>SOCIAL LINKS</h4>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0)" target="_blank">
									<i class="icofont icofont-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0)" target="_blank">
									<i class="icofont icofont-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0)" target="_blank">
									<i class="icofont icofont-instagram"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0)" target="_blank">
									<i class="icofont icofont-pinterest"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Address End  -->
