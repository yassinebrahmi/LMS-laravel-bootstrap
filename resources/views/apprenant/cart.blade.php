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
    <section id="hero_in" class="cart_section">
        <div class="wrapper">
            <div class="container">
                <div class="bs-wizard clearfix">
                    <div class="bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum">Panier</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Paiement</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Terminer</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>
                </div>
                <!-- End bs-wizard -->
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <div class="box_cart">
                        <table class="table table-striped cart-list">
                            <thead>
                            <tr>
                                <th>
                                    Formation
                                </th>

                                <th>
                                    Prix (TND)
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="thumb_cart">
                                        <img src="{{asset('uploads/formations/3/3.png')}}" alt="Image">
                                    </div>
                                    <span class="item_cart">Laravel : Créer un site e-commerce de A à Z</span>
                                </td>
                                <td>
                                    <strong>150</strong>
                                </td>
                                <td class="options" style="width:5%; text-align:center;">
                                    <a href="#"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="thumb_cart">
                                        <img src="{{asset('uploads/formations/6/6.png')}}" alt="Image">
                                    </div>
                                    <span class="item_cart">Utiliser le système de File Storage de Laravel 6</span>
                                </td>

                                <td>
                                    <strong>150</strong>
                                </td>
                                <td class="options" style="width:5%; text-align:center;">
                                    <a href="#"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <div id="total_cart">
                            Total <span class="float-right">300 TND</span>
                        </div>

                        <a href="{{route('payment-coworking')}}" class="btn_1 full-width">Acheter maintenant</a>

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
