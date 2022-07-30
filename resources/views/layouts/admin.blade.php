<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Main styles -->
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">
    <!-- Icon fonts-->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Plugin styles -->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Your custom styles -->
    <link href="{{asset('css/custom1.css')}}" rel="stylesheet">


    @stack('css')


</head>

<body class="fixed-nav sticky-footer" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{route('site.index')}}"><img src="{{asset('img/logo.png')}}" data-retina="true" alt="" width="80" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{route('admin-dashboard')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Site">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSite" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Site Public</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseSite">
                    <li>
                        <a href="{{ route('admin-workspace') }}">Page service Workspace</a>
                    </li>
                    <li>
                        <a href="{{ route('admin-workspace') }}">Page service Startup</a>
                    </li>
                    <li>
                        <a href="{{ route('admin-workspace') }}">Page service Evenement</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Coworking">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCoworking" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa fa-diamond"></i>
                    <span class="nav-link-text">Coworking</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseCoworking">
                    <li>
                        <a href="{{ route('admin-list-demande') }}">Demande</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-reservation')}}">Réservation</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-ressources')}}">Ressource</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Apprenant">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseApprenants" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa fa-graduation-cap"></i>
                    <span class="nav-link-text">Apprenant</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseApprenants">
                    <li>
                        <a href="{{ route('admin-list-apprenant') }}">Inscription</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-modules')}}">Témoigange</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-modules')}}">Ressource</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Formation">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProfile" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa fa-tv"></i>
                    <span class="nav-link-text">Formation</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseProfile">
                    <li>
                        <a href="{{route('admin-list-catalogues')}}">Catalogue</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-modules')}}">Modules</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-formateurs')}}">Formateurs</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-formations')}}">Formations</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-lessons')}}">Lessons</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Communication">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCommunication" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa fa-at"></i>
                    <span class="nav-link-text">Communication</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseCommunication">
                    <li>
                        <a href="{{ route('admin-list-demande') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-modules')}}">Chat</a>
                    </li>
                    <li>
                        <a href="{{route('admin-list-modules')}}">NewsLetter</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{route('admin-dashboard')}}">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Compte</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
            </li>
        </ul>

    </div>
</nav>
<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#"><b>{{$menu}}</b></a>
            </li>
            <li class="breadcrumb-item active"><b>{{$smenu}}</b></li>
        </ol>
        <!-- Icon Cards-->


            @yield('contenu')



    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © COWORKY 2020</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment déconnecter ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><center><img src="{{asset('img/deconnexion.png')}} "></center></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                <a class="btn btn-primary" href="{{route('logout')}}">Valider</a>
            </div>




        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('vendor/jquery.selectbox-0.2.js')}}"></script>
<script src="{{asset('vendor/retina-replace.min.js')}}"></script>
<script src="{{asset('vendor/jquery.magnific-popup.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('js/admin.js')}}"></script>

@stack('js')
</body>
</html>
