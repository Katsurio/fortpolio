<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div id="googlemaps" class="google-map m-none custom-contact-pos"></div>

<section class="section section-no-border m-none p-none">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 custom-contact-box custom-contact-pos background-color-quaternary">
                <h2 class="text-color-light text-uppercase font-weight-extra-bold">Say Hello</h2>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-lg">
                    <div class="feature-box-icon">
                        <i class="icon-call-in icons text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h6 class="mb-none text-sm">Call us</h6>
                        <a href="tel:+88934567898" class="text-color-light text-decoration-none">+800 123 4567</a>
                    </div>
                </div>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-xlg">
                    <div class="feature-box-icon">
                        <i class="icon-location-pin icons text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h6 class="mb-none text-sm">Our Location</h6>
                        <p class="tall text-color-light">123 PORTO AVE PORTO, 1235</p>
                    </div>
                </div>
                <h5 class="text-color-light">SEND A MESSAGE</h5>
                <form id="contactForm" class="custom-contact-form-style-1" action="php/contact-form.php" method="POST">
                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>
                    <div class="row">
                        <div class="form-group _divider">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" value=""  maxlength="100" class="form-control" name="name" id="name" placeholder="YOUR NAME" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" value="" maxlength="100" class="form-control" name="phone" id="phone" placeholder="PHONE" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" value="" maxlength="100" class="form-control" name="email" id="email" placeholder="EMAIL ADDRESS" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea maxlength="5000" rows="7" class="form-control" name="message" id="message" placeholder="COMMENT" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="SUBMIT" class="btn btn-primary custom-btn-style-2 text-color-light custom-margin-2 pull-right" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--<div id="say-hello" class="container-fluid">-->
<!--    <div class="row">-->
<!--        <div class="col-md-6 p-none">-->
<!--            <section class="section section-no-border match-height background-color-primary m-none">-->
<!--                <div class="row m-none">-->
<!--                    <div class="col-half-section col-half-section-right mr-md">-->
<!--                        <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Say Hello</h2>-->
<!--                        <form id="callSendMessage" class="custom-form-style" action="#" method="POST">-->
<!--                            <div class="form-content">-->
<!--                                <div class="form-control-custom">-->
<!--                                    <input type="text" class="form-control" name="callName" placeholder="Your Name *" data-msg-required="This field is required." id="callName" required="" />-->
<!--                                </div>-->
<!--                                <div class="form-control-custom">-->
<!--                                    <input type="text" class="form-control" name="callSubject" placeholder="Subject *" data-msg-required="This field is required." id="callSubject" required="" />-->
<!--                                </div>-->
<!--                                <div class="form-control-custom">-->
<!--                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" id="message" required="" aria-required="true"></textarea>-->
<!--                                </div>-->
<!--                                <input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" value="Submit" />-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
<!--        </div>-->
<!--        <div class="col-md-6 p-none">-->
<!--            <section class="section section-no-border match-height m-none" style="background: url(img/demos/resume/contact/contact-bg-1.jpg); background-size: cover;">-->
<!--                <div class="row m-none">-->
<!--                    <div class="col-half-section col-half-section-left ml-md">-->
<!--                        <a href="mailto:you@domain.com" class="text-decoration-none">-->
<!--                            <span class="feature-box custom-feature-box mb-xlg">-->
<!--                                <span class="custom-feature-box-icon">-->
<!--                                    <i class="icon-envelope icons text-color-light"></i>-->
<!--                                </span>-->
<!--                                <span class="feature-box-info">-->
<!--                                    <label class="font-weight-semibold text-uppercase custom-text-color-1">Email</label>-->
<!--                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">you@domain.com</strong>-->
<!--                                </span>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                        <a href="tel:+1234657890" class="text-decoration-none">-->
<!--                            <span class="feature-box custom-feature-box mb-xlg">-->
<!--                                <span class="custom-feature-box-icon">-->
<!--                                    <i class="icon-phone icons text-color-light"></i>-->
<!--                                </span>-->
<!--                                <span class="feature-box-info">-->
<!--                                    <label class="font-weight-semibold text-uppercase custom-text-color-1">Phone</label>-->
<!--                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">123-456-7890</strong>-->
<!--                                </span>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                        <a href="skype:yourskype?chat" class="text-decoration-none">-->
<!--                            <span class="feature-box custom-feature-box mb-xlg">-->
<!--                                <span class="custom-feature-box-icon">-->
<!--                                    <i class="icon-social-skype icons text-color-light"></i>-->
<!--                                </span>-->
<!--                                <span class="feature-box-info">-->
<!--                                    <label class="font-weight-semibold text-uppercase custom-text-color-1">Skype</label>-->
<!--                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">yourskype</strong>-->
<!--                                </span>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                        <span class="feature-box custom-feature-box mb-xlg">-->
<!--                            <span class="custom-feature-box-icon">-->
<!--                                <i class="icon-share icons text-color-light"></i>-->
<!--                            </span>-->
<!--                            <a href="http://www.facebook.com" class="text-decoration-none">-->
<!--                                <span class="feature-box-info">-->
<!--                                    <label class="font-weight-semibold text-uppercase custom-text-color-1">Follow me</label>-->
<!--                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">Facebook</strong>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                            <a href="http://www.twitter.com" class="text-decoration-none">-->
<!--                                <span class="feature-box-info custom-both-side-border">-->
<!--                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">Twitter</strong>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                            <a href="http://www.linkedin.com" class="text-decoration-none">-->
<!--                                <span class="feature-box-info p-none">-->
<!--                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">Linkedin</strong>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                        </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->