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

<!-- /main_menu -->

<main>
    <section class="header-video">

        <div id="hero_video">
            <div>
                <h3><strong style="color:#008f98">Coworky</strong></h3>
                <p>Coworky est le premier espace de coworking au Cap Bon, situé au centre de Nabeul</p>
            </div>

            <a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i>

            </a>

        </div>
        <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">

    </section>
    <!-- /header-video -->

    <ul id="grid_home" class="clearfix">
        <li>
            <a href="{{route('workspace-coworky')}}" class="img_container">
                <img src="{{asset('img/workspace.jpg')}}" alt="">
                <div class="short_info">
                    <h3><strong>Workspace</strong></h3>
                    <div><span class="btn_1 rounded">Lire la suite...</span></div>
                </div>
            </a>
        </li>
        <li>
            <a href="{{route('startups-coworky')}}" class="img_container">
                <img src="{{asset('img/startup.jpg')}}" alt="">
                <div class="short_info">
                    <h3><strong>Startups</strong></h3>
                    <div><span class="btn_1 rounded">Lire la suite...</span></div>
                </div>
            </a>
        </li>
        <li>
            <a href="{{route('events-coworky')}}" class="img_container">
                <img src="{{asset('img/elearning.jpg')}}" alt="">
                <div class="short_info">
                    <h3><strong>événements</strong></h3>
                    <div><span class="btn_1 rounded">Lire la suite...</span></div>
                </div>
            </a>
        </li>
    </ul>
    <!--/grid_home -->

    <div class="container-fluid margin_120_0" id="first_section">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Cours populaires sur CoWorky</h2>
            <p>Découvrez les cours les mieux notés.</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
            <div class="item">
                <div class="box_grid">
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
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
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
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
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
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
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
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
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
            <!-- /item -->
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="course-detail.html"><img
                                src="{{asset('uploads/formations/6/6.png')}}" class="img-fluid"
                                alt=""></a>
                        <div class="price">80 TND</div>
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
            <!-- /item -->
        </div>
        <!-- /carousel -->
        <div class="container">
            <p class="btn_home_align"><a href="courses-grid.html" class="btn_1 rounded">Afficher tous les cours</a></p>
        </div>
        <!-- /container -->
        <hr>
    </div>
    <!-- /container -->

    <div class="container margin_30_95">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Coworky, votre partenaire compétences</h2>
            <p>Optez pour une formation certifiante, consultez le catalogue Coworky.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="#0" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="{{asset('img/modules/bussiness.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>15 Formations</small>
                            <h3>Bussiness & e-commerce</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="#0" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="{{asset('img/modules/comptabilite.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>23 Formations</small>
                            <h3>Comptabilté & Finance</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="#0" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="{{asset('img/modules/design.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>23 Formations</small>
                            <h3>Design</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="#0" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="{{asset('img/modules/marketing.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>23 Formations</small>
                            <h3>Science and Biology</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="#0" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="{{asset('img/modules/personnel.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>10 Formations</small>
                            <h3>Développement Personnel</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                <a href="#0" class="grid_item">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="{{asset('img/modules/web.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            <small><i class="ti-layers"></i>7 Formations</small>
                            <h3>Développement Web</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->



    <div class="container-fluid margin_120_0">
        <div class="main_title_2">
            <h2>Témoignages</h2>
            <p></p>
        </div>
        <div id="testimonials" class="owl-carousel owl-theme owl-loaded owl-drag">

            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1459px; padding-left: 20px; padding-right: 20px;"><div class="owl-item active" style="width: 384.75px; margin-right: -30px;"><div class="item testimonial">
                            <div class="card m-4">
                                <div class="row p-3">
                                    <div class="col-4"><img class="rounded-circle" src="{{asset('img/yassine.jpg')}}"></div>
                                    <div class="col-8 py-3"><h5>Yassine cherif</h5></div>
                                </div>
                                <div class="row  px-3 pb-3">
                                    <div class="col-12">
                                        c'est intéressant franchement 3awini Barcha merci et Bravo </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 384.75px; margin-right: -30px;"><div class="item testimonial">
                            <div class="card m-4">
                                <div class="row p-3">
                                    <div class="col-4"><img class="rounded-circle" src="{{asset('img/mourad.jpg')}}"></div>
                                    <div class="col-8 py-3"><h5>Mourad Bounasri</h5></div>
                                </div>
                                <div class="row  px-3 pb-3">
                                    <div class="col-12">
                                        That's awesome I hope that will be shared to all tunisian youth... </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 384.75px; margin-right: -30px;"><div class="item testimonial">
                            <div class="card m-4">
                                <div class="row p-3">
                                    <div class="col-4"><img class="rounded-circle" src="{{asset('img/wissal.jpg')}}"></div>
                                    <div class="col-8 py-3"><h5>Wissal Ajengui</h5></div>
                                </div>
                                <div class="row  px-3 pb-3">
                                    <div class="col-12">
                                        Un très bon cours ! merci beaucoup et bonne continuation, ahsen haja 3ejbetni les exemples simples w concrets eli taati fihom </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 384.75px; margin-right: -30px;"><div class="item testimonial">
                            <div class="card m-4">
                                <div class="row p-3">
                                    <div class="col-4"><img class="rounded-circle" src="{{asset('img/aymen.jpg')}}"></div>
                                    <div class="col-8 py-3"><h5>Aymen ben ahmed</h5></div>
                                </div>
                                <div class="row  px-3 pb-3">
                                    <div class="col-12">
                                        <div dir="rtl">ك بداية في أول فرمسيون بداية عجبتني برشا وكملتلي الحلقات الناقصة لي كنت محتاجهم .. ان شاء الله القادم أفضل وانا متأكد لي بعد ما نكمل الفرماسيونات الكل بش نخرج انسان آخر ❤❤</div> </div>
                                </div>
                            </div>
                        </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></div>

        <hr>
    </div>
</main>
<!-- /main -->

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
