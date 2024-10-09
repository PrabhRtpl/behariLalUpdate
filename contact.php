<?php include 'include/head.php'; ?>
<?php include 'include/navbar.php'; ?>
    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <div class="breadcrumb__area breadcrumb__bg" data-background="assets/img/banner/contact.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Contact Us</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator">/</span>
                                <span property="itemListElement" typeof="ListItem">Contact Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
<section class="contact__area section-py-120">
	<div class="container">
		<div class="row gutter-24">
			<div class="col-lg-4">
				<div class="contact__info-wrap">
				
					<div class="contact__info-item">
						<div class="contact__info-content">
							<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
							</div>
							<div class="content">
								<span>Corporate Office</span>
								<h2 class="title">B9, Surajmal Vihar, near Leela Ambience Hotel, Vikas Marg Exension, Delhi-110092</h2>
							</div>
						</div>
					</div>
					<div class="contact__info-item">
						<div class="contact__info-content">
							<div class="icon">
							
							<i class="fa-solid fa-location-dot"></i>
							</div>
							<div class="content">
								<span>Registered Office</span>
								<h2 class="title">Village Salani, Amloh Road, Mandi Gobindgarh, Punjab-147301</h2>
							</div>
						</div>
					</div>
					<div class="contact__info-item">
						<div class="contact__info-content">
							<div class="icon">
							
							<i class="fa-solid fa-location-dot"></i>
							</div>
							<div class="content">
								<span>Head Office</span>
								<h2 class="title">Village Turan, Amloh Road, Mandi Gobindgarh, Punjab-147301</h2>
							</div>
						</div>
					</div>
					<div class="contact__info-item">
						
						<div class="contact__info-content">
							<div class="icon">
							<i class="fa-solid fa-envelope"></i>
							</div>
							<div class="content">
								<span>MAke A Quote</span>
								<h2 class="title"><a href="mailto:metalrolls@beharilal.com">metalrolls@beharilal.com</a></h2>
							</div>
						</div>
					</div>
					<div class="contact__info-item">
					
						<div class="contact__info-content">
							<div class="icon">
							<i class="fa-solid fa-phone"></i>
							</div>
							<div class="content">
								<span>Call Us 24/7</span>
								<h2 class="title"><a href="tel:+91 9876543210">+91 9876543210</a></h2>
							</div>
						</div>
					</div>
					<div class="contact__info-item">
					
						<div class="contact__info-content">
							<div class="icon">
							<i class="fa-brands fa-whatsapp"></i>
							</div>
							<div class="content">
								<span>Whatsapp</span>
								<h2 class="title"><a href="tel:++91 93165-40709">+91 93165-40709</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<!-- contact-map -->
				<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d54927.693180735194!2d76.256371!3d30.634498000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391010bba67352b7%3A0x4ce8aa08bb76ab23!2sBehari%20Lal%20Ispat%20Private%20Limited!5e0!3m2!1sen!2sus!4v1726129052360!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<!-- contact-map-end -->
				<div class="contact__form-wrap">
					<div class="section__title section__title-three mb-40">
						<span class="sub-title">Get In Touch</span>
						<h2 class="title">Needs Help? Let’s Get in Touch</h2>
					</div>
					<form id="contact-form" action="assets/mail.php" method="post" class="contact__form">
						<div class="row gutter-20">
							<div class="col-md-6">
								<div class="form-grp">
									<input type="text" name="name" placeholder="Your Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-grp">
									<input type="email" name="email" placeholder="Email Address">
								</div>
							</div>
						</div>
						<div class="form-grp">
							<input type="text" name="subject" placeholder="Your Subject">
						</div>
						<div class="form-grp">
							<textarea name="message" placeholder="Type Your Message"></textarea>
						</div>
						<button type="submit" class="btn btn-two">Send Message</button>
						<p class="ajax-response mb-0"></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact-area-end -->

</main>
<!-- main-area-end -->

<?php include 'include/scripts.php'; ?>
<?php include 'include/footer.php'; ?>