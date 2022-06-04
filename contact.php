<!DOCTYPE html>
<html lang="ro-RO">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Contactati Expert Clean pentru servicii de calitate superioara" />
        <meta name="keywords" content="contact firma curatenie, telefon firma curatenie, contact curatenie bucuresti, contact curatenie birouri"/>
        <title>Contact Expert Clean</title>
        <link href="img/favicon.png" rel="icon">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0 bg-main-background-light-blue">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <!--Brand name-->
                    <a class="navbar-brand" href="index.html">Expert Clean</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!--Navigation menu-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.html">Acasa</a></li>
                            <li class="nav-item"><a class="nav-link" href="despre-noi.html">Despre Noi</a></li>
                            <li class="nav-item"><a class="nav-link" href="servicii.html">Servicii</a></li>
                            <li class="nav-item"><a class="nav-link" href="preturi.html">Preturi</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="page-section">
                <div class="container">
                    <!-- Contact form-->
                    <div class="rounded-3  px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <h1 class="fw-bolder">Contact</h1>
                            <p class="lead fw-normal text-muted section-subheading pb-4">Nu ezitati sa ne contactati</p>
                        </div>
                        <?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                                        
                            if (strpos($fullUrl, "form=empty") == true) {
                                echo '<div class="text-center mb-3">
                                    <div class="fw-bolder text-warning">Toate campurile sunt oblgatorii. Va rugam sa incercati din nou</div>
                                    <br />
                                    </div>';
                                }
                            elseif (strpos($fullUrl, "form=invalidName") == true) {
                                echo '<div class="text-center mb-3">
                                    <div class="fw-bolder text-warning">Va rugam sa introduceti un nume valid</div>
                                    <br />
                                    </div>';
                            }
                            elseif (strpos($fullUrl, "form=invalidEmail") == true) {
                                echo '<div class="text-center mb-3">
                                    <div class="fw-bolder text-warning">Va rugam sa introduceti un email valid</div>
                                    <br />
                                    </div>';
                                }
                            elseif (strpos($fullUrl, "form=invalidCheckbox") == true) {
                                echo '<div class="text-center mb-3">
                                    <div class="fw-bolder text-warning">Va rugam sa bifati casuta cu acordul pentru prelucrarea datelor personale!</div>
                                    <br />
                                    </div>';
                                }
                            elseif (strpos($fullUrl, "form=sent") == true){
                            echo '<div class="text-center mb-3">
                                <div class="fw-bolder text-success">Mesajul dumneavoastra a fost trimis cu succes!</div>
                                <br />
                                </div>';
                            }
                        ?>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form action="contactform.php" method="POST">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="name" placeholder="Introduceti numele..."/>
                                        <label for="name">Nume</label>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="email" name="email" placeholder="mail@exemplu.com"/>
                                        <label for="email">Adresa de email</label>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="tel" name="telephone" placeholder="0712345678"/>
                                        <label for="phone">Telefon</label>
                                    </div>
                                    <!-- Reason to contact input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control reason-message" type="text" name="textreason" placeholder="Introduceti motivul contactarii..."></textarea>
                                        <label for="message">Motivul contactarii</label>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control message-message" type="text" name="textmessage" placeholder="Introduceti mesajul dumneavoastra..."></textarea>
                                        <label for="message">Mesaj</label>
                                    </div>
                                    <div class="form-group form-check py-2 pb-4">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="mandatody-checkbox" value="on">
                                        <label class="form-check-label" for="privacy-and-t&c" >Sunt de acord cu prelucrarea datelor personale</label>
                                    </div>
                                    <!-- Submit Button-->
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit" name="submit">Trimite</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Contact cards-->
                        <div class="row gx-4 gx-lg-5 pt-5">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="card py-4 h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                        <h2 class="text-uppercase m-0 h3"><i class="bi bi-geo-alt text-success px-2"></i>Adresa</h2>
                                        <br/>
                                        <p class="lead fw-normal text-muted mb-0">Bucuresti, Sector 1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="card py-4 h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-envelope text-primary mb-2"></i>
                                        <h2 class="text-uppercase m-0 h3"><i class="bi bi-envelope-open text-success px-2"></i> E-mail </h2>
                                        <br/>
                                        <img class="img-fluid" src="img/email_350X30.png" alt="Email Expert Clean"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="card py-4 h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                        <h2 class="text-uppercase m-0 h3"><i class="bi bi-telephone text-success px-2"></i>Telefon</h2>
                                        <br/>
                                        <p class="lead fw-normal text-muted mb-0"><i class="bi bi-whatsapp"></i> 0768777222</p>
                                        <p class="lead fw-normal text-muted mb-0"><i class="bi bi-whatsapp"></i> 0726375903</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">&copy; Expert Clean 2022</div></div>
                    <div class="col-auto">
                    <a class="link-light small" href="protectie-date-personale.html">Protectie date personale</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="termeni-si-conditii.html">Termeni si Conditii</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
