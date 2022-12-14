@extends('layouts.admin')
@section('title', 'Formation')
@push('css')
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> List des formations
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Formateur</th>
                        <th>NB. Heurs</th>
                        <th>Langue</th>
                        <th>Prix</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Formateur</th>
                        <th>NB. Heurs</th>
                        <th>Langue</th>
                        <th>Prix</th>

                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($formations as $formation)
                    <tr>
                        <td>{{$formation->id}}</td>
                        <td>{{$formation->titre}}</td>
                        <td>{{$formation->formateur}}</td>
                        <td>{{$formation->nbheurs}}</td>
                        <td>{{$formation->langue}}</td>
                        <td>{{$formation->prix}}</td>


                        <td>
                            <a class="btn btn-success btn-sm" href="{{route('admin-add-lesson',['formation'=>$formation->titre,'id'=>$formation->id])}}"><i class="fa fa-edit"></i>Lessons</a>
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
                sEmptyTable: "Aucune donn??e disponible dans le tableau",
                "sInfo":           "Affichage de l'??l??ment _START_ ?? _END_ sur _TOTAL_ ??l??ments",
                "sInfoEmpty":      "Affichage de l'??l??ment 0 ?? 0 sur 0 ??l??ment",
                "sInfoFiltered":   "(filtr?? ?? partir de _MAX_ ??l??ments au total)",
                "sInfoPostFix":    "",
                "sInfoThousands":  ",",
                "sLengthMenu":     "Afficher _MENU_ ??l??ments",
                "sLoadingRecords": "Chargement...",
                "sProcessing":     "Traitement...",
                "sSearch":         "Rechercher :",
                "sZeroRecords":    "Aucun ??l??ment correspondant trouv??",
                "oPaginate": {
                    "sFirst":    "Premier",
                    "sLast":     "Dernier",
                    "sNext":     "Suivant",
                    "sPrevious": "Pr??c??dent"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d??croissant"
                }
            },
            dom: 'Bfrtip',
            buttons: ['excelHtml5', 'pdfHtml5', {
                text: 'Nouvelle Formation',
                action: function ( e, dt, node, config ) {
                    window.location.href = "admin-add-formation";
                }
            }]
        }).columns.adjust().draw();


         function deltheme(idt) {

                    swal.fire({
                        title: "Confirmez-vous la suppression de cet th??me ?",
                        text: 'Attention, cette op??ration est irr??versible',
                        type: "warning",
                        showCancelButton: !0,
                        confirmButtonText: "Oui",
                        cancelButtonText: "Non"
                    }).then(function (e) {
                        if (e.value) {
                            $.ajax({
                                url: '{{ route('del-theme') }}',
                                type: "POST",
                                data: {
                                    idt: idt,
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function (response) {
                                    Swal.fire(
                                                                'Th??me supprim??e avec succ??s',
                                                                '',
                                                                'success'
                                                              )

                                    setTimeout(function () {

                                        window.location.href = "admin-list-themes";

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


