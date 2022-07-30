<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Coworky | Contact</title>

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
        <li><a href="" class="login">Acceuil</a></li>
        <li class="hidden_tablet"><a href="{{route('inscription-coworking')}}">Inscription</a></li>
        <li><a href="login.html" class="search-overlay-menu-btn">Connexion</a></li>
        <li><a href="#0" class="search-overlay-menu-btn">Rechercher</a></li>
        <li><a href="{{route('demande-coworking')}}" class="search-overlay-menu-btn">Coworking Zone</a></li>
        <li><a href="#0" class="search-overlay-menu-btn">Formation</a></li>
        <li><a href="{{route('coworky-contact')}}" class="search-overlay-menu-btn">Contact</a></li>
        <li class="hidden_tablet"><a href="#" class=""></a></li>
    </ul>
    <!-- /top_menu -->
</header>
<!-- /header -->

<main>
    <section id="hero_in" class="contacts">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"  style="color:#008f98"><span></span>Contact Coworky</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="contact_info">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <i class="pe-7s-map-marker"></i>
                    <h4>Adresse</h4>
                    <span>Rue Arbi Zarrouk 8000<br> Nabeul, Tunisie</span>
                </li>
                <li>
                    <i class="pe-7s-mail-open-file"></i>
                    <h4>E-mail</h4>
                    <span>hello@coworky.org<br><small>Monday to Friday 08:30 - 18:00</small></span>
                </li>
                <li>
                    <i class="pe-7s-phone"></i>
                    <h4>Contacts info</h4>
                    <span>+ 216 72 286 315<br>+ 216 52 245 354</span>
                </li>
            </ul>
        </div>
    </div>
    <!--/contact_info-->

    <div class="bg_color_1">
        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="map_contact">
                    </div>
                    <!-- /map -->
                </div>
                <div class="col-lg-6">
                    <h4>Envoyer un message</h4>
                    <p>
                        si vous avez un problème, une suggestion. Vous pouvez donc nous contacter et soumettre vos commentaires.
                        Et nous sommes heureux de vous aider et de vous donner ce dont vous avez besoin.

                    </p>
                    <div id="message-contact"></div>
                    <form method="post" action="{{route('save-contact')}}" id="contactform" autocomplete="off">
                       @csrf
                        <div class="row">
                            <div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content">Nom</span>
										</label>
									</span>
                            </div>
                            <div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="lastname_contact" name="lastname_contact">
										<label class="input_label">
											<span class="input__label-content">Prénom</span>
										</label>
									</span>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content">Adresse mail</span>
										</label>
									</span>
                            </div>
                            <div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone_contact">
										<label class="input_label">
											<span class="input__label-content">Téléphone</span>
										</label>
									</span>
                            </div>
                        </div>
                        <!-- /row -->
                        <span class="input">
									<textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Message</span>
									</label>
							</span>
                        <span class="input">
									<input class="input_field" type="text" id="verify_contact" name="verify_contact">
									<label class="input_label">
									<span class="input__label-content">Code de sécurité 3 + 1 =</span>
									</label>
							</span>
                        <p class="add_top_30"><input type="submit" value="Envoyer" class="btn_1 rounded" id="submit-contact"></p>
                    </form>
                </div>
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
                    Coworky.org est une plateforme en ligne spécialisée dans la vente de cours en vidéo. Grâce à Study.tn, vous allez pouvoir apprendre tout ce que vous voulez et celà peu importe où vous vous situez.
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
                    <li><a href="#0">Inscription</a></li>
                    <li><a href="#0">Connexion</a></li>
                    <li><a href="#0">Demande Coworking</a></li>
                    <li><a href="#0">Formation</a></li>
                    <li><a href="#0">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contacts</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 216 72 286 315</a></li>
                    <li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@coworky.com</a></li>
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
                <div id="copy">© 2020 Coworky</div>
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

        $('#contactform').submit(function(){

            var action = $(this).attr('action');

            $("#message-contact").slideUp(750,function() {
                $('#message-contact').hide();

                $('#submit-contact')
                    .after('<i class="icon-spin4 animate-spin loader"></i>')
                    .attr('disabled','disabled');

                $.post(action, {
                        name_contact: $('#name_contact').val(),
                        lastname_contact: $('#lastname_contact').val(),
                        email_contact: $('#email_contact').val(),
                        phone_contact: $('#phone_contact').val(),
                        message_contact: $('#message_contact').val(),
                        verify_contact: $('#verify_contact').val(),
                        _token: '{{ csrf_token() }}'
                    },
                    function(data){
                        document.getElementById('message-contact').innerHTML = data;
                        $('#message-contact').slideDown('slow');
                        $('#contactform .loader').fadeOut('slow',function(){$(this).remove()});
                        $('#submit-contact').removeAttr('disabled');
                        if(data.match('success') != null) $('#contactform').slideUp('slow');

                    }
                );

            });
            return false;
        });


</script>
</body>
</html>
