<?php

/**
    Template part for displaying the Gravity Forms partial
 */

//Advanced Custom Fields 
$form_id 		= get_sub_field('form_id');
$gravity_forms 	= get_sub_field('gravity_forms');
$hide_block 	= get_sub_field('hide_block');

?>

<?php if (empty($hide_block)) : ?>

	<!-- GRAVITY FORMS
	=================================== -->
	<section id="<?php if ($form_id) : echo 'form-' . $form_id . '';
					endif; ?>" class="form">
		<div class="container-md">
			<div class="row justify-content-center">

				<?php if (is_page('personal-membership')) : ?>
					<div class="col-lg-6 mb-4 mb-lg-0">
						<div class="membership-signup color-white mb-4 mb-md-0">
							<div class="bg-black px-3 px-sm-4 pt-5 d-flex flex-column drop-shadow h-100">
								<h2 class="position-relative text-center text-uppercase f-900 mb-5">Individual <br>Memberships</h2>
								<div class="mb-5">
									<div class="d-flex justify-content-between">
										<h3 class="text-uppercase f-700">
											<p>White Member</p>
										</h3>
										<h3 class="f-900 pl-2">$150</h3>
									</div>

									<div class="divider-line bg-theme-tertiary my-2"></div>

									<p>Shirt or Hat and Window Sticker. NO SEATS.</p>
								</div>
								<div class="mb-5">
									<div class="d-flex justify-content-between">
										<h3 class="text-uppercase f-700">
											<p>White Plus</p>
										</h3>
										<h3 class="f-900 pl-2">$225</h3>
									</div>

									<div class="divider-line bg-theme-tertiary my-2"></div>

									<p>Shirt or Hat and Window Sticker. 1 Reserved Seat with admission in the Booster Club Section for all home games.</p>
								</div>
								<div class="mb-5">
									<div class="d-flex justify-content-between">
										<h3 class="text-uppercase f-700">
											<p><span class="color-primary">Red</span> Member</p>
										</h3>
										<h3 class="f-900 pl-2">$400</h3>
									</div>

									<div class="divider-line bg-theme-tertiary my-2"></div>

									<p>Shirt, Hat, and Window Sticker. 2 Reserved Seats with admission in the Booster Club Section for all home games.</p>
								</div>
								<div class="mb-5">
									<div class="d-flex justify-content-between">
										<h3 class="text-uppercase f-700">
											<p><span style="color: #ffd700;">Gold</span> Member</p>
										</h3>
										<h3 class="f-900 pl-2">$650</h3>
									</div>

									<div class="divider-line bg-theme-tertiary my-2"></div>

									<p>2 Shirts, 1 Hat, and Window Sticker. 4 Reserved Seat with admission in the Booster Club Section for all home games.</p>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<?php if (is_page('business-membership')) : ?>
					<div class="col-lg-6">
						<div class="membership-signup color-white mb-4 mb-md-0">
							<div class="bg-black px-3 px-sm-4 pt-5 d-flex flex-column drop-shadow h-100">
								<h2 class="position-relative text-center text-uppercase f-900 mb-5">Corporate <br>Sponsorships</h2>
								<div class="mb-5">
									<div class="d-flex justify-content-between">
										<h3 class="text-uppercase f-700">
											<p><span class="color-primary">Wild</span> Cat</p>
										</h3>
										<h3 class="f-900 pl-2">$500</h3>
									</div>

									<div class="divider-line bg-theme-tertiary my-2"></div>

									<p>Shirt or Hat, Window Sticker, and a 3×8 Banner in east end-zone of Memorial Stadium advertising your business.</p>
								</div>
								<div class="mb-5">
									<div class="d-flex justify-content-between">
										<h3 class="text-uppercase f-700">
											<p><span class="color-primary">Big</span> Cat</p>
										</h3>
										<h3 class="f-900 pl-2">$650</h3>
									</div>

									<div class="divider-line bg-theme-tertiary my-2"></div>

									<p>Shirt or Hat, Window Sticker, 2 Reserved Seats with admission to all home games, and a 3×8 Banner in east end-zone of Memorial Stadium advertising your business.</p>
								</div>
								<div class="mb-5">
									<div class="d-flex justify-content-between">
										<h3 class="text-uppercase f-700">
											<p><span class="color-primary">Super</span> Cat</p>
										</h3>
										<h3 class="f-900 pl-2">$1,350</h3>
									</div>

									<div class="divider-line bg-theme-tertiary my-2"></div>

									<p>2 Shirt, Hat, Window Sticker, 4 Reserved Seats with admission to all home games, and a 3×8 Banner in west end-zone of Memorial Stadium advertising your business.</p>
								</div>

								<h3 class="mb-2">All Levels of Memberships Include:</h3>
								<div class="mb-5">
									<div class="d-flex align-items-center my-1">
										<span class="color-primary">
											<i class="fa-solid fa-football ml-3 mr-2"></i>
										</span>
										Reserved Booster Club Parking
									</div>
									<div class="d-flex align-items-center my-1">
										<span class="color-primary">
											<i class="fa-solid fa-football ml-3 mr-2"></i>
										</span>
										Pre-Game Cookout
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<div class="col-lg-6 d-block d-lg-flex flex-row">
					<div class="form-wrapper w-100 bg-theme-primary px-3 pt-4 pb-2 p-sm-5 drop-shadow">
						<?php gravity_form($gravity_forms, true, true, false, '', false); ?>
					</div><!-- /.form-wrapper -->
				</div><!-- /.col-10 -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /#form -->

<?php endif; ?>