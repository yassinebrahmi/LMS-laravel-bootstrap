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
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">


    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<header class="header fadeInDown">
    <div id="logo">
        <a href="#"><img src="img/logo.png" width="126" height="126" data-retina="true" alt=""></a>
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
    <section id="hero_in" class="general">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp" style="color:#008f98"><span></span>Réservation de Coworking</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="container margin_120_95">
        <div class="main_title_2">
            <span><em></em></span>
            <h2 style="color:#008f98">Coworking Zone</h2>
            <p>Nous vous offrons un espace de travail confortable et bien équipé avec un accès flexible allant jusqu’à 24h/24h</p>
        </div>
        <form  id="idfd"  method="post">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h4 style="color:#008f98">Réservation de Coworking</h4>
                    <div class="container register-form">
                        <div class="form">

                            <div class="form-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label  class="mr-sm-2 font-weight-bold">Nom et Prénom :*</label>
                                            <input id="nomprenom" name="nomprenom" type="text" class="form-control" placeholder="Nom et Prénom" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <label  class="mr-sm-2 font-weight-bold">Téléphone :</label>
                                            <input id="tel" name="tel" type="text" class="form-control" placeholder="Téléphone" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label  class="mr-sm-2 font-weight-bold">Adresse Mail :*</label>
                                            <input id="adrmail" name="adrmail" type="email" class="form-control" placeholder="Adresse Mail" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <label  class="mr-sm-2 font-weight-bold">Statut :</label>
                                            <select  id="statut" name="statut" class="browser-default custom-select" required>
                                                <option value="" selected>CHOIX STATUT</option>
                                                <option value="Student">Student</option>
                                                <option value="Professional">Professional</option>
                                                <option value="Private Offices">Private Offices</option>
                                                <option value="Meeting Room">Meeting Room</option>
                                                <option value="Training Room">Training Room</option>
                                                <option value="Domiciliation">Domiciliation</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label  class="mr-sm-2 font-weight-bold">Date :*</label>
                                            <input id="date_debut" name="date_debut" type="date" class="form-control" placeholder="Nom et Prénom" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <label  class="mr-sm-2 font-weight-bold">Ressource :*</label>
                                            <select  class="js-example-basic-multiple" id="ressources" name="ressources[]" multiple="multiple" style="width: 100%" >
                                                <option value="WIFI">WIFI</option>
                                                <option value="IMPRIMANTE">IMPRIMANTE</option>
                                                <option value="TEL FIXE">TEL FIXE</option>
                                                <option value="DATA SHOW">DATA SHOW</option>
                                                <option value="CAFE">CAFE</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label  class="mr-sm-2">Nombre de jours :</label>
                                            <input id="nbjrs" name="nbjrs" type="number" class="form-control" placeholder="Nombre de jours" value="" required/>
                                        </div>

                                        <div class="form-group">
                                            <label  class="mr-sm-2 font-weight-bold">Salle :*</label>
                                            <select id="salle" name="salle" class="browser-default custom-select" required>
                                                <option value="" selected>CHOIX SALLE</option>
                                                <option value="Sale de réunion">Sale de réunion</option>
                                                <option value="Bureau privé">Bureau privé</option>
                                                <option value="Bureau public">Bureau public</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label  class="mr-sm-2">Nombre des personnes :*</label>
                                            <input id="nbpers" name="nbpers" type="number" class="form-control" placeholder="Nombre des personnes" value="" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label  class="mr-sm-2">Message :*</label>
                                            <textarea id="message" name="message" class="form-control" rows="2" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                <button type="reset" class="btn btn-secondary">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
        </form>
    </div>
    <!-- /container -->

</main>
<!--/main-->

<footer>
    <div class="container margin_120_95">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="img/logo.png" width="126" height="126" data-retina="true" alt=""></p>
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
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_search"></i>
        </button>
    </form>
</div><!-- / Search Menu -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts.js')}}'"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/sweetalert2.js')}}"></script>
<script type="text/javascript">

$( "#idfd" ).submit(function( event ) {
   $.ajax({
                           url: '{{ route('save-demande') }}',
                           type: "POST",
                           data: {
                               nomprenom: $('#nomprenom').val(),
                               adrmail: $('#email').val(),
                               date_debut: $('#date_debut').val(),
                               nbjours: $('#nbjrs').val(),
                               nbpersonnes: $('#nbpers').val(),
                               salle: $('#salle').val(),
                               tel: $('#tel').val(),
                               message: $('#message').val(),
                               ressources: $('#ressources').val(),
                               _token: '{{ csrf_token() }}'
                           },
                           success: function (response) {
                          Swal.fire(
                            'Votre demande a été enregistrée avec succès',
                            '',
                            'success'
                          )
                           },
                           error: function (jqXHR, textStatus, errorThrown) {
                               console.log(textStatus, errorThrown);
                               return swal.fire({
                                   text: response.msg,
                                   type: response.status,
                                   confirmButtonClass: "btn btn-secondary"
                               })
                           }
                       })
  event.preventDefault();
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
    $(document).ready(function() {
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f32e2c80bd8c42de339a42b/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);

        $('#ressources').select2();


    });
</script>

</body>
</html>
