@extends('layouts.admin')
@section('title', 'Demandes')
@push('css')
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> LIST RESSOURCES COWORKING
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom Ressource</th>
                        <th>Prix (TND)</th>
                        <th>Date de création</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nom Ressource</th>
                        <th>Prix (TND)</th>
                        <th>Date de création</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($coworkings as $coworking)
                    <tr>
                        <td>{{$coworking->id}}</td>
                        <td>{{$coworking->name}}</td>
                        <td>{{$coworking->price}}</td>
                        <td>{{ date ('d-m-Y H:i:s',strtotime($coworking->created_at))}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="admin-detail-demande/{{$coworking->id}}"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-danger btn-sm" href="#" onclick="deldemande({{$coworking->id}})"><i class="fa fa-trash"></i> Supp</a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
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
                text: 'Ajouter Ressource',
                action: function ( e, dt, node, config ) {
                    window.location.href = "admin-add-ressource";
                }
            }]
        }).columns.adjust().draw();


         function deldemande(idd) {



                    swal.fire({
                        title: "Confirmez-vous la suppression de cette demande ?",
                        text: 'Attention, cette opération est irréversible',
                        type: "warning",
                        showCancelButton: !0,
                        confirmButtonText: "Oui",
                        cancelButtonText: "Non"
                    }).then(function (e) {
                        if (e.value) {
                            $.ajax({
                                url: '{{ route('del-demande') }}',
                                type: "POST",
                                data: {
                                    idd: idd,
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function (response) {
                                    Swal.fire(
                                                                'Demande supprimée avec succès',
                                                                '',
                                                                'success'
                                                              )

                                    setTimeout(function () {

                                        window.location.href = "admin-list-demande";

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


