  <!-- CONTACT FORM START-->
  <section class="section " id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Get In <span class="fw-bold">Tuch</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>  
        <div class="row mt-4 pt-lg-4">
            <div class="col-lg-4">
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-mobile2 text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 fw-bold">Call Us On</p>
                        <p class="text-muted">+985 123 7856</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-letter text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 fw-bold">Email Us At</p>
                        <p class="text-muted">exmaple@gmail.com</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-pin text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 fw-bold">Visit Office</p>
                        <p class="text-muted">202, Grasselli Street , Conway.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact_form">
                    <div id="message"></div>
                    <form method="post" action="https://elvish-bootstrap-mvc-asp.netlify.app/html/php/contact.php" name="contact-form" id="working_form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-2 mb-3">
                                    <label for="name" class="fw-bold mb-2">Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-2 mb-3">
                                    <label for="email" class="fw-bold mb-2">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2 mb-3">
                                    <label for="subject" class="fw-bold mb-2">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject.." required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2 mb-3">
                                    <label for="comments" class="fw-bold mb-2">Message</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" id="submit" name="send" class="submitBnt btn btn-custom">Send Message</button>
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div>                          
    </div>
</section> 
<!-- CONTACT FORM END-->