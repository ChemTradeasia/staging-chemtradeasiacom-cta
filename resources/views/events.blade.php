<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/css/style.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            .footer-item {
                font-size: 14px;
                margin: 5px 0px;
            }
            .social-bar {
                text-align: center;
                background: #123C69;
                font-size: 0.5em;
            }
            .social-bar svg {
                margin: 7px 14px;
                color: #fff;
                cursor: pointer;
            }
            .navbar-mobile .dropdown > .dropdown-active {
                max-height: 250px;
                background-color: #123c69;
            }
            .container-xl-header {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            .tulisan {
                border: 1px solid;
                padding: 10px;
                width: fit-content;
                background-color: #ffffff;
                color: #123c69;
                font-size: 20px;
                font-family:josefinsans semibold;
            }
            @media screen and (min-width: 992px) and (max-width: 1040px) {
                .container-xl-header {
                    margin-left:-50px
                }
            }
            @media screen and (min-width: 992px) {
                .navbar .dropdown > ul.menu1 {
                    margin: 15px -500%;
                    padding: 0px 1100px 0 565px;
                    background-color: #123c69;
                }
                .navbar .dropdown > ul.menu2a {
                    background-color: #123C69;
                    margin: 15px 0 0 230px;
                    box-shadow: none;
                    border-radius: 0;
                    border: 1px solid white;
                    padding: 10px 555% 10px 0%;
                }
                .navbar .dropdown > ul.menu2b {
                    background-color: #123C69;
                    margin: 15px 0 0 -20px;
                    box-shadow: none;
                    border-radius: 0;
                    border: 1px solid white;
                }
                .navbar .dropdown > ul.menu2c {
                    background-color: #123C69;
                    box-shadow: none;
                    border-radius: 0;
                    border: 1px solid white;
                    margin: 15px -600%;
                    padding: 10px 0% 10px 395%;
                    max-height: 232px;
                }
                .navbar .dropdown > ul.menu3 {
                    margin: 15px -705%;
                    padding: 0 885px 0 855px;
                    background-color: #123c69;
                }
                .navbar .dropdown > ul.menu4 {
                    margin: 15px -1065%;
                    padding: 35px 750px 0 965px;
                    min-height: 210px;
                    background-color: #123c69;
                }
                .navbar .dropdown > ul.menu6 {
                    margin: 15px -800%;
                    padding: 50px 535px 0 1200px;
                    min-height: 210px;
                    background-color: #123c69;
                }
                .item-hidden {
                    visibility: hidden;
                }
            }

            @media screen and (max-width: 992px) {
                .container-xl-header {
                    width: 30px;
                    padding-right: 0;
                    padding-left: 0;
                    margin-right: 0;
                    margin-left: auto;
                }
                .item {
                    margin: 0px 30px 0px -85px;
                }
            }
        </style>

    </head>
    <body>

        <!-- Header Section -->
        <header id="header" class="header fixed-top" style="padding:0px">
            <div class ="social-bar">
                <a target="_blank" href="https://www.facebook.com/Tradeasia/">
                    <i class="fab fa-facebook fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" href="https://twitter.com/TradeasiaInt">
                    <i class="fab fa-twitter fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" href="https://www.pinterest.com/tradeasiaintern/">
                    <i class="fab fa-pinterest fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/tradeasiaint/">
                    <i class="fab fa-instagram fa-2x" aria-hidden="true"></i>
                </a>
                <a target="_blank" href="http://www.linkedin.com/company/tradeasia-international-pte-ltd">
                    <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                </a>
            </div>
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a class="navbar-brand" href="/"><img class="ukuran" src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/img/logo-warna.png" alt="Logo" style="width:180px"></a>
                <div class="container-xl-header">
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li class="dropdown"><a href="#">COMPANY<i class="bi bi-chevron-down"></i></a>
                                <ul class="menu1">
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/" style="color:#ffffff"><i class="fas fa-home" aria-hidden="true" style="margin-right:5px"></i>Home</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/overview" style="color:#ffffff"><i class="fas fa-building" aria-hidden="true" style="margin-right:5px"></i>Company Overview</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/vision-mission" style="color:#ffffff"><i class="fas fa-bullseye" aria-hidden="true" style="margin-right:5px"></i>Vision, Mission and Share Values</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/market-spread" style="color:#ffffff"><i class="fas fa-map" aria-hidden="true" style="margin-right:5px"></i>Market Spread</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/our-location" style="color:#ffffff"><i class="fas fa-map-marker" aria-hidden="true" style="margin-right:5px"></i>Our Locations</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">INDUSTRY<i class="bi bi-chevron-down"></i></a>
                                <ul class="menu2c">
                                    <li><a href="/paint-ink-coating" style="color:#ffffff">Paint, Ink, and Coating</a></li>
                                    <li><a href="/soap-detergent" style="color:#ffffff">Soap and Detergent</a></li>
                                    <li><a href="/food-beverage" style="color:#ffffff">Food Beverage</a></li>
                                    <li><a href="/feed-additives" style="color:#ffffff">Feed Additives</a></li>
                                    <li><a href="/textile-leather" style="color:#ffffff">Textile and Leather</a></li>
                                    <li class="item-hidden"><a href="/pulp-paper" style="color:#ffffff">Pulp and Paper</a></li>
                                    <li class="item-hidden"><a href="/waste-water" style="color:#ffffff">Waste Water Treatments</a></li>
                                    <li class="item-hidden"><a href="/cosmetics" style="color:#ffffff">Cosmetics and Personal Care</a></li>
                                    <li class="item-hidden"><a href="/pharmaceutical" style="color:#ffffff">Pharmaceutical</a></li>
                                    <li class="item-hidden"><a href="/plastic-rubber" style="color:#ffffff">Plastic and Rubbers</a></li>
                                    <li class="item-hidden"><a href="/steel" style="color:#ffffff">Steel</a></li>
                                    <li class="item-hidden"><a href="/glass" style="color:#ffffff">Glass</a></li>
                                    <li class="item-hidden"><a href="/agriculture" style="color:#ffffff">Agriculture</a></li>
                                    <li class="item-hidden"><a href="/ceramic" style="color:#ffffff">Ceramic</a></li>
                                    <li class="item-hidden"><a href="/building-construction" style="color:#ffffff">Building and Construction</a></li>
                                </ul>
                                <ul class="menu2b">
                                    <li><a href="/pulp-paper" style="color:#ffffff">Pulp and Paper</a></li>
                                    <li><a href="/waste-water" style="color:#ffffff">Waste Water Treatments</a></li>
                                    <li><a href="/cosmetics" style="color:#ffffff">Cosmetics and Personal Care</a></li>
                                    <li><a href="/pharmaceutical" style="color:#ffffff">Pharmaceutical</a></li>
                                    <li><a href="/plastic-rubber" style="color:#ffffff">Plastic and Rubbers</a></li>
                                </ul>
                                <ul class="menu2a">
                                    <li><a href="/steel" style="color:#ffffff">Steel</a></li>
                                    <li><a href="/glass" style="color:#ffffff">Glass</a></li>
                                    <li><a href="/agriculture" style="color:#ffffff">Agriculture</a></li>
                                    <li><a href="/ceramic" style="color:#ffffff">Ceramic</a></li>
                                    <li><a href="/building-construction" style="color:#ffffff">Building and Construction</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">PRODUCT<i class="bi bi-chevron-down"></i></a>
                                <ul class="menu3">
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/product/top" style="color:#ffffff"><i class="fas fa-star" aria-hidden="true" style="margin-right:5px"></i>Top Products</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/products" style="color:#ffffff"><i class="fas fa-list" aria-hidden="true" style="margin-right:5px"></i>All Products</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/product/application" style="color:#ffffff"><i class="fas fa-tag" aria-hidden="true" style="margin-right:5px"></i>By Application</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/product/origin" style="color:#ffffff"><i class="fas fa-tag" aria-hidden="true" style="margin-right:5px"></i>By Origin</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/product/download-center" style="color:#ffffff"><i class="fas fa-download" aria-hidden="true" style="margin-right:5px"></i>Technical Library</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">NEWS<i class="bi bi-chevron-down"></i></a>
                                <ul class="menu4">
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="https://www.chemtradeasia.com/blog/" style="color:#ffffff"><i class="fas fa-newspaper" aria-hidden="true" style="margin-right:5px"></i>Chemical News</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/newsletters/categories" style="color:#ffffff"><i class="fas fa-envelope" aria-hidden="true" style="margin-right:5px"></i>Newsletter</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/events" style="color:#ffffff"><i class="fas fa-calendar" aria-hidden="true" style="margin-right:5px"></i>Events</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://career.chemtradeasia.com/">CAREER</a></li>
                            <li class="dropdown"><a href="#">CONTACT US<i class="bi bi-chevron-down"></i></a>
                                <ul class="menu6">
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/support" style="color:#ffffff"><i class="fas fa-envelope" aria-hidden="true" style="margin-right:5px"></i>Contact Us</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;justify-content: space-between;">
                                            <a href="/faq" style="color:#ffffff"><i class="fas fa-question-circle" aria-hidden="true" style="margin-right:5px"></i>FAQ</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>
                </div>
                    <div class="item" style="display: flex;justify-content: space-between;">
                        <a href="#" style="margin:10px 5px"><i class="fas fa-globe"></i></a>
                        <a href="#" style="margin:10px 5px"><i class="fas fa-search"></i></a>
                    </div>
                </div>
            </div>
        </header>


    <section style="margin:30px 0px">

    </section>

        <!-- Footer Section-->
        <footer style="margin-top:20px;background-color:#123C69;color:#ffffff">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between"> 
                <div class="container-fluid">
                    <div class="row" style="padding-top:10px">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5" style="margin:10px 0px 0px 0px">
                            <h4>Contact Us<i class="fas fa-user"></i></h4>
                            <a href="#">
                                <img src="https:/www.plastradeasia.com//view/themes/plastrad/images/logo-putih2.png" alt="Logo" style="width:245px">
                            </a>
                            <h6 style="margin:5px 0px">TRADEASIA INTERNATIONAL PTE.LTD.</h6>
                            <h6 style="margin:5px 0px">
                                133 Cecil Street,<br/>
                                #12-03 Keck Seng Tower,<br/>
                                Singapore 069535 <br/>
                            </h6>
                            <h6 style="margin:0px"><i class="fas fa-phone"></i>Tel: +65-62276365</h6>
                            <h6 style="margin:0px"><i class="fas fa-fax"></i>Fax: +65-62256286</h6>
                            <h6 style="margin:0px"><i class="fas fa-envelope"></i>Email: contact@chemtradeasia.com</h6>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7" style="margin:10px 0px 0px 0px">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
                                    <ul style="list-style-type:none;padding:0px">
                                        <h6>COMPANY</h6>
                                        <li><p class="footer-item"><a href="/" style="color: #ffffff;">Home</a></p></li>
                                        <li><p class="footer-item"><a href="/overview" style="color: #ffffff;">Company Overview</a></p></li>
                                        <li><p class="footer-item"><a href="/vision-mission" style="color: #ffffff;">Vision, Mission and Share Values</a></p></li>
                                        <li><p class="footer-item"><a href="/market-spread" style="color: #ffffff;">Market Spread</a></p></li>
                                        <li><p class="footer-item"><a href="/our-location" style="color: #ffffff;">Our Locations</a></p></li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
                                    <ul style="list-style-type:none;padding:0px">
                                        <h6>INDUSTRY</h6>
                                        <li><p class="footer-item"><a href="/pulp-paper" style="color: #ffffff;">Pulp and Paper</a></p></li>
                                        <li><p class="footer-item"><a href="/feed-additives" style="color: #ffffff;">Feed Additives</a></p></li>
                                        <li><p class="footer-item"><a href="/textile-leather" style="color: #ffffff;">Textile and Leather</a></p></li>
                                        <li><p class="footer-item"><a href="/food-beverage" style="color: #ffffff;">Food and Beverage</a></p></li>
                                        <li><p class="footer-item"><a href="/industry" style="color: #ffffff;">View More</a></p></li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
                                    <ul style="list-style-type:none;padding:0px">
                                        <h6>PRODUCT</h6>
                                        <li><p class="footer-item"><a href="/product/top" style="color: #ffffff;">Top Products</a></p></li>
                                        <li><p class="footer-item"><a href="/products" style="color: #ffffff;">All Products</a></p></li>
                                        <li><p class="footer-item"><a href="/product/application" style="color: #ffffff;">By Application</a></p></li>
                                        <li><p class="footer-item"><a href="/product/origin" style="color: #ffffff;">By Origin</a></p></li>
                                        <li><p class="footer-item"><a href="/product/download-center" style="color: #ffffff;">Technical Library</a></p></li>                        
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
                                    <ul style="list-style-type:none;padding:0px">
                                        <h6>NEWS</h6>
                                        <li><p class="footer-item"><a href="https://www.chemtradeasia.com/blog/" style="color: #ffffff;">Chemical News</a></p></li>
                                        <li><p class="footer-item"><a href="/newsletters/categories" style="color: #ffffff;">Newsletters</a></p></li>
                                        <li><p class="footer-item"><a href="/events" style="color: #ffffff;">Events</a></p></li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
                                    <ul style="list-style-type:none;padding:0px">
                                        <h6>CONTACT US</h6>
                                        <li><p class="footer-item"><a href="/support" style="color: #ffffff;">Contact Us</a></p></li>
                                        <li><p class="footer-item"><a href="/faq" style="color: #ffffff;">FAQ</a></p></li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin:5px 0px">
                                    <ul style="list-style-type:none;padding:0px">
                                        <h6><a href="https://career.chemtradeasia.com" style="color:#ffffff">CAREER</a></h6>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin: -5px 0px 25px 0px;">
                            <h4>Subscribe Newsletter</h4>
                            <form id="newsletterForm" method="post" class="row" novalidate="novalidate" autocomplete="off">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" style="border-style:solid;border-color: #ffffff;background-color:white;margin: 5px 0px;" name="newsletter_user" placeholder="Name" maxlength="255" required="">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" style="border-style:solid;border-color: #ffffff;background-color:white;margin: 5px 0px;" name="newsletter_email" placeholder="E-mail" maxlength="255" required="" email="true">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <button class="btn btn-white" id="subscribe_button" onclick="newslwtterSubscribe('https:/www.plastradeasia.com:443/index.php?path=Newsletter/subscribe', 'newsletterForm', 'subscribe_button', 'curr-loading')" style="color: #123c69;background-color: #ffffff;margin: 5px 0px;">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin:0px;padding: 0 40px;text-align: center;">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <a  href="/privacy-policy" style="color: #ffffff;">Privacy Policy</a> |
                                <a  href="/terms-and-conditions" style="color: #ffffff;">Terms and Conditions</a>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                Copyright <script>document.write(new Date().getFullYear())</script>
                                <a  href="http:/www.chemtradeasia.com/" target="_blank" style="color: #ffffff;">Tradeasia International </a> | All Rights Reserved. Powered by  <a  href="http:/www.netpiper.com/" style="color: #ffffff;">Netpiper </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/vendor/fontawesome/fontawesome.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/ChemTradeasia/Website2018CDN/assets/js/main.js"></script>

    </body>
</html>
