<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="cs.css">

    <title>Creditscore</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light main-header sticky-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="">
                <h1>creditscore</h1>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto our-primary-menu">
                    <li><a href="/">Home</a>
                        <ul>
                            <li><a href="/user">Personal</a></li>
                            <li><a href="/admin">Admin</a></li>
                        </ul>

                    </li>
                    <li><a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="drop">
                            <li><a href="#contact">About</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#loan">Loan Calculator</a></li>
                            <li><a href="#">Apply Now</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="login.html">Sign In</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a>
                        <ul>
                            <li><a href="#">Credit reports </a></li>
                            <li><a href="#">Policy</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Block-chain</a>
                        <ul>
                            <li><a href="score.html">Get your ID</a></li>
                            <li><a href="#">News Details</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="header-info d-flex align-items-center">
                    <div class="header-search">
                        <span><i class="fas fa-search"></i></span>
                    </div>
                    <div class="header-call clearfix">
                        <div class="header-call-icon float-left mr-3 h-100">
                            <span><i class="fas fa-phone-volume"></i></span>
                        </div>
                        <div class="header-call-info">
                            <span class="d-block">Call</span>
                            <a class="d-block" href="tel:+2347034522345">+2347034522345</a>
                        </div>
                    </div>
                    <div class="header-button">
                        <a class="btn btn-primary" href="/guage">Get your creditscore </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <section class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <a
                                href="file:///C:/Users/IT-S/Desktop/Bootstrap%20v5%20Class+Display%20Flex%20Class/Day-33_All-Part.html"><img
                                    src="" alt="logo2"></a>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <div class="widget-social">
                                <ul>
                                    <li><span>Follow us:</span></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Our Performance</a></li>
                                <li><a href="#">Help (FAQ)</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h3>Other Resources</h3>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Business Loans</a></li>
                                <li><a href="#">Loan Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget" id="contact">
                            <h3>Contact Us</h3>
                            <div class="footer-contact">
                                <div class="footer-contact-item d-flex">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <a href="#">Gidan kwanu Minna </a>
                                </div>
                                <div class="footer-contact-item d-flex">
                                    <span><i class="fas fa-envelope    "></i></span>
                                    <a href="mailto:hello@finix.com">creditscore.com</a>
                                </div>
                                <div class="footer-contact-item d-flex">
                                    <span><i class="fas fa-phone-volume"></i></span>
                                    <a href="tel:+2347034522345">+2347034522345</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-copyright">
                            <p>Copyright @2023. Designed By <a
                                href="">Developer Bamidele</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
        <script src="cs.js"></script>
</body>

</html>