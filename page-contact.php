<?php
include 'header.php';
?>
    <!--End Main Header -->

  <!-- Hidden bar back drop -->
  <div class="hidden-bar-back-drop"></div>

    <!-- Hidden Bar -->
    <section class="hidden-bar">
        <div class="inner-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo-white.png" alt="" title=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <div class="text-box">
                <h4 class="title">Transforming your ideas into digital reality</h4>
                <div class="text">Sed ut perspiciatis unde omnis natus error voluptatem santium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab nllo inventore veritatis quasi architecto beatae vitae</div>
            </div>

            <ul class="contact-list-one">
                <li>
                    <i class="icon lnr-icon-phone-handset"></i>
                    <span class="title">Call Now</span>
                    <div class="text"><a href="tel:+92880098670">+92 (8800) - 98670</a></div>
                </li>
                <li>
                    <i class="icon lnr-icon-envelope1"></i>
                    <span class="title">Send Email</span>
                    <div class="text"><a href="mailto:help@company.com">help@company.com</a></div>
                </li>
                <li>
                    <i class="icon lnr-icon-map-marker"></i>
                    <span class="title">Address</span>
                    <div class="text">66 Broklyant, New York India 3269</div>
                </li>
            </ul>

            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </section>
    <!--End Hidden Bar -->

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
		<div class="auto-container">
			<div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
				<h1 class="title">Contact Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="sec-title">
						<span class="sub-title">Send us email</span>
						<h2>Feel free to write</h2>
					</div>
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="https://kodesolution.com/html/2023/archisky-html/includes/sendmail.php" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-5">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
							<button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">Need any help?</span>
							<h2>Get in touch with us</h2>
							<div class="text">Ready to transform your space? Let's collaborate and create the interior of your dreams. Contact us today to discuss your project and bring your vision to life.</div>
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6>Have any question?</h6>
									<a href="09123197522"><span>Free</span> - 09123197522</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6>Write email</h6>
									<a href="mailto:needhelp@company.com">needhelp@company.com</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6>Visit anytime</h6>
									<span>Mehta mansion rd no 24P Patna,Bihar 800024</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

	<!-- Map Section-->
	<section class="map-section">
    <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.3657790571633!2d85.0840163744729!3d25.62598291420162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed57e9fd544fe1%3A0x7e834786537ef916!2sRishav%20kutchen%20(Home%20Interiors)!5e0!3m2!1sen!2sin!4v1695017252322!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	<!--End Map Section-->
   
    <!-- Footer Section -->
    <?php
include 'footer.php';
?>
  <!--End Footer Section -->

</div><!-- End Page Wrapper -->


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>

<!-- form submit -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script>
	(function($) {
		$("#contact_form").validate({
			submitHandler: function(form) {
				var form_btn = $(form).find('button[type="submit"]');
				var form_result_div = '#form-result';
				$(form_result_div).remove();
				form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
				var form_btn_old_msg = form_btn.html();
				form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
				$(form).ajaxSubmit({
					dataType:  'json',
					success: function(data) {
						if( data.status == 'true' ) {
							$(form).find('.form-control').val('');
						}
						form_btn.prop('disabled', false).html(form_btn_old_msg);
						$(form_result_div).html(data.message).fadeIn('slow');
						setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
					}
				});
			}
		});
	})(jQuery);
</script>

</body>

<!-- Mirrored from kodesolution.com/html/2023/archisky-html/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 11:31:43 GMT -->
</html>