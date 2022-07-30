@extends('layouts.admin')
@section('title', 'Modules')
@push('css')
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <!-- /box_general-->

    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-share-alt"></i>Lessons : </h2>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Formation</th>
                        <th>Chapitre</th>
                        <th>Rang</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Formation</th>
                        <th>Chapitre</th>
                        <th>Rang</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($lessons as $lesson)
                        <tr>
                            <td>{{$lesson->id}}</td>
                            <td>{{$lesson->formation}}</td>
                            <td>{{$lesson->chapitre}}</td>
                            <td>{{$lesson->rang}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="admin-edit-lesson/{{$lesson->id}}"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-danger btn-sm" href="#" onclick="deltheme({{$lesson->id}})"><i class="fa fa-trash"></i> Supp</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- /box_general-->

    <!-- Add Lesson -->
    <div id="addlesson" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
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
                     $('#addlesson').modal('toggle');
                }
            }]
        }).columns.adjust().draw();


        function deltheme(idt) {

            swal.fire({
                title: "Confirmez-vous la suppression de cet Module ?",
                text: 'Attention, cette opération est irréversible',
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Oui",
                cancelButtonText: "Non"
            }).then(function (e) {
                if (e.value) {
                    $.ajax({
                        url: '{{ route('del-module') }}',
                        type: "POST",
                        data: {
                            idt: idt,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            Swal.fire(
                                'Module supprimée avec succès',
                                '',
                                'success'
                            )

                            setTimeout(function () {

                                window.location.href = "admin-list-modules";

                            }, 2000);


                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            return swal.fire({

                                text: textStatus.msg,
                                type: textStatus.status,
                                confirmButtonClass: "btn btn-secondary"
                            })
                        }
                    });

                }
            });


        }


    </script>
@endpush


