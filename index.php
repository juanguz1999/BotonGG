<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="google-signin-client_id" content="30639041895-ppfbvk8bvr8buv7ekfrai6tslihjkcjd.apps.googleusercontent.com">
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-danger text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-light" href="#page-top"><img src="img/Logo PNG.png" height="40" width="150"></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-light text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Servicios</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Promociones</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">

            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Inicia Sesion</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div id="my-signin2"></div>
                    <script>
                        function onSuccess(googleUser) {
                            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                        }
                        function onFailure(error) {
                            console.log(error);
                        }
                        function renderButton() {
                            gapi.signin2.render('my-signin2', {
                                'scope': 'profile email',
                                'width': 240,
                                'height': 50,
                                'longtitle': true,
                                'theme': 'dark',
                                'onsuccess': onSuccess,
                                'onfailure': onFailure
                            });
                        }
                    </script>
                </div>
                <!-- About Section-->
                <section class="page-section bg-primary text-white mb-0" id="about">
                    <div class="container">
                        <!-- About Section Heading-->
                        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                        <!-- Icon Divider-->
                        <div class="divider-custom divider-light">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- About Section Content-->
                        <div class="row">
                            <div class="col-lg-4 ms-auto"><p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p></div>
                            <div class="col-lg-4 me-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
                        </div>
                        <!-- About Section Button-->
                        <div class="text-center mt-4">
                            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                                <i class="fas fa-download me-2"></i>
                                Free Download!
                            </a>
                        </div>
                    </div>
                </section>
                <!-- Contact Section-->
                <section class="page-section" id="contact">
                    <div class="container">
                        <!-- Contact Section Heading-->
                        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactanos</h2>
                        <!-- Icon Divider-->
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- Contact Section Form-->
                        <div class="container">
                            <div class="row">
                                <h2>Ubicanos</h2>
                                <div class="col-md-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1949.6464897340034!2d-76.93348134198801!3d-12.228430997836645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13dac11705e3befc!2zMTLCsDEzJzQyLjQiUyA3NsKwNTUnNTYuNiJX!5e0!3m2!1ses-419!2spe!4v1644619836133!5m2!1ses-419!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                                    </iframe>
                                </div>
                                <div class="col-md-6">
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- * * SB Forms Contact Form * *-->
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- This form is pre-integrated with SB Forms.-->
                                    <!-- To make this form functional, sign up at-->
                                    <!-- https://startbootstrap.com/solution/contact-forms-->
                                    <!-- to get an API token!-->
                                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                        <!-- Name input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                            <label for="name">Full name</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                        </div>
                                        <!-- Email address input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                            <label for="email">Email address</label>
                                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                        </div>
                                        <!-- Phone number input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                            <label for="phone">Phone number</label>
                                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                        </div>
                                        <!-- Message input-->
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                            <label for="message">Message</label>
                                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                        </div>
                                        <!-- Submit success message-->
                                        <!---->
                                        <!-- This is what your users will see when the form-->
                                        <!-- has successfully submitted-->
                                        <div class="d-none" id="submitSuccessMessage">
                                            <div class="text-center mb-3">
                                                <div class="fw-bolder">Form submission successful!</div>
                                                To activate this form, sign up at
                                                <br />
                                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                            </div>
                                        </div>
                                        <!-- Submit error message-->
                                        <!---->
                                        <!-- This is what your users will see when there is-->
                                        <!-- an error submitting the form-->
                                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                        <!-- Submit Button-->
                                        <button class="btn btn-primary btn-dark disabled" id="submitButton" type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Footer-->
                <footer class="footer text-center">
                    <div class="container">
                        <div class="row">
                            <!-- Footer Location-->
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h4 class="text-uppercase mb-4">Location</h4>
                                <p class="lead mb-0">
                                    2215 John Daniel Drive
                                    <br />
                                    Clark, MO 65243
                                </p>
                            </div>
                            <!-- Footer Social Icons-->
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h4 class="text-uppercase mb-4">Around the Web</h4>
                                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                            </div>
                            <!-- Footer About Text-->
                            <div class="col-lg-4">
                                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                                <p class="lead mb-0">
                                    Freelance is a free to use, MIT licensed Bootstrap theme created by
                                    <a href="http://startbootstrap.com">Start Bootstrap</a>
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Copyright Section-->
                <div class="copyright py-4 text-center text-white">
                    <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
                </div>
                <!-- Portfolio Modals-->
                <!-- Portfolio Modal 1-->
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="..." />
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Modal 2-->
                <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Modal 3-->
                <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="..." />
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Modal 4-->
                <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Modal 5-->
                <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." />
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Modal 6-->
                <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="..." />
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

                </body>
                </html>
