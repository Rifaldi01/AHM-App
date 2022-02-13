@include('layouts.component.user.head')
@include('layouts.component.user.header')
<section id="main-container" class="main-container ts-contact-us">
    <div class="card border-0 bg-light pt-5 pb-5" id="contact">
        <div class="container">
            <!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title"><span>Ajukan</span> Lamaran</h2>
                </div>
                <div class="col-lg-8">
                    <div id="contact-form" class="form-container contact-us">
                        <!-- START copy section: Hotel Contact Form -->
                        <form class="contactMe bg-light"
                              action="http://demo.themewinter.com/html/automobil/contactme/contact-us.php" method="POST"
                              enctype="multipart/form-data">
                            <section class="bg-transparent">
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <input type="text" name="name" data-displayname="Name" class="field"
                                               placeholder="Nama" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <input type="email" name="email" data-displayname="E-mail" class="field"
                                               placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <input type="number" name="number" data-displayname="E-mail" class="field"
                                               placeholder="Telepon" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <textarea name="message" data-displayname="Message" class="field"
                                                  placeholder="Masukan Alamat" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Masukan Cv</label>
                                        <input type="file" name="img" data-displayname="E-mail" class="field"
                                               required/>
                                    </div>
                                </div>
                                <div class="msg"></div>

                                <button class="btn btn-primary " type="submit" data-sending="Sending...">
                                    Ajukan Lamaran
                                </button>
                            </section>
                            <!-- Ection end -->
                        </form>
                        <!-- END copy section:Service Contact Form -->
                    </div>
                    <!-- Contact form end -->
                </div>
                <div class="col-lg-4">
                    <div class="contact-details">
                        <div class="contact-info-item">
                            <h3 class="column-title no-border text-white">
                                <i class="fas fa-map-marker-alt"></i> <span></span>Alamat
                            </h3>
                            <p>
                                AHEM JAYA Motor Komplek AHEM JAYA International Gedung B, Lt
                                1-2 Jl. Gaya Motor Raya No. 8 Sunter II Jakarta 14330,
                                Indonesia
                            </p>
                        </div>
                        <div class="contact-info-item">
                            <h3 class="column-title no-border text-white">
                                <i class="fas fa-phone"></i> <span></span> Telepon
                            </h3>
                            <p>021-65310250</p>
                        </div>
                        <div class="contact-info-item">
                            <h3 class="column-title no-border text-white">
                                <i class="fas fa-envelope-open-text"></i>
                                <span></span> Email
                            </h3>
                            <p>Jayamotor@hso.AHEM.Jaya.co.id</p>
                        </div>
                    </div>
                    <!-- Contact details end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Container end -->
</section>
@include('layouts.component.user.footer')
@include('layouts.component.user.js')
