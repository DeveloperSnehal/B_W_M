<?php include('header.php'); ?>

<img src="assets/images/breadcrumb/wastecollection.jpg" width="100%" alt="Contact Us">


<!-- START CONTACT DESIGN AREA -->
<section id="contact" class="pickup-area section-padding">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
                <div class="section-title">
                    <h2>Are you Interested in a Pickup?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 pickup-location">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="pickup-form">
                    <h1 class="section-title white-title">Have Questions? Feel Free to Write Us</h1>
                    <form id="pickup-form" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="first-name" placeholder="Name"
                                required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="tel" class="form-control" id="tel" placeholder="phone No"
                                required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea rows="4" name="message" class="form-control" id="description"
                                placeholder="Your Message" required="required"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="actions">
                                <input type="submit" value="Send message" name="submit" id="submitButton"
                                    class="btn btn-lg btn-contact-bg" title="Submit Your Message!">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- / END CONTACT FORM DESIGN AREA -->
            </div>
        </div>
    </div>
</section>
<!-- / END CONTACT DESIGN AREA -->


<?php include('footer.php'); ?>