@extends('layouts.admin')
@section('title', 'Nouvelle Formation')
@push('css')
    <link href="{{ asset('vendor/dropzone.css') }}" rel="stylesheet" type="text/css"/>
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>AJOUTER FORMATION</h2>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Module :*</label>
                        <select class="form-control" name="module" id="module" required>
                            <option value="" selected>CHOIX MODULE</option>
                            @foreach($modules as $module)
                                <option value="{{$module->id}}">{{$module->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Titre de la formation :*</label>
                    <input type="text" class="form-control" placeholder="Titre Module" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Déscription :*</label>
                        <textarea style="height:100px;" class="form-control" placeholder="Description"
                                  name="description" id="description" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pré-requis :*</label>
                        <textarea style="height:100px;" class="form-control" placeholder="Description"
                                  name="description" id="description" required></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Formateur :*</label>
                        <select class="form-control" name="module" id="module" required>
                            <option value="" selected>CHOIX MODULE</option>
                            @foreach($modules as $module)
                                <option value="{{$module->id}}">{{$module->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Niveau :*</label>
                        <select class="form-control" name="module" id="module" required>
                            <option value="all" selected>Tous les niveaux</option>
                            <option value="Débutant" >Débutant</option>
                            <option value="Intermédiaire" >Intermédiaire</option>
                            <option value="Confirmé" >Confirmé</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombre des heurs :*</label>
                        <input type="text" class="form-control" placeholder="Titre Module" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Prix :*</label>
                        <input type="text" class="form-control" placeholder="Titre Module" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Langue :*</label>
                        <select class="form-control" name="module" id="module" required>
                            <option value="" selected>CHOIX LANGUE</option>
                            <option value="Français">Français</option>
                            <option value="English">English</option>
                            <option value="Arabe">Arabe</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Sélectionner une seul Image et un seul vidéo (Prévisualisation) :*</label>
                        <form action="/file-upload" class="dropzone"></form>
                    </div>
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
                                    <th>ID</th>
                                    <th>Rang</th>
                                    <th>Formation</th>
                                    <th>Chapitre</th>
                                    <th>NB. Vidéos</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Rang</th>
                                    <th>Formation</th>
                                    <th>Chapitre</th>
                                    <th>NB. Vidéos</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($formations as $formation)
                                    <tr>
                                        <td>{{$formation->id}}</td>
                                        <td>{{$formation->image}}</td>
                                        <td>{{$formation->titre}}</td>
                                        <td>{{$formation->formateur}}</td>
                                        <td>{{$formation->created_at}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="admin-edit-theme/{{$formation->id}}"><i class="fa fa-edit"></i> Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" onclick="deltheme({{$formation->id}})"><i class="fa fa-trash"></i> Supp</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>








            </div>
            <div class="header_box version_2">
                <input type="submit" class="btn btn-primary">
                <input type="reset" class="btn btn-secondary">
            </div>

    </div>








    <!-- end:: Content -->
@endsection
@push('js')
    <script src="{{ asset('js/admin-datatables.js') }}"></script>
    <script src="{{ asset('js/dataTables.select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script src="{{asset('vendor/dropzone.min.js')}}"></script>
    <script type="text/javascript">
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
        jQuery(document).ready(function () {




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


