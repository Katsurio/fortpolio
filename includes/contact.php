<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div id="googlemaps" class="google-map m-none custom-contact-pos"></div>

<section id="say-hello" class="section section-no-border m-none p-none">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 custom-contact-box custom-contact-pos background-color-quaternary">
                <h2 class="text-color-light text-uppercase font-weight-extra-bold">Get in touch</h2>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-lg">
                    <div class="feature-box-icon">
                        <i class="icon-map icons text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h6 class="mb-none text-sm">Location</h6>
                        <p class="tall text-color-light">Orange County, California</p>
                    </div>
                </div>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-lg">
                    <div class="feature-box-icon">
                        <i class="icon-phone icons text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h6 class="mb-none text-sm">Telephone</h6>
                        <a href="tel:+9493549666" class="text-color-light text-decoration-none">(949) 354-9666</a>
                    </div>
                </div>
                <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-xlg">
                    <div class="feature-box-icon">
                        <i class="icon-envelope icons text-color-primary"></i>
                    </div>
                    <div class="feature-box-info">
                        <h6 class="mb-none text-sm">E-mail</h6>
                        <a href="mailto:fishe545@gmail.com" class="text-color-light text-decoration-none">Fishe545@Gmail.com</a>
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
                            <input type="submit" value="Submit" class="btn btn-primary custom-btn-style-2 text-color-light custom-margin-2 pull-right text-sm" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>