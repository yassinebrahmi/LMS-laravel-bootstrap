@extends('layouts.admin')
@section('title', 'Nouveau Module')
@push('css')
    <link href="{{ asset('vendor/dropzone.css') }}" rel="stylesheet" type="text/css"/>
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>{{$formation}}</h2>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> List des Chapitres
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Formation</th>
                            <th>Chapitre</th>
                            <th>NB. Vidéos</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Formation</th>
                            <th>Chapitre</th>
                            <th>NB. Vidéos</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($lessons as $lesson)
                            <tr>
                                <td>{{$formation}}</td>
                                <td>{{$lesson->chapitre}}</td>
                                <td>{{rand(2,6)}}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#listvideos" class="btn btn-primary btn-sm" href="admin-edit-theme/{{$lesson->id}}"><i class="fa fa-edit"></i>Vidéos</a>
                                    <a class="btn btn-primary btn-sm" href="admin-edit-theme/{{$lesson->id}}"><i class="fa fa-edit"></i> Edit</a>
                                    <a class="btn btn-danger btn-sm" href="#" onclick="deltheme({{$lesson->id}})"><i class="fa fa-trash"></i> Supp</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addlesson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{$formation}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Rang :*</label>
                                <input type="number" class="form-control" value="" placeholder="Rang" >
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Chapitre :*</label>
                                <input type="text" class="form-control" value="" placeholder="Chapitre" >
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Valider</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="listvideos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> List des Vidéos : Apprendre HTML et CSS et créer un site Web
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Vidéo</th>
                                    <th>Durée</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Vidéo</th>
                                    <th>Durée</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($videos as $video)
                                    <tr>
                                        <td width="70%">{{$video->titre}}</td>
                                        <td>{{$video->duree}}</td>
                                        <td>
                                            <a class="btn btn-danger btn-sm" href="#" onclick="deltheme({{$lesson->id}})"><i class="fa fa-trash"></i> Supp</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nom Vidéo :*</label>
                                <input type="text" class="form-control" value="" placeholder="Chapitre" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Sélectionner un vidéo :*</label>
                                <form action="/file-upload" class="dropzone"></form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Valider</button>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- end:: Content -->
@endsection
@push('js')
    <script src="{{ asset('js/dataTables.select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script src="{{asset('vendor/vdropzone.min.js')}}"></script>

        <script type="text/javascript">


        jQuery(document).ready(function () {
            $('#dataTable').DataTable({
                language:{
                    sEmptyTable: "Aucune donnée disponible dans le tableau",
                    "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
                    "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
                    "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ",",
                    "sLengthMenu":     "Afficher _MENU_ éléments",
                    "sLoadingRecords": "Chargement...",
                    "sProcessing":     "Traitement...",
                    "sSearch":         "Rechercher :",
                    "sZeroRecords":    "Aucun élément correspondant trouvé",
                    "oPaginate": {
                        "sFirst":    "Premier",
                        "sLast":     "Dernier",
                        "sNext":     "Suivant",
                        "sPrevious": "Précédent"
                    },
                    "oAria": {
                        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                        "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
                    }
                },
                dom: 'Bfrtip',
                buttons: ['excelHtml5', 'pdfHtml5', {
                    text: 'Ajouter Lesson',
                    action: function ( e, dt, node, config ) {
                        $('#addlesson').modal('show');

                    }
                }]
            }).columns.adjust().draw();
            $('#dataTable1').DataTable({
                language:{
                    sEmptyTable: "Aucune donnée disponible dans le tableau",
                    "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
                    "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
                    "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ",",
                    "sLengthMenu":     "Afficher _MENU_ éléments",
                    "sLoadingRecords": "Chargement...",
                    "sProcessing":     "Traitement...",
                    "sSearch":         "Rechercher :",
                    "sZeroRecords":    "Aucun élément correspondant trouvé",
                    "oPaginate": {
                        "sFirst":    "Premier",
                        "sLast":     "Dernier",
                        "sNext":     "Suivant",
                        "sPrevious": "Précédent"
                    },
                    "oAria": {
                        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                        "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            }).columns.adjust().draw();
            $( "#ftheme" ).submit(function( event ) {

                $.post( "save-theme", { titre: $("#titre").val(), description: $("#description").val(),isactive: $("#isactive:checked" ).val(),_token: '{{ csrf_token() }}' })
                    .done(function( data ) {
                        Swal.fire(
                            data.msg,
                            '',
                            data.status
                        )

                        setTimeout(function () {

                            window.location.href = "admin-list-themes";

                        }, 2000);
                    });


                event.preventDefault();
            });

        });
    </script>

@endpush


