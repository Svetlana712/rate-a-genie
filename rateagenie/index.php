<?php include 'inc/head.php'; ?>

<body class="page-scroll-wrap">

	<?php include 'inc/header.php'; ?>

	<div data-spy="scroll" data-target="#header" class="page-scroll-content">

		<section class="main-box" id="main">

			<div class="stripes-wrap">
				<div class="stripe-line l0"></div>
				<div class="stripe-line l1"></div>
				<div class="stripe-line l2"></div>
				<div class="stripe-line l3"></div>
			</div>
			<!-- stripes-wrap -->


			<div class="container container-large">

				<div class="mb20">
					<h1 class="smaller-size">
						Post Your Repair <span class="blue">Get your device repaired in 3 easy steps.</span>
					</h1>

				</div>


				<div class="pos-rel">

					<?php include 'inc/main-slider.php'; ?>
					
					<form action="send.php" method="post" class="absolute-form steps-form">
						<div class="container">
						
							<ul class="nav nav-tabs steps" role="tablist">
								<li class="nav-item">
									<a class="btn btn-steps steps1 active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1. Device</a>
								</li>
								<li class="nav-item">
									<a class="btn btn-steps steps2 default" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">2. Issue</a>
								</li>
								<li class="nav-item">
									<a class="btn btn-steps steps3 default" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">3. Details</a>
								</li>
							</ul>
							<!-- steps -->
							<div class="tab-content steps-content">
								<div class="tab-pane fade show step-choice steps1-content active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<ul class="device-choose list-inline d-md-flex align-items-md-stretch">
										<li class="radio-item">
											<input type="radio" id="radio1" name="radio-group" class="radio-input">
											<label for="radio1">
												<div class="device-wrap">
													<div class="device-item">
														<img src="img/device/comp.png" alt="">
													</div>
												</div>
												<h4>Desktop Computers</h4>
											</label>
										</li>
										<li class="radio-item">
											<input type="radio" id="radio2" name="radio-group" class="radio-input">
											<label for="radio2">
												<div class="device-wrap">
													<div class="device-item">
														<img src="img/device/laptop.png" alt="">
													</div>
												</div>
												<h4>Laptops</h4>
											</label>
										</li>
										<li class="radio-item">
											<input type="radio" id="radio3" name="radio-group" class="radio-input">
											<label for="radio3">
												<div class="device-wrap">
													<div class="device-item">
														<img src="img/device/tablet.png" alt="">
													</div>
												</div>
												<h4>Tablets</h4>
											</label>
										</li>
										<!-- <li class="radio-item">
											<input type="radio" id="radio4" name="radio-group" class="radio-input">
											<label for="radio4">
												<div class="device-wrap">
													<div class="device-item">
														<img src="img/device/tv.png" alt="">
													</div>
												</div>
												<h4>TVs / Monitors</h4>
											</label>
										</li> -->
										<li class="radio-item">
											<input type="radio" id="radio4" name="radio-group" class="radio-input">
											<label for="radio4">
												<div class="device-wrap">
													<div class="device-item">
														<img src="img/device/phone.png" alt="">
													</div>
												</div>
												<h4>Mobiles</h4>
											</label>
										</li>
										<li class="radio-item">
											<input type="radio" id="radio5" name="radio-group" class="radio-input radio-more">
											<label for="radio5">
												<div class="device-wrap">
													<div class="device-item">
														<img src="img/device/other.png" alt="">
													</div>
												</div>
												<h4>Other...</h4>
											</label>
										</li>
									</ul>
									<!-- device-choose -->
								</div>
								<div class="tab-pane fade step-choice steps2-content" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<div class="row">
										<div class="col-12 col-md-6">

											
											<div class="choice-background">
												<div class="dropdown device-dropdown">
													<a href="#" class="btn dropdown-toggle" data-toggle="dropdown" id="make">Make</a>
								                    <div class="dropdown-menu device-dropdown-menu">

														<div class="handle-wrap">
									                        <a class="vertical-handle"></a>
															<div class="custom-scrollbar simplebar">
																<a class="dropdown-item" href="#">Apple</a>
																<a class="dropdown-item" href="#">Samsung</a>
																<a class="dropdown-item" href="#">Google</a>
																<a class="dropdown-item" href="#">Dell</a>
																<a class="dropdown-item" href="#">Huawei</a>
																<a class="dropdown-item" href="#">Motorolla</a>
																<a class="dropdown-item" href="#">LG</a>
																<a class="dropdown-item" href="#">Acer</a>
																<a class="dropdown-item" href="#">Sony</a>
																<a class="dropdown-item" href="#">Asus</a>
																<a class="dropdown-item" href="#">Microsoft</a>
																<a class="dropdown-item" href="#">HTC</a>
																<a class="dropdown-item" href="#">Lenovo</a>
																<a class="dropdown-item" href="#">Huawei</a>
																<a class="dropdown-item" href="#">Blackberry</a>
																<a class="dropdown-item" href="#">MSI</a>
																<a class="dropdown-item" href="#">One Plus</a>
																<a class="dropdown-item" href="#">HP</a>
															</div>
															<!-- custom-scrollbar simplebar -->
								                        </div>
								                        <!-- handle-wrap -->

								                    </div>
								                    <!-- dropdown-menu device-dropdown-menu -->
												</div>
												<!-- dropdown device-dropdown -->
											</div>
											<!-- choice-background -->
										</div>
										<!-- col -->

										<div class="col-12 col-md-6">
											<div class="choice-background">
												<div class="dropdown device-dropdown">
													<a href="#" class="btn dropdown-toggle" data-toggle="dropdown" id="model">Model</a>
												
													<div class="dropdown-menu device-dropdown-menu">

														<div class="handle-wrap">
									                        <a class="vertical-handle"></a>
															<div class="custom-scrollbar simplebar">
																<a class="dropdown-item" href="#">Item1</a>
																<a class="dropdown-item" href="#">Next item2</a>
																<a class="dropdown-item" href="#">Item3</a>
																<a class="dropdown-item" href="#">One more item4</a>
																<a class="dropdown-item" href="#">Separete item5</a>
																<a class="dropdown-item" href="#">Super long item 6 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, placeat.	</a>	
																<a class="dropdown-item" href="#">Another item7</a>
															</div>
															<!-- custom-scrollbar simplebar -->
								                        </div>
								                        <!-- handle-wrap -->

													</div>
													<!-- dropdown-menu device-dropdown-menu -->
												</div>
												<!-- dropdown device-dropdown -->
											</div>
											<!-- choice-background -->
										</div>
										<!-- col -->
									</div>
									<!-- row -->
								</div>
								<div class="tab-pane fade step-choice steps3-content" id="contact" role="tabpanel" aria-labelledby="contact-tab">
									<div class="row d-md-flex justify-content-center">
										
										<div class="col-12 col-md-6">
											<div class="form-group">
												<input type="text" class="form-control form-mail" placeholder="Enter your email...">
											</div>
										</div>
									</div>
									<div class="row d-md-flex justify-content-center">
										<div class="col-12 col-md-6 ">
											<div class="enter-box mb10 white-bg">
						                        <a href="#0" class="btn btn-block btn-device-submit">Submit</a>
						                        <!-- <button type="submit" class="btn btn-block btn-device-submit">Submit</button> -->
						                        <img src="img/submit.gif" alt="" class="submit-image">
						                        <h4 class="thanks-message">Thank you. <br>Our specialists will contact you soon.</h4>
						                    </div>
										</div>
										<!-- col -->
									</div>
									<!-- row -->
								</div>
							</div>
							<!-- steps-content -->
						
						</div>
						<!-- container -->
					
					</form>
				</div>
				<!-- pos-rel -->


			</div>
			<!-- container -->

		</section>
		<!-- main-box -->


		<section class="works" id="works">

			<div class="works-box violet-gradient-box d-md-flex align-items-md-center">
				<div class="container white">
					<div class="row d-md-flex align-items-md-center">
						<div class="col-md-6">
							<h2 class="white">Broken Device?
								<span class="small-letters">The easiest way to get it fixed.</span>
							</h2>
						</div>
						<!-- col -->
						<div class="col-md-6">
							<div class="item-img text-center">
								<img src="img/work-items/1.png" alt="">
							</div>
							<!-- item-img -->
						</div>
						<!-- col -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- works-box -->

			<div class="works-box works-light d-md-flex align-items-md-center">
				<div class="container white">
					<div class="row d-md-flex align-items-md-center">
						<div class="col-md-6">
							<div class="item-img text-center">
								<img src="img/work-items/2.png" alt="">
							</div>
							<!-- item-img -->
						</div>
						<!-- col -->
						<div class="col-md-6">
							<div class="py50">
								<div class="mb20">
									<h3 class="large white ttu text-left">RECEIVE QUOTES</h3>
								</div>
								<div class="mb20">
									<p class="large violet-text">
										Our trusted genies will send you quotes so you can chose which to fix your broken device.
									</p>
								</div>
								<a href="#" class="large read-more">Learn more about security <i class="fa fa-long-arrow-right"></i></a>
							</div>
							<!-- py50 -->
						</div>
						<!-- col -->
					</div>
					<!-- row d-md-flex -->
				</div>
				<!-- container -->
			</div>
			<!-- works-box -->

			<div class="works-box gradient2 d-md-flex align-items-md-center">
				<div class="container white">
					<div class="row d-md-flex align-items-md-center">
						<div class="col-md-6">
							<a href="#0" class="tilter tilter--4 tilter-box">
								<figure class="tilter__figure figure-large" style="transform: scaleX(1) scaleY(1) scaleZ(1) translateX(0px) translateY(0px) translateZ(0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);">
									<img class="tilter__image" src="img/work-items/3.png" alt="">
									<div class="tilter__deco tilter__deco--shine"><div style="transform: scaleX(1) scaleY(1) scaleZ(1) translateX(0px) translateY(0px) translateZ(0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div></div>
									

									<div class="filter-wrap-user">
										<figcaption class="tilter__caption" style="transform: scaleX(1) scaleY(1) scaleZ(1) translateX(0px) translateY(0px) translateZ(0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);">
											<img src="img/logo.png" alt="" class="tilter__title tilter__logo__user">
											<div class="filter-deco-wrap">
												<div class="tilter__deco tilter__deco--overlay" style="transform: scaleX(1) scaleY(1) scaleZ(1) translateX(0px) translateY(0px) translateZ(0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);"></div>
												<img class="tilter__title" src="img/work-items/sky-bg.jpg" alt="">
											</div>
										</figcaption>
									</div>
								</figure>
							</a>
							<!-- tilter -->
						</div>
						<!-- col -->
						<div class="col-md-6">
							<div class="py50">
								<div class="mb20">
									<h3 class="large ttu white text-left">ANY PROBLEM </h3>
								</div>
								<div class="mb20">
									<p class="large white text-shadow">
										​No matter what is wrong with your device, simply post the issue and a qualified Genie will be in contact to arrange a fix.
									</p>
								</div>
							</div>
							<!-- py50 -->
						</div>
						<!-- col -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- works-box -->

			<div class="works-box d-md-flex align-items-md-center">
				<div class="container white">
					<div class="row d-md-flex align-items-md-center">
						<div class="col-md-6">
							<div class="item-img text-center">
								<img src="img/work-items/3.gif" alt="">
							</div>
							<!-- item-img -->
						</div>
						<!-- col -->
						<div class="col-md-6">
							<div class="py50">
								<div class="mb20">
									<h3 class="large ttu blue text-left text-shadow">RECEIVE UPDATES</h3>
								</div>
								<div class="mb20">
									<p class="large hover-text">
										Stay in communication with your trusted Genie, and receive status updates.
									</p>
								</div>
							</div>
						</div>
						<!-- col -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- works-box -->

			<div class="works-box py10 gradient10 d-md-flex align-items-md-center">
				<div class="container white">
					<div class="row d-md-flex align-items-md-center">
						<div class="col-md-6">
							<div class="item-img text-center img">
								<img src="img/work-items/4.png" alt="" id="image">
							</div>
							<!-- item-img -->
						</div>
						<!-- col -->
						<div class="col-md-6">
							<div class="py50">
								<div class="mb20">
									<h3 class="large ttu white text-left">ANY DEVICE</h3>
								</div>
								<div class="mb20">
									<p class="large white text-shadow">
										Choose to accept quotes and exchange details so your Genie can arrange your fix.
									</p>
								</div>
							</div>
							<!-- py50 -->
						</div>
						<!-- col -->
					</div>
				</div>
				<!-- container -->
			</div>
			<!-- works-box -->
			
		</section>
		<!-- works -->

			
		<section class="pricing py0" id="pricing">

			<div class="pricing-main pt100 pb50">
				<div class="container">
					<div class="mb50">
						<h2>Pricing</h2>
					</div>
				
					<div class="advantages--wrap">
						<div class="row mb50">
							<div class="col-md-3 col-sm-6 col-6">
								<div class="advantage-item">
									<i class="icon icon--auto-updates text--dark-body"></i>
									<h6>Receive quotes</h6>
								</div>
							</div>
							<!-- col -->
						
							<div class="col-md-3 col-sm-6 col-6">
								<div class="advantage-item">
									<i class="icon icon--change-management text--dark-body"></i>
									<h6>Choose which to accept</h6>
								</div>
							</div>
							<!-- col -->
						
							<div class="col-md-3 col-sm-6 col-6">
								<div class="advantage-item">
									<i class="icon icon--solutions text--dark-body"></i>
									<h6>Never any hidden costs</h6>
								</div>
							</div>
							<!-- col -->
						
							<div class="col-md-3 col-sm-6 col-6">
								<div class="advantage-item">
									<i class="icon icon--customer-success text--dark-body"></i>
									<h6>Satisfaction Guarantee</h6>
								</div>
							</div>
							<!-- col -->
						</div>
						<!-- row -->
						<div class="mb20">
							<div class="text-center">
								<p class="large">
									Rate a Genie helps you get the best price and service to fix your broken device.
								</p>
								<a href="#" class="btn-free-user mb20">Try it free today</a>
								<p class="text-center mb50">
									FREE to list - receive <b>no obligation</b> quotes.
								</p>

							</div>
							<!-- price-item-wrap -->
						</div>
						<!-- row -->
					</div>
					<!-- advantages--wrap -->
				</div>
				<!-- container -->
			</div>
			<!-- pricing-main -->

			<div class="grey-box-wrap">
				<div class="container">

					<h2 class="mb20 grey">
						<b>Thousands of users</b> trust Rate a Genie to simplify fixing their broken devices. 
					</h2>

					<ul class="list-inline grey-logos text-center">
						<li class="grey-logo-item">
							<img src="img/logos-grey/google.png" alt="">
						</li>
						<li class="grey-logo-item">
							<img src="img/logos-grey/sony.png" alt="">
						</li>
						<li class="grey-logo-item">
							<img src="img/logos-grey/htc.png" alt="">
						</li>
						<li class="grey-logo-item">
							<img src="img/logos-grey/apple.png" alt="">
						</li>
						<li class="grey-logo-item">
							<img src="img/logos-grey/samsung.png" alt="">
						</li>
					</ul>

				</div>
				<!-- container -->
			</div>
			<!-- grey-box-wrap -->

			<div class="container">

				<div class="pt50">
				
					<div class="accordion-box mb50">

						<div class="d-md-flex align-items-md-center justify-content-md-start mb20 clearfix">
							<h3 class="large text-left">Frequently asked questions</h3>
							<a href="#" class="accordeon-show ml-auto" id="js-show">
								<span class="arrow-show"></span>
								<span class="show-text">Show all</span>
							</a>
						</div>
						
						<div id="accordion-faq" role="tablist">
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="tab">
									<h3 class="mb-0 fw300 text-left">
										<span class="arrow-accorderon"></span>
										How does it work?
									</h3>
								</a>
										
								<div id="collapseOne" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Simply post the details of your broken device and Genies will give you indicative quotes. Genies have the opportunity to revise their quotes, bringing their original quote lower bidding in a reverse auction. You will normally find that the quotes get lower so you end up with the best possible price. 
										</p>
										<!-- <ul class="circled-style">
											<li>
												<p>
													Full bank tracking to see if payments you are expecting have been paid.
												</p>
											</li>
											<li>
												<p>
													SMS and email alerts to let you know the status of your expected payments. 
												</p>
											</li>
											<li>
												<p>
													Track up to 10 payers.
												</p>
											</li>
										</ul> -->
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
										
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="tab">
									<h3 class="mb-0 fw300 text-left">
										<span class="arrow-accorderon"></span>
										How much does it cost?	
									</h3>
								</a>
							
								<div id="collapseTwo" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											To post your broken device is free and will always be free. Rate a Genie do not add anything onto the costs of your repair. All we charge for is for Genies to see your job postings, so there is never any cost to you, from us. 
										</p>
										<!-- <ol class="numbered-style">
											<li>
												<p>
													Create a new account or sign in with your username and password. 
							
												</p>
											</li>
											<li>
												<p>
													Provide payment information to enable future monthly payments.
												</p>
											</li>
											<li>
												<p>
													The payment method you provide will be automatically charged at the end of your first free month to ensure that you do not experience any interruptions with your service. You can cancel online without penalty before your trial ends, by logging a ticket and/or turning off auto-renew in the payment and billing area of the Dashboard.
												</p>
											</li>
											<li>
												<p>
													Once your payment method is confirmed, you'll be transferred to your Dashboard to setup monitoring. 
												</p>
											</li>
										</ol> -->
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="tab">
									<h3 class="mb-0 fw300 text-left">
										<span class="arrow-accorderon"></span>
										How should I choose which Genie to use?
									</h3>
								</a>
								<div id="collapseThree" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Rate a Genie specialises in matching people with broken devices with Genies who can fix broken devices. We suggest using a combination of reviews, Genie's’ profile pages and price to assess if you want to contact a Genie and use them to fix your device.
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" role="tab">
									<h3 class="mb-0 fw300 text-left">
										<span class="arrow-accorderon"></span>
										Who are these Genies?
									</h3>
								</a>
								<div id="collapseFour" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Genies can be businesses or individuals who have passed our screening process, demonstrating that they can fix broken devices. 
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" role="tab">
									<h3 class="mb-0 fw300 text-left">
										<span class="arrow-accorderon"></span>
										I’ve contacted a Genie but now want to speak to a different Genie. Is that ok?
									</h3>
								</a>
								<div id="collapseFive" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Yes, of course, you are welcome to directly contact as many Genies as you like, there is no obligation to continue.
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" role="tab">
									<h3 class="mb-0 fw300 text-left">
										<span class="arrow-accorderon"></span>
										How long does it take to hear back with quotes?
									</h3>
								</a>
								<div id="collapseSix" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Typically you will hear back from Genies with quotes in minutes to hours. 
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										Do you share my details with Genies?
									</h3>
								</a>
								<div id="collapseSeven" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Once you have selected your chosen Genie you are then asked if you want to exchange details. It is at this point that you are asked which details you want to exchange. You can choose to exchange names, email addresses, phone number and approx location. You don’t need to exchange all those if you don’t want to, just specify which at the point of exchanging. You also don’t need to reveal any of your details, you can choose just to see theirs. 
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										Where will my device be fixed?
									</h3>
								</a>
								<div id="collapseEight" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Depending on the Genie’s location you will have a number of options for how to arrange for your device to be fixed. This can either be in person where you take the device to them, the Genie travelling to you, or you could use our postal service where the device is either securely picked up from you or you post the device yourself. 
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										I’m just looking for a quote, is that ok?
									</h3>
								</a>
								<div id="collapseNine" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Yes, absolutely. Once you have listed your device as broken, there is no obligation to continue with any quotes.
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										If the Genie finds more problems with my device, what happens?
									</h3>
								</a>
								<div id="collapseTen" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											If having examined your device the Genie thinks the problem is different to what you put in your listing, you can discuss that with the Genie, they may want to charge more, or less for the fix. Remember you can always ask for your device back with no obligation to pay, however there may be postage costs if transportation is required. 
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										How do I contact a Genie?
									</h3>
								</a>
								<div id="collapseEleven" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Once you have chosen the Genie to fix your device, by accepting their quote you will be given their details to contact them, or you can authorise for your details to be released and they can contact you.
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										When do I pay for my device to be fixed?
									</h3>
								</a>
								<div id="collapseThirteen" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Once you have exchanged details your Genie will inform you how they accept payment and how to arrange for the fix. 
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										Do you share my details with 3rd parties?
									</h3>
								</a>
								<div id="collapseFourteen" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											We never share your details to any third party without your permission. Your personal details are only shared with Genies when you agree for your details to be exchanged having received a quote.
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										How do you screen Genies who have signed up to Rate a Genie?
									</h3>
								</a>
								<div id="collapseFifteen" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Genies have to prove that they are legitimate and able to fix your device in a number of ways. This depends on the credentials of the Genie and how they have been sourced. For example an individual applying to be a Genie is asked to provide proof of identity, proof of address, evidence of their technical ability, work history and professional references. Should a Genie not provide these, their profile listing will indicate clearly that they are not a fully verified Genie. 
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
							<div class="card">
								<a class="card-header" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen" role="tab">
									<h3 class="mb-0 fw300 text-left">
										
										<span class="arrow-accorderon"></span>
										How do I rate my Genie?
									</h3>
								</a>
								<div id="collapseSixteen" class="collapse" role="tabpanel">
									<div class="card-block">
										<p>
											Once you have exchanged details with a Genie you have the opportunity to rate each other. You can rate Genies based on Communication, Speed and Quality.
										</p>
									</div>
								</div>
								<!-- collapse -->
							</div>
							<!-- card -->
							
						</div>
						<!-- #accordion-faq -->

					</div>
					<!-- accordion-box -->

					<!-- <div class="privacy-wrap mb20">
						<h4 class="text-left mb20">
							Our Refund policy:
						</h4>

						<div class="d-md-flex align-items-md-center pos-rel">
							<img src="img/guarantee.gif" alt="" class="guarantee-img">
							<div>
								<p class="mb0">We are committed to customer satisfaction.</p>
								<p class="mb0">If for any reason you are unhappy with our service, simply contact us within 30 days of purchase for a <b>full no-hassle refund</b>.</p>
							</div>
						</div>
					</div> -->

					<!-- <div class="container container-small second-nav-box pt50">
						<h2>Want your device fixed?
							<span class="blue">Economical, quick and no fuss.</span>
						</h2>
					</div> -->
				
				</div>
				<!-- pt50 -->

			</div>
			<!-- container -->

		</section>
		<!-- pricing -->


		<section class="pt0 pb50" id="cases">

			<!-- <div class="container container-small second-nav-box">
				<h2>Want your device fixed?
					<span class="blue">Economical, quick and no fuss.</span>
				</h2>
			</div> -->

			<div id="small-nav">

				<div class="second-nav-container" id="second-nav-container">
					<div class="container container-small">
					
						<ul class="navbar-nav same-height-parent-css second-nav" id="second-nav">
							<li class="nav-item same-height-css active">
								<a class="nav-link scrollable-small" href="#desctop">Desktop Computers</a>
							</li>
							<li class="nav-item same-height-css">
								<a class="nav-link scrollable-small" href="#laptops">Laptops</a>
							</li>
							<li class="nav-item same-height-css">
								<a class="nav-link scrollable-small" href="#mobile">Mobiles and Tablets</a>
							</li>
							<!-- <li class="nav-item same-height-css">
								<a class="nav-link scrollable-small" href="#monitors">TV and Monitors</a>
							</li> -->
							<li class="nav-item same-height-css">
								<a class="nav-link scrollable-small" href="#other">Other Devices</a>
							</li>
						</ul>
						<!-- #second-nav -->

					</div>
					<!-- container -->
				</div>
				<!-- second-nav-container -->

				<div class="container container-small second-nav-box">

					<div id="desctop" class="post-item mb50">
						<img src="img/icons/desctop.jpg" alt="" class="logo-block">
						<div class="mb50">
							<h3 class="green text-uppercase">
								Desktop Computers
							</h3>
						</div>
						<div class="row d-md-flex">
							<div class="col-md-6">
								<div class="ovh-card">
									<div data-tilt>
										<div class="post-card pcard1">
											<img src="img/post-card/1.png" alt="">
											<div class="post-info white orange-bg">
												<div class="post-absolute"></div>
												<h5><a href="#" class="body-link">'Rate a Genie'</a> makes it easy to find experienced and trusted Genies who can fix your device in no time.</h5>
											</div>
										</div>  
									</div>
								</div>
							</div>
							<!-- col-md-6 -->
							<div class="col-md-6">
								<div class="card-introduction">
									<h4 class="text-left mb20">
										Inexpensive issues that our Genies repair quickly:
									</h4>

									<ul class="user-list">
										<li>Slow performance and start-up</li>
										<li>Loud fan noises and overheating</li>
										<li>Computer freezing and not responding</li> 
										<li>Driver upgrades and reinstalling</li>
										<li>Spyware, Malware and Virus removal</li>
										<li>Data recovery and hard drive crashes</li> 
										<li>Hardware and software upgrades</li>
										<li>Apple Mac, Linux and Windows repairs and upgrades</li>
									</ul>

									<p>
										Post your job in just 3 steps and our Genies will contact you with quotes for your repair.
									</p>
								</div>
							</div>
							<!-- col-md-6 -->
						</div>
						<!-- row -->
					</div>
					<!-- post-item -->

					<div id="laptops" class="post-item mb50">
						<img src="img/icons/laptop.jpg" alt="" class="logo-block">
						<div class="mb50">
							<h3 class="green text-uppercase">
								Laptops
							</h3>
						</div>
						<div class="row tablet-rtl">
							<div class="col-md-6">
								<div class="rtl">
									<div class="ovh-card">
										<div data-tilt>
											<div class="post-card pcard2 ltr">
												<div class="post-card-img">
													<img src="img/post-card/2.png" alt="">
												</div>
												<div class="post-info white blue-bg">
													<div class="post-absolute"></div>
													<h5>With <a href="#" class="body-link">'Rate a Genie'</a> I now spend less time and money finding how to fix my broken device.</h5>
												</div>
											</div>  
										</div>
									</div>
								</div>
							</div>
							<!-- col-md-6 -->
							<div class="col-md-6 order-1">
								<div class="ltr card-introduction">
									<h4 class="text-left mb20">
										Our Genies are experts in quickly and cost effectively fixing problems such as:
									</h4>    
									<ul class="user-list">
										<li>Won’t turn on or charge</li>
										<li>AC adapter repairs</li> 
										<li>Battery replacement</li>
										<li>Cracked case</li>
										<li>Broken and cracked screens</li> 
										<li>Internet speed and connection dropping</li>
										<li>Noisy fan or hardware</li> 
										<li>Spills and keyboard problems</li>
									</ul>
									<p>
										Even if your issue isn't listed above, post your job and our Genies will be in contact with quotes to fix, which you can chose to accept or decline, with no obligation.
									</p>
								</div>
							</div>
							<!-- col-md-6 -->
						</div>
						<!-- row -->
					</div>
					<!-- post-item -->

					<div id="mobile" class="post-item mb50">
						<img src="img/icons/mobile.jpg" alt="" class="logo-block">
						<div class="mb50">
							<h3 class="green text-uppercase">
								Mobiles and Tablets
							</h3>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="ovh-card">
									<div data-tilt>
										<div class="post-card pcard3">
											<img src="img/post-card/3.png" alt="">
											<div class="post-info white yellow-bg">
												<div class="post-absolute"></div>
												<h5>I can keep track at each stage of the fix, knowing exactly when my device will be fixed and back with me.</h5>
											</div>
										</div>  
									</div>  
								</div>
							</div>
							<!-- col-md-6 -->
							<div class="col-md-6">
								<div class="card-introduction">
									<h4 class="text-left mb20">
										There are trusted and verified Genies waiting to fix common problems such as:
									</h4>
									<ul class="user-list">
										<li>Cracked screens</li>
										<li>Slow performance</li>
										<li>Poor battery life</li>
										<li>Stopped charging</li>
										<li>Water damage</li>
										<li>Won’t switch on Microphone and speaker problems </li>
										<li>Button or keypad responsiveness</li>
									</ul> 
									<p>
										Mobiles are our Genies speciality. When it comes to broken devices, you name it we have seen it, and fixed it. Post your job and within minutes receive quotes for your device to be fixed.
									</p>
								</div>
							</div>
							<!-- col-md-6 -->
						</div>
						<!-- row -->
					</div>
					<!-- post-item -->

					<!-- <div id="monitors" class="post-item mb50">
						<img src="img/icons/tv.jpg" alt="" class="logo-block">
						<div class="mb50">
							<h3 class="green text-uppercase">
								TV and Monitors
							</h3>
						</div>
						<div class="row tablet-rtl">
							<div class="col-md-6">
								<div class="rtl">
									<div class="ovh-card">
										<div data-tilt>
											<div class="post-card pcard4 ltr">
												<img src="img/post-card/4.png" alt="">
												<div class="post-info white violet-bg">
													<div class="post-absolute"></div>
													<h5><a href="#" class="body-link">'Rate a Genie'</a> makes it easy to keep track of my repair so I can be sure that my TV will be fixed with skill and care.</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="ltr card-introduction">
									<h4  class="text-left mb20">
										Genies ready and willing to fix TV and Monitor problems such as:
									</h4>
									<ul class="user-list">
										<li>Stuck or dead pixels</li>
										<li>Won’t switch on or switches itself off</li>
										<li>Smart TV Apps won’t work</li> 
										<li>Intermittent or no internet access</li>
										<li>Fuzzy, blurry or colour problems</li> 
										<li>Inputs not working</li> 
										<li>Controller programming or replacement</li>
										<li>Cracked or broken screens</li>
									</ul>
									<p>
										No problem, or screen to big, no problem or screen to small for our Genies. You can be sure that your device will be fixed and repaired with no fuss at competitive prices. Just post with Rate a Genie today and receive quick quotes.
									</p>
								</div>
							</div>
						</div>
					</div> -->

					<div id="other" class="post-item mb50">
						<img src="img/icons/other.jpg" alt="" class="logo-block">
						<div class="mb50">
							<h3 class="green text-uppercase">
								Other Devices
							</h3>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="ovh-card">
									<div data-tilt>
										<div class="post-card pcard5">
											<img src="img/post-card/5.jpg" alt="">
											<div class="post-info white crimson-bg">
												<div class="post-absolute"></div>
												<h5>The flexible platform makes it easy for us to post jobs and receive amazing quotes.</h5>
											</div>
										</div>  
									</div>  
								</div>
							</div>
							<!-- col-md-6 -->
							<div class="col-md-6">
								<div class="card-introduction">
									<p>
										Our Genies specialise in all sorts of devices that you may not normally be able to get fixed, or incur expensive out of warrant charges. Try posting your job today and see who can economically and reliably fix it. 
									</p>
									<h4 class="text-left mb20">Other Devices:</h4>
									<ul class="user-list">
										<li>Smartwatches and fitness devices</li>
										<li>Gaming consoles, controllers and accessories</li> 
										<li>Inbuilt battery replacements</li>
										<li>Drone and remote control devices</li> 
										<li>Sound systems, headphones and speakers</li> 
										<li>Cameras, video cameras and security cameras</li>
										<li>Wireless and IOT connected gadgets</li>
										<li>TV streaming and recording devices</li>
									</ul> 
									<p>
										Whatever broken mobile device you need fixing, post your job today and our Genies will give you a competitive quote to get it fixed quickly and with no fuss.
									</p>
								</div>
							</div>
							<!-- col-md-6 -->
						</div>
						<!-- row -->
					</div>
					<!-- post-item -->

				</div>
				<!-- container container-small second-nav-box -->

			</div>
			<!-- #small-nav -->

		</section>
		<!-- #cases -->


		<section class="py0" id="security">

			<div class="security-title py100 image-bg">
				<div class="fade"></div>

				<div class="container">
					<div class="mb20">
						<h2 class="white">
							Reliable. Trusted. Secure.
						</h2>
						<div class="text-center">
							<p class="large white">
								Protecting your device is our mission. We vet every Genie to make sure they are qualified and trust worthy. If there are no local Genies who can fix your device, we've partnered with Yodel who ship securely collect, track and deliver your device to your chosen Genie.
							</p>
						</div>
					</div>
					<a href="#header" class="btn-free-user">
						Post your repair 
					</a>
				</div>
				<!-- container -->
			</div>
			<!-- security-title -->

			<div class="py50">

				<div class="container">
					<div class="security-form-wrap mb20">
						<div class="security-form">
							<img src="img/security/all-devices.png" alt="">
						</div>
					</div>
					<!-- security-form-wrap -->
				</div>
				<!-- container -->

			</div>
			<!-- py50 -->

			<div>

				<div class="container">
					<div class="mb50">
						<h2 class="bordo">Security by design</h2>
						<div class="text-center">
							<p class="large">
								Our infrastructure is designed to constantly be tried, tested and reviewed ensuring that <span class="two-words">‘Rate a Genie'</span> uses the best technologies to keep your device safe and returned as expected.
							</p>
						</div>
					</div>
					<div class="row security-items-wrap">
						<div class="col-md-6 mb20">
							<div class="row d-md-flex align-content-md-stretch security-item">
								<div class="col-md-4 col-sm-3">
									<div class="security-icon">
										<img src="img/security/1.svg" alt="">
									</div>
								</div>
								<!-- col -->
								<div class="col-md-8 col-sm-9">
									<h3 class="bordo text-left">Reviewed Genies</h3>
									<p>
										After the job is completed our community leaves reviews showing the quality of work, reliability, speed and value for money so you can see how well Genies are performing before using them.
									</p> 
								</div>
								<!-- col -->
							</div>
							<!-- row -->
							
						</div>
						<!-- col -->
						
						<div class="col-md-6 mb20">
							<div class="row d-md-flex align-content-md-stretch security-item">
								<div class="col-md-4 col-sm-3">
									<div class="security-icon">
										<img src="img/security/2.svg" alt="">
										
									</div>
								</div>
								<!-- col -->
								<div class="col-md-8 col-sm-9">
									<h3 class="bordo text-left">Verified Genies</h3>
									<p>
										To become a trusted Genie, we undertake screening and identify verification so you can be sure that you are dealing with a traceable and identifiable entity.  
									</p>
								</div>
								<!-- col -->
							</div>
							<!-- row -->
							
						</div>
						<!-- col -->

					</div>
					<!-- row security-items-wrap -->

					<div class="row security-items-wrap">

						<div class="col-md-6 mb20">
							<div class="row d-md-flex align-content-md-stretch security-item">
								<div class="col-md-4 col-sm-3">
									<div class="security-icon">
										<img src="img/security/3.svg" alt="">
										
									</div>
								</div>
								<!-- col -->
								<div class="col-md-8 col-sm-9">
									<h3 class="bordo text-left">Accreditations</h3>
									<p>
										Our Genies have the opportunity to list their accreditations and supporting evidence to our site which you can use to base your decision on which Genie to have fix your device. 
									</p>
								</div>
								<!-- col -->
							</div>
							<!-- row -->
							
						</div>
						<!-- col -->
						
						<div class="col-md-6 mb20">
							<div class="row d-md-flex align-content-md-stretch security-item">
								<div class="col-md-4 col-sm-3">
									<div class="security-icon">
										<img src="img/security/4.svg" alt="">
										
									</div>
								</div>
								<!-- col -->
								<div class="col-md-8 col-sm-9">
									<h3 class="bordo text-left">Complaint Resolution</h3>
									<p>
										If you are unhappy for any reason,just let us know we will happily investigate and try to ensure all parties are satisfied. 
									</p>
								</div>
								<!-- col -->
							</div>
							<!-- row -->
							
						</div>
						<!-- col -->

					</div>
					<!-- row security-items-wrap -->

					<div class="row security-items-wrap">
						
						<div class="col-md-6 mb20">
							<div class="row d-md-flex align-content-md-stretch security-item">
								<div class="col-md-4 col-sm-3">
									<div class="security-icon">
										<img src="img/security/5.svg" alt="">
										
									</div>
								</div>
								<!-- col -->
								<div class="col-md-8 col-sm-9">
									<h3 class="bordo text-left">Secure infrastructure</h3>
									<p>
										‘Rate a Genie’ regularly undergoes both internal and external network penetration tests, and third-party code reviews to keep your data safe. We adhere to the GDPR 2018 regulations.
									</p>
								</div>
								<!-- col -->
							</div>
							<!-- row -->
							
						</div>
						<!-- col -->
						
						<div class="col-md-6 mb20">
							<div class="row d-md-flex align-content-md-stretch security-item">
								<div class="col-md-4 col-sm-3">
									<div class="security-icon">
										<img src="img/security/6.svg" alt="">
										
									</div>
								</div>
								<!-- col -->
								<div class="col-md-8 col-sm-9">
									<h3 class="bordo text-left">Free and no obligation</h3>
									<p>
										Submitted your job free of charge for no obligation to continue quotes. Having accepted, on inspection, should a Genie find a different problem you are welcome to reject the fix.
									</p>
								</div>
								<!-- col -->
							</div>
							<!-- row -->
							
						</div>
						<!-- col -->
					</div>
					<!-- row security-items-wrap -->

				</div>
				<!-- container -->

			</div>
			<!-- py50 -->

			<div class="security-banner">
				<img src="img/security/banner.jpg" alt="">
			</div>
			<!-- security-banner -->
				
		</section>
		<!-- #security -->


		<section class="supported-brands-title py100 image-bg pb100" id="brands">
			<div class="fade"></div>

			<div class="container">
				<h2 class="white">Supported Brands</h2>
			</div>

			<?php include 'inc/supported-brands.php'; ?>

			<div class="container">
				<!-- <div class="mb50">
					<ul class="work-list clearfix">
						<li><a href="#0" class="bank-list">GOOGLE</a></li>
						<li><a href="#0" class="bank-list">ACER</a></li>
						<li><a href="#0" class="bank-list">HTC</a></li>
						<li><a href="#0" class="bank-list">SONY</a></li>
						<li><a href="#0" class="bank-list">SAMSUNG</a></li>
						<li><a href="#0" class="bank-list">DELL</a></li>
						<li><a href="#0" class="bank-list">APPLE</a></li>
						<li><a href="#0" class="bank-list">ASUS</a></li>
						<li><a href="#0" class="bank-list">MSI</a></li>
						<li><a href="#0" class="bank-list">MICROSOFT</a></li>
						<li><a href="#0" class="bank-list">HP</a></li>
						<li><a href="#0" class="bank-list">LENOVO</a></li>
						<li><a href="#0" class="bank-list">MOTOROLA</a></li>
						<li><a href="#0" class="bank-list">HUAWEI</a></li>
						<li><a href="#0" class="bank-list">LG</a></li>
						<li><a href="#0" class="bank-list">BLACKBERRY</a></li>
						<li><a href="#0" class="bank-list">ONE PLUS</a></li>
					</ul>
				</div> -->

				<div class="row col-md-flex align-items-md-top text-justify">
					<div class="col-12 col-md-6">
						<p class="large white ls-small">
							Our rated Genies support a diverse range of brands from all over the world. If your brand or model of device is not listed you can still post the job and Genies will consider if they are able to fix it before giving a quote. 
						</p>
					</div>
					<div class="col-12 col-md-6">
						<p class="large white ls-small">
							We're currently focused on devices that need fixing in the United Kingdom. Expanding coverage to international Genies is on our roadmap, but we don't have a concrete timeline just yet.
						</p>
					</div>
				</div>
				<!-- row -->
			</div>
			<!-- container -->

		</section>	
		<!-- supported-brands-title -->

		<?php include 'inc/footer.php'; ?>			
	
	</div>
	<!-- page-scroll-content -->

	<?php include 'inc/js-list.php'; ?>			

</body>
</html>