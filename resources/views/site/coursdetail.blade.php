<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Coworky</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <!-- Modernizr -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }

    </style>

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<header class="header fadeInDown">
    <div id="logo">
        <a href="#"><img src="{{asset('img/logo.png')}}" width="126" height="126" data-retina="true" alt=""></a>
    </div>
    <ul id="top_menu">
        <li><a href="{{route('site.index')}}" class="hidden_tablet">Acceuil</a></li>
        <li class="hidden_tablet"><a href="{{route('inscription-coworking')}}">Inscription</a></li>
        <li><a href="{{route('login')}}" class="login">Connexion</a></li>
        <li><a href="#0" class="search-overlay-menu-btn">Rechercher</a></li>
        <li><a href="{{route('demande-coworking')}}" class="hidden_tablet">Coworking Zone</a></li>
        <li><a href="#0" class="hidden_tablet">Formation</a></li>
        <li><a href="{{route('coworky-contact')}}" class="hidden_tablet">Contact</a></li>
        <li class="hidden_tablet"><a href="#" class=""></a></li>
    </ul>
    <!-- /top_menu -->
</header>
<!-- /header -->

<main>
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Les bases de Laravel 7</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Description</a></li>
                    <li><a href="#lessons">Lessons</a></li>
                    <li><a href="#reviews">Témoignages</a></li>
                </ul>
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">

                    <section id="description">
                        <h2>Description</h2>
                        <p>Dans cette formation sur Laravel 7, vous allez apprendre les notions fondamentales du framework, ainsi que la création d'un site web complet .

                            A la fin de cette formation, vous serez capable de construire et sécuriser votre propre site web, via un système d'authentification.

                            Vous apprendrez les notions essentielles de Laravel, telles que le routing, l'utilisation du modèle MVC, la création de Model, l'utilisation d'un moteur de template, la communication avec une base de données etc..

                            Nous aborderons aussi comment gérer les relations entre models, la communication avec une application extérieure, la gestion des fichiers, l'enregistrements de message flash, la réalisation de paiements, l'authentification, l'upload d'images etc..</p>
                        <hr>
                        <h5>Formateur : Wissal Ajengu</h5>
                        <hr>
                        <h5>Prérequis : </h5>
                        <ul class="bullets">
                            <li>Notions de programmation orientée objet (POO)</li>
                            <li>Notions de PHP</li>
                        </ul>
                        <hr>
                        <p>Ce que vous apprendrez :</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="bullets">
                                    <li>Prendre en main le framework Laravel</li>
                                    <li>Prendre en main le moteur de template Blade</li>
                                    <li>Implémenter un outil de paiement</li>
                                    <li>Utiliser un client HTTP</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="bullets">
                                    <li>Utiliser l'ORM Eloquent</li>
                                    <li>Mettre en place un système d'authentification</li>
                                    <li>Utiliser des package externes</li>
                                    <li>PHP Artisan</li>
                                </ul>
                            </div>
                        </div>
                        <!-- /row -->
                    </section>
                    <!-- /section -->

                    <section id="lessons">
                        <div class="intro_title">
                            <h2>Lessons</h2>
                            <ul>
                                <li>18 lessons</li>
                                <li>02:02:10</li>
                            </ul>
                        </div>
                        <div id="accordion_lessons" role="tablist" class="add_bottom_45">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i>Introduction</a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <li><a href="{{asset('uploads/formations/3/311.mp4')}}" class="video">Laravel et ses composants</a><span>35:07</span></li>
                                                <li><a href="{{asset('uploads/formations/3/312.mp4')}}" class="video">Lancement de Laravel</a><span>09:27</span></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="indicator ti-plus"></i>Lancement du projet
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <li><a href="{{asset('uploads/formations/3/321.mp4')}}" class="video">Récupérer le template</a><span>19:00</span></li>
                                                <li><a href="{{asset('uploads/formations/3/322.mp4')}}" class="video">Connexion à une base de données</a><span>31:31</span></li>
                                                <li><a href="{{asset('uploads/formations/3/323.mp4')}}" class="video">Bundles à aborder</a><span>19:00</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="indicator ti-plus"></i>Authentification
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <li><a href="{{asset('uploads/formations/3/331.mp4')}}" class="video">Inscription et Déconnexion</a><span>42:12</span></li>
                                                <li><a href="{{asset('uploads/formations/3/332.mp4')}}" class="video">Connexion et Redirections</a><span>41:59</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->

                            <div class="card">
                                <div class="card-header" role="tab" id="headingFourth">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                            <i class="indicator ti-plus"></i>Modèles & Relations
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <li><a href="{{asset('uploads/formations/3/341.mp4')}}" class="video">Premier modèle</a><span>42:59</span></li>
                                                <li><a href="{{asset('uploads/formations/3/342.mp4')}}" class="video">Générer des données</a><span>21:59</span></li>
                                                <li><a href="{{asset('uploads/formations/3/343.mp4')}}" class="video">Les relations entre modèles</a><span>12:59</span></li>
                                                <li><a href="{{asset('uploads/formations/3/344.mp4')}}" class="video">Action : create</a><span>21:59</span></li>
                                                <li><a href="{{asset('uploads/formations/3/345.mp4')}}" class="video">Action : store</a><span>12:59</span></li>
                                                <li><a href="{{asset('uploads/formations/3/346.mp4')}}" class="video">Stockage d'image</a><span>08:59</span></li>
                                                <li><a href="{{asset('uploads/formations/3/347.mp4')}}" class="video">Action : edit</a><span>06:59</span></li>
                                                <li><a href="{{asset('uploads/formations/3/348.mp4')}}" class="video">Action : update</a><span>04:00</span></li>
                                                <li><a href="{{asset('uploads/formations/3/349.mp4')}}" class="video">Action : destroy</a><span>10:00</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                        </div>
                        <!-- /accordion -->
                    </section>
                    <!-- /section -->

                    <section id="reviews">
                        <h2>Commentaires des participants</h2>
                        <div class="reviews-container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>4.7</strong>
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <small>4 reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            </div>
                            <!-- /row -->
                        </div>

                        <hr>

                        <div class="reviews-container">

                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar1.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Ahmed – 03 Juillet, 2020:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar2.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Ali – 03 Juillet, 2020:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar3.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Yassine – 04 Juillet, 2020:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                        </div>
                        <!-- /review-container -->
                    </section>
                    <!-- /section -->
                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <figure>
                            <a href="{{asset('uploads/formations/3/30.mp4')}}" class="video"><i class="arrow_triangle-right"></i><img src="{{asset('uploads/formations/3/3.png')}}" alt="" class="img-fluid"><span>Prévisualiser ce cours</span></a>
                        </figure>
                        <div class="price">
                            150 TND<span class="original_price"></span>
                        </div>
                        <a href="cart-1.html" class="btn_1 full-width">S'inscrire à cette formation</a>
                        <a href="#0" class="btn_1 full-width outline"><i class="icon_heart"></i>Ajouter aux favoris</a>


                        <div id="list_feat">
                            <h3>Partager</h3>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->

