<?php include('header.php'); ?>

<img src="assets/images/breadcrumb/contactus-banner.jpg" width="100%" alt="Contact Us">

<section>
    <div class="contact-map mt-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15083.768934943733!2d72.98062830685517!3d19.066277263531916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c14c21ce39bf%3A0xa9971bdb2cfbf606!2sReal%20Tech%20Park%2C%2039%2F2%2C%20Bhagwan%20Mahaveer%20Rd%2C%20Sector%2030A%2C%20Vashi%2C%20Navi%20Mumbai%2C%20Maharashtra%20400703%2C%20India!5e0!3m2!1sen!2sus!4v1692792905809!5m2!1sen!2sus"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!-- START CONTACT DESIGN AREA -->
<section id="contact" class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title white-title">
                    <h2>Contact With Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2 ">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="contact-form">
                    <div class="contact-adderess">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i> <span>Have any questions?</span>
                                <a href="tel:6031112298"> 6031112298 / 6031112298</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <span>Write a email</span>
                                <a href="mailto:BWM©gmail.com"> BWM©gmail.com</a>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i> <span>Visit our location</span>
                                <a href="#"> 911, Real Tech Park, Sector 30A, Vashi, Navi Mumbai, Maharashtra 400703</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- / END CONTACT FORM DESIGN AREA -->
            </div>
            <div class="col-md-8 col-md-offset-2 contacts-location">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="contact-form">
                    <h1 class="section-title white-title">Have Questions? Feel Free to Write Us</h1>
                    <form id="contact-form" method="post" enctype="multipart/form-data">
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