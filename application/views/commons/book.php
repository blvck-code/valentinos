<?php

$email = $mobile = $name = $date = $time = $persons ='';

$errors = array('name'=>'','email'=>'', 'mobile'=>'', 'date'=>'', 'time'=>'', 'persons'=>'');

if(isset($_POST['submit'])){

	// check name
	if(empty($_POST['name'])){
		$errors['name'] = 'Client name is required <br />';
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

	//check date
	if(empty($_POST['date'])){
		$errors['date'] = 'Date is required <br />';
	} else {
		$date = $_POST['date'];
	}

	// check time
	if(empty($_POST['time'])){
		$errors['time'] = 'Time is required <br />';
	} else {
		$time = $_POST['time'];
	}

	//check persons
	if(empty($_POST['persons'])){
		$errors['persons'] = 'Number of persons is required <br />';
	} else {
		$persons = $_POST['persons'];
	}

	if(!array_filter($errors)){	
		$email = $mobile = $name = $date = $time = $persons ='';
	}

}

?>

<!-- Reservation Start -->
<div class="reservation">
	<div class="container" style="padding-bottom: 2rem;">
		<div class="row">
			<!-- Title Content Start -->
			<div class="col-sm-12 commontop white text-center">
				<h4>Book Your Table</h4>
				<div class="divider style-1 center">
					<span class="hr-simple left"></span>
					<i class="icofont icofont-ui-press hr-icon"></i>
					<span class="hr-simple right"></span>
				</div>
				<p>
					This simple but modern coffee shop gives you a chance to take
					some time off and read the newspaper, your favorite novel or
					catch up with an old friend.
				</p>
			</div>
			<!-- Title Content End -->
			<div class="col-md-12 col-12">
				<!-- Reservation Form Start -->
				<form action="reservation" method="post" class="row" novalidate="novalidate">
					<div class="form-group col-md-4 col-sm-6">
						<?php if($errors['name']) : ?>
							<i class="icofont icofont-ui-user"></i>
							<input
								name="name"
								placeholder="name"
								id="input-name"
								class="form-control is-invalid"
								value="<?php echo htmlspecialchars($name); ?>"
								type="text"
							/>
							<label class="error">
								<?php echo $errors['name']; ?>
							</label>
						<?php else: ?>
							<i class="icofont icofont-ui-user"></i>
							<input
								name="name"
								placeholder="name"
								id="input-name"
								class="form-control"
								value="<?php echo htmlspecialchars($name); ?>"
								type="text"
							/>
						<?php endif; ?>
					</div>
					<div class="form-group col-md-4 col-sm-6">
						<?php if($errors['email']) : ?>
							<i class="icofont icofont-ui-message"></i>
							<input
								name="email"
								placeholder="email"
								id="input-email"
								value="<?php echo htmlspecialchars($email); ?>"
								class="form-control is-invalid"
								type="text"
							/>
							<label class="error">
								<?php echo $errors['email']; ?>
							</label>
						<?php else : ?>
							<i class="icofont icofont-ui-message"></i>
							<input
								name="email"
								placeholder="email"
								id="input-email"
								value="<?php echo htmlspecialchars($email); ?>"
								class="form-control"
								type="text"
							/>
						<?php endif; ?>
					</div>
					<div class="form-group col-md-4 col-sm-6">
						<?php if($errors['mobile']) : ?>
							<i class="icofont icofont-phone"></i>
							<input
								name="mobile"
								placeholder="mobile number"
								id="input-mobile"
								class="form-control is-invalid"
								value="<?php echo htmlspecialchars($mobile); ?>"
								type="text"
							/>
							<label class="error">
								<?php echo $errors['mobile']; ?>
							</label>
						<?php else : ?>
							<i class="icofont icofont-phone"></i>
							<input
								name="mobile"
								placeholder="mobile number"
								id="input-mobile"
								class="form-control"
								value="<?php echo htmlspecialchars($mobile); ?>"
								type="text"
							/>
						<?php endif; ?>
					</div>
					<div class="form-group col-md-4 col-sm-6">
						<?php if($errors['date']) : ?>
							<i class="icofont icofont-ui-calendar"></i>
							<input
								name="date"
								placeholder="date"
								id="input-date"
								class="form-control is-invalid"
								value="<?php echo htmlspecialchars($date); ?>"
								type="text"
							/>
							<label class="error">
								<?php echo $errors['date']; ?>
							</label>
						<?php else: ?>
							<i class="icofont icofont-ui-calendar"></i>
							<input
								name="date"
								placeholder="date"
								id="input-date"
								class="form-control"
								value="<?php echo htmlspecialchars($date); ?>"
								type="text"
							/>
						<?php endif; ?>
					</div>
					<div class="form-group col-md-4 col-sm-6">

						<?php if($errors['time']) : ?>
							<i class="icofont icofont-clock-time"></i>
							<input
								name="time"
								placeholder="time"
								id="input-time"
								class="form-control is-invalid"
								value="<?php echo htmlspecialchars($time); ?>"
								type="text"
							/>
							<label class="error">
								<?php echo $errors['time']; ?>
							</label>
						<?php else: ?>
							<i class="icofont icofont-clock-time"></i>
							<input
								name="time"
								placeholder="time"
								id="input-time"
								class="form-control"
								value="<?php echo htmlspecialchars($time); ?>"
								type="text"
							/>
						<?php endif; ?>
					</div>
					<div class="form-group col-md-4 col-sm-6">
						<?php if($errors['persons']) : ?>
							<i class="icofont icofont-users"></i>
							<input
								name="persons"
								placeholder="number of persons"
								id="input-persons"
								class="form-control is-invalid"
								value="<?php echo htmlspecialchars($persons); ?>"
								type="text"
							/>
							<label class="error">
								<?php echo $errors['persons']; ?>
							</label>
						<?php else: ?>
							<i class="icofont icofont-users"></i>
							<input
								name="persons"
								placeholder="number of persons"
								id="input-persons"
								class="form-control"
								value="<?php echo htmlspecialchars($persons); ?>"
								type="text"
							/>
						<?php endif; ?>
					</div>
					<div class="form-group col-12 col-md-12">
						<div class="">

							<?php if(isset($_POST['submit'])) : ?>
								<?php if(array_filter($errors)) : ?>
									<div
									class="alert alert-danger"
									role="alert"
									>
									<div class="alert-text">
										Could not submit your data <br />
										Please fill all the forms and try again later.
									</div>
								<?php else : ?>
									<div
										class="alert alert-success"
										role="alert"
									>
									<div class="success-text">
										Your Message has been successfully sent.
									</div>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="form-group col-12 col-md-12">
						<div class="text-center">
							<div class="center">
	                			<input type="submit" name="submit" value="book now" class="btn btn-theme btn-wide" >
	            			</div>
						</div>
					</div>
				</form>
				<!-- Reservation Form End -->
			</div>
		</div>
	</div>
</div>


<!-- Reservation End  -->