<footer>
    <div class="container margin_120_95">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></p>
                <p>
                    Coworky est une plateforme en ligne spécialisée dans la vente de cours en vidéo. Grâce à Coworky.org, vous allez pouvoir apprendre tout ce que vous voulez et celà peu importe où vous vous situez.
                </p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#0"><i class="ti-google"></i></a></li>
                        <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="{{route('inscription-coworking')}}">Inscription</a></li>
                    <li><a href="{{route('login')}}">Connexion</a></li>
                    <li><a href="{{route('demande-coworking')}}">Coworking Zone</a></li>
                    <li><a href="#">Formation</a></li>
                    <li><a href="{{route('coworky-contact')}}">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contacts</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 216 72 286 315</a></li>
                    <li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@coworky.org</a></li>
                </ul>
                <div id="newsletter">
                    <h6>Newsletter</h6>
                    <div id="message-newsletter"></div>
                    <form method="post" action="{{route('news-letter')}}" name="newsletter_form" id="newsletter_form">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Votre Aderesse mail">
                            <input type="submit" value="Valider" id="submit-newsletter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© {{ now()->year }} Coworky</div>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->
<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Recherche une formation..."/>
        <button type="submit"><i class="icon_search"></i>
        </button>
    </form>
</div><!-- End Search Menu -->
<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- SPECIFIC SCRIPTS -->

<script type="text/javascript">
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });


    jQuery(document).ready(function(){
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f32e2c80bd8c42de339a42b/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);

        $('#newsletter_form').submit(function(){

            var action = $(this).attr('action');

            $("#message-newsletter").slideUp(750,function() {
                $('#message-newsletter').hide();

                $('#submit-newsletter')
                    .after('<i class="icon-spin4 animate-spin loader"></i>')
                    .attr('disabled','disabled');

                $.post(action, {
                        email_newsletter: $('#email_newsletter').val(),
                        _token: '{{ csrf_token() }}'
                    },
                    function(data){
                        document.getElementById('message-newsletter').innerHTML = data;
                        $('#message-newsletter').slideDown('slow');
                        $('#newsletter_form .loader').fadeOut('slow',function(){$(this).remove()});
                        $('#submit-newsletter').removeAttr('disabled');
                        if(data.match('success') != null) $('#newsletter_form').slideUp('slow');

                    }
                );

            });

            return false;

        });
    });
</script>
</body>
</html>