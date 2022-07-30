<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Coworky | Inscription</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

</head>

<body id="register_bg">

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<div id="login">
    <aside>
        <figure>
            <a href="index.html"><img src="{{asset('img/logo1.png')}}" width="112" height="113" data-retina="true" alt=""></a>
        </figure>
        <form autocomplete="off">
            <div class="form-group">

					<span class="input">
					<input class="input_field" type="text" name="nom" id="nom">
						<label class="input_label">
						<span class="input__label-content">Nom</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field" type="text" name="prenom" id="prenom">
						<label class="input_label">
						<span class="input__label-content">Prénom</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field" type="email" name="email" id="email">
						<label class="input_label">
						<span class="input__label-content">Addresse Email</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field" type="password" id="password1" name="password1">
						<label class="input_label">
						<span class="input__label-content">Mot de passe</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field" type="password" id="password2" name="password2">
						<label class="input_label">
						<span class="input__label-content">Confirmer mot de passe</span>
					</label>
					</span>

                <div id="pass-info" class="clearfix"></div>
            </div>
            <a href="#0" id="inscription" class="btn_1 rounded full-width add_top_30">Inscription</a>
            <div class="text-center add_top_10">Vous avez déjà un compte ? <strong><a href="{{route('login')}}">Connexion</a></strong></div>
        </form>
        <div class="copy">© 2020 COWORKY</div>
    </aside>
</div>
<!-- /login -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>
<script src="{{asset('js/sweetalert2.js')}}"></script>
<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('js/pw_strenght.js')}}"></script>

<script type="text/javascript">


$( "#inscription" ).click(function() {
 $.ajax({
                           url: '{{ route('save-user') }}',
                           type: "POST",
                           data: {
                               nom: $('#nom').val(),
                               prenom: $('#prenom').val(),
                               email: $('#email').val(),
                               password1: $('#password1').val(),
                               _token: '{{ csrf_token() }}'
                           },
                           success: function (response) {
                          Swal.fire(
                              response.msg,
                            '',
                              response.status
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
});

</script>



</body>
</html>