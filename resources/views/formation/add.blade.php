@extends('layouts.admin')
@section('title', 'Nouvelle Formation')
@push('css')
    <link href="{{ asset('vendor/dropzone.css') }}" rel="stylesheet" type="text/css"/>
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="box_general padding_bottom">
        <form name="ftheme" method="post" id="ftheme">
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
                    <input type="text" class="form-control" placeholder="Titre Module" required name="titre" id="titre">
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
                                  name="prerequis" id="prerequis" required></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Formateur :*</label>
                        <select class="form-control" name="formateur" id="formateur" required>
                            <option value="" selected>CHOIX Formateur</option>
                            <option value="AJENGUI WISSAL">AJENGUI WISSAL</option>
                            <option value="HAMDI NABIL">HAMDI NABIL</option>
                            <option value="ZGHAL AHMED">ZGHAL AHMED</option>
                            <option value="TURKI NIZAR">TURKI NIZAR</option>
                            <option value="KALLEL ENMA">KALLEL ENMA</option>
                            <option value="TLILI KHALED">TLILI KHALED</option>
                            <option value="HORCHENI CHEDI">HORCHENI CHEDI</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Niveau :*</label>
                        <select class="form-control" name="niveau" id="niveau" required>
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
                        <input type="text" class="form-control" placeholder="Nombre des heurs" required id="nbheurs" name="nbheurs">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Prix :*</label>
                        <input type="text" class="form-control" placeholder="Titre Module" required id="prix" name="prix">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Langue :*</label>
                        <select class="form-control" name="langue" id="langue" required>
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
                        <div class="dropzone"></div>
                    </div>
                </div>
            </div>
            <div class="header_box version_2">
                <input type="submit" class="btn btn-primary">
                <input type="reset" class="btn btn-secondary">
            </div>
        </form>
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
    <script src="{{asset('vendor/fdropzone.min.js')}}"></script>
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

                $.post( "save-formation", {
                    titre: $("#titre").val(),
                    description: $("#description").val(),
                        module: $("#module").val(),
                        formateur: $("#formateur").val(),
                        niveau: $("#niveau").val(),
                        langue: $("#langue").val(),
                        prix: $("#prix").val(),
                        prerequis: $("#prerequis").val(),
                        titre: $("#titre").val(),
                        _token: '{{ csrf_token() }}'
                })
                    .done(function( data ) {
                        Swal.fire(
                            data.msg,
                            '',
                            data.status
                        )

                        setTimeout(function () {

                            window.location.href = "admin-list-formations";

                        }, 2000);
                    });


                event.preventDefault();
            });
        });
    </script>
@endpush


