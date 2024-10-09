<?php include 'include/head.php'; ?>
<?php include 'include/navbar.php'; ?>
<!-- main-area -->
<main class="main-area fix">

    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg" data-background="assets/img/banner/career-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">Career </h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.php">Home</a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">Career  </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <section class="consultation__area section-py-120">
            <div class="container">
                <div class="row gx-0">
                    <!-- <div class="col-lg-5">
                        <div class="consultation__img">
                            <img src="assets/img/images/consultation_img.jpg" alt="img">
                        </div>
                    </div> -->
                    <div class="col-12 col-md-12 col-lg-10 m-auto">
                        <div class="consultation__form-wrap">
                            <h2 class="title">Career</h2>
                            <form action="#" class="consultation__form">
                                <div class="form-grp">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name">
                                </div>
                                <div class="form-grp">
                                    <label for="email"> Email ID</label>
                                    <input type="email" id="email">
                                </div>
                                <div class="form-grp">
                                    <label for="number">Mobile No.</label>
                                    <input type="number" id="number">
                                </div>
                                <div class="form-grp select-grp">
                                    <label for="select">What are you looking for?</label>
                                    <select name="select" id="select" class="orderby">
                                        <option value="Select your subject">Select your subject</option>
                                        <option value="Subject One">Subject One</option>
                                        <option value="Subject Two">Subject Two</option>
                                        <option value="Subject Three">Subject Three</option>
                                        <option value="Subject Four">Subject Four</option>
                                    </select>
                                </div>
                                <div class="form-grp">
                                    <label for="message">Write your message</label>
                                    <textarea name="message" id="message"></textarea>
                                </div>
                               
                            </form>
                            <div class="row">
                                <div class="col-12 col-lg-12 m-auto">
                                <button type="submit" class="btn btn-two">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
<!-- main-area-end -->

<?php include 'include/scripts.php'; ?>
<?php include 'include/footer.php'; ?>