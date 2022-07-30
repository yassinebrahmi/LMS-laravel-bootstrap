<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Coworky | Learn</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<header class="header fadeInDown">
    <div id="logo">
        <a href="index.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
    </div>
    <ul id="top_menu">
        <li><a href="{{route('site.index')}}" class="login">Coworky</a></li>
        <li><a href="#0" class="search-overlay-menu-btn">Rechercher</a></li>
        <li class="hidden_tablet"><a href="#0">Mes Formations</a></li>
        <a href="/order/cart" class="text-light" style="font-size: 1.2em" data-toggle="tooltip" data-placement="left" title="" data-original-title="View my cart">
            <i class="icon-cart ml-3 mr-3 mr-1"></i></a>
        <button type="button" class="btn-dropdown btn-white dropdown-toggle ml-3 p-1 text-light" style="background-color: #FFC10700; box-shadow: transparent;outline-style: none;border-width: 0px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('img/wissal.jpg')}}" style="border-radius: 16px" width="32px" height="32px"></button>



    </ul>
    <!-- /top_menu -->
</header>
<!-- /header -->

<div id="main_menu">
    <div class="container">

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
</div>
<!-- /main_menu -->

<main>
    <section id="hero_in" class="apprenant">
        <div class="wrapper">
            <div class="container">
                <h2 class="fadeInUp" style="color: #00afad"><span>Bienvenue Wissal Ajengui</span> <br/>Continuez à regarder vos cours</h2>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="filters_listing sticky_horizontal">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <div class="switch-field">
                        <input type="radio" id="all" name="listing_filter" value="all" checked>
                        <label for="all">All</label>
                        <input type="radio" id="popular" name="listing_filter" value="popular">
                        <label for="popular">Formation Gratuite</label>
                        <input type="radio" id="latest" name="listing_filter" value="latest">
                        <label for="latest">Formation Payante</label>
                    </div>
                </li>

            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /filters -->

    <div class="container margin_60_35">
        <div class="row">
            <aside class="col-lg-3" id="sidebar">
                <div id="filters_col"><a data-toggle="collapse" href="#collapseFilters" aria-expanded="false"
                                         aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
                    <div class="collapse show text-bold" id="collapseFilters">
                        <div class="filter_type">
                            <h6>Modules</h6>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox" class="icheck" checked>all <small>(10)</small>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="icheck">e-commerce <small>(0)</small>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="icheck">Comptabilté <small>(0)</small>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="icheck">Design <small>(2)</small>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="icheck">Personnel<small>(1)</small>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="icheck">Développement Web <small>(7)</small>
                                    </label>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!--/collapse -->
                </div>
                <!--/filters col-->
            </aside>
            <!-- /aside -->

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box_grid wow">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="course-detail.html"><img
                                            src="{{asset('uploads/formations/5/5.png')}}" class="img-fluid"
                                            alt=""></a>
                                <div class="price">150 TND</div>
                                <div class="preview"><span>Prévisualiser ce cours</span></div>
                            </figure>
                            <div class="wrapper">
                                <small>Category</small>
                                <h3>Laravel : Créer un site e-commerce de A à Z</h3>
                                <p>Construire un site e-commerce complet avec le framework Laravel</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <i class="icon_profile"></i> <strong>890 participants</strong>
                                </div>
                            </div>
                            <ul>
                                <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                <li><a href="{{route('formation.detail')}}">Voir ce cours</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-md-6">
                        <div class="box_grid wow">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="course-detail.html"><img
                                            src="{{asset('uploads/formations/3/3.png')}}" class="img-fluid"
                                            alt=""></a>
                                <div class="price">70 TND</div>
                                <div class="preview"><span>Prévisualiser ce cours</span></div>
                            </figure>
                            <div class="wrapper">
                                <small>Développement web</small>
                                <h3>Les bases de Laravel 7</h3>
                                <p>Découvrir les fondamentaux de Laravel via la construction d'un site web complet</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <i class="icon_profile"></i> <strong>10 participants</strong>
                                </div>
                            </div>
                            <ul>
                                <li><i class="icon_clock_alt"></i> 1h 30min</li>

                                <li><a href="{{route('formation.detail')}}">Voir ce cours</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-md-6">
                        <div class="box_grid wow">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="course-detail.html"><img
                                            src="{{asset('uploads/formations/6/6.png')}}" class="img-fluid"
                                            alt=""></a>
                                <div class="price">Free</div>
                                <div class="preview"><span>Prévisualiser ce cours</span></div>
                            </figure>
                            <div class="wrapper">
                                <small>Développement web</small>
                                <h3>Master Laravel PHP for Beginners and Intermediate</h3>
                                <p>Get from zero to proficiency in Laravel PHP Framework in one week! Course for beginners and intermediate students!</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <i class="icon_profile"></i> <strong>890 participants</strong>
                                </div>
                            </div>
                            <ul>
                                <li><i class="icon_clock_alt"></i> 1h 30min</li>

                                <li><a href="{{route('formation.detail')}}">Voir ce cours</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-md-6">
                        <div class="box_grid wow">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="course-detail.html"><img
                                            src="{{asset('uploads/formations/4/4.png')}}" class="img-fluid"
                                            alt=""></a>
                                <div class="price">150 TND</div>
                                <div class="preview"><span>Prévisualiser ce cours</span></div>
                            </figure>
                            <div class="wrapper">
                                <small>Développement web</small>
                                <h3>Laravel 6 File Storage - Créer une galerie d'images </h3>
                                <p>Utiliser le système de File Storage de Laravel 6</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <i class="icon_profile"></i> <strong>890 participants</strong>
                                </div>
                            </div>
                            <ul>
                                <li><i class="icon_clock_alt"></i> 1h 30min</li>

                                <li><a href="{{route('formation.detail')}}">Voir ce cours</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-md-6">
                        <div class="box_grid wow">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href=""><img
                                            src="{{asset('uploads/formations/2/2.png')}}" class="img-fluid"
                                            alt=""></a>
                                <div class="price">100 TND</div>
                                <div class="preview"><span>Prévisualiser ce cours</span></div>
                            </figure>
                            <div class="wrapper">
                                <small>Développement web</small>
                                <h3>Power BI - Data Analytics Essentials with</h3>
                                <p>Get Started Quickly with Visualization, Data Prep and DAX on Power BI (Course continues to be updated)...</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <i class="icon_profile"></i> <strong>12 participants</strong>
                                </div>
                            </div>
                            <ul>
                                <li><i class="icon_clock_alt"></i> 1h 30min</li>

                                <li><a href="{{route('formation.detail')}}">Voir ce cours</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-md-6">
                        <div class="box_grid wow">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="course-detail.html">
                                    <div class="preview"><span>Prévisualiser ce cours</span></div>
                                    <img src="{{asset('uploads/formations/1/1.png')}}" class="img-fluid"
                                         alt=""></a>
                                <div class="price">39 TND</div>

                            </figure>
                            <div class="wrapper">
                                <small>Category</small>
                                <h3>MS Excel Exam Guide: Analyzing and Visualizing Data</h3>
                                <p>Gain Skills in Data Analysis with Excel. Pass the Microsoft 70-779 Exam. Grow Your Career with an Excel Certification.</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <i class="icon_profile"></i> <strong>7 participants</strong>
                                </div>
                            </div>
                            <ul>
                                <li><i class="icon_clock_alt"></i> 1h 30min</li>

                                <li><a href="{{route('formation.detail')}}">Voir ce cours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">


                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->
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
<script src="{{asset('js/video_header.js')}}"></script>
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
