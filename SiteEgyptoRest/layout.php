<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <title>Egypto</title>
    <!--
    DREAM PULSE
    https://templatemo.com/tm-536-dream-pulse
    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="slick/slick.css"/>
    <link rel="stylesheet" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<main class="container-fluid">
    <div class="row">
        <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
                <div class="tm-brand-box">
                    <div class="tm-double-border-1">
                        <div class="tm-double-border-2">
                            <h1 class="tm-brand text-uppercase">Site Egypto</h1>
                        </div>
                    </div>
                </div>

                <ul class="nav flex-column text-uppercase text-right tm-main-nav">
                    <li class="nav-item">
                        <a href="<?= BASE_URL ?>/accueil" class="nav-link active">
                            <span class="d-inline-block mr-3">Intro</span>
                            <span class="d-inline-block tm-white-rect"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dieu" class="nav-link">
                            <span class="d-inline-block mr-3">Dieu</span>
                            <span class="d-inline-block tm-white-rect"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL ?>/epoque" class="nav-link">
                            <span class="d-inline-block mr-3">Epoque</span>
                            <span class="d-inline-block tm-white-rect"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL ?>/dynastie" class="nav-link">
                            <span class="d-inline-block mr-3">dynastie</span>
                            <span class="d-inline-block tm-white-rect"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASE_URL ?>/lieu#lieu" class="nav-link">
                            <span class="d-inline-block mr-3">Lieu</span>
                            <span class="d-inline-block tm-white-rect"></span>
                        </a>
                    </li>
                </ul>
                <ul class="nav flex-row tm-social-links">
                    <li class="nav-item">
                        <a href="https://facebook.com" class="nav-link tm-social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com" class="nav-link tm-social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
                <footer class="text-center text-white small">
                    <p class="mb--0 mb-2">Copyright 2020 Egypto Marko</p>
                </footer>
            </div>
        </nav>

        <main role="main" class="ml-sm-auto col-12">
            <div
                    class="parallax-window"
                    data-parallax="scroll"
                    data-image-src="img/egypte.jpg">
                <div class="tm-section-wrap">
                    <section id="intro" class="tm-section">
                        <div class="tm-bg-white-transparent tm-intro">
                            <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Introduction de
                                l'égypte</h2>
                            <p class="tm-color-gray">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis deleniti dicta
                                dignissimos dolor eveniet excepturi expedita, in laudantium modi, nesciunt odit optio
                                perspiciatis porro possimus quas rem similique ullam veniam!
                            </p>
                            <p class="mb-0 tm-color-gray">
                                nesciunt odit optio
                                perspiciatis porro possimus quas rem similique ullam veniam!
                            </p>
                        </div>
                    </section>
                </div>
            </div>

            <div class="tm-section-wrap bg-white">
                <?php echo $content; ?>
            </div>
    </div>
</main>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/templatemo-scripts.js"></script>
</body>
</html>