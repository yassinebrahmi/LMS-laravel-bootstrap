@extends('layouts.admin')
@section('title', 'Nuovelle Ressource')
@push('css')

@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>AJOUTER RESSOURCE</h2>
        </div>

        <!--form method="post" action="" enctype="multipart/form-data" id="fmodule" name="ftheme"-->
        <div class="row">
            <div class="col-md-8 add_top_30">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nom de la ressource :*</label>
                            <input type="text" class="form-control" placeholder="ressource" required name="ressource" id="ressource">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Prix (TND):*</label>
                            <input type="text" class="form-control" placeholder="Prix" required name="price" id="price">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_box version_2">
            <input type="hidden" name="idimg" value="" id="idimg" required>
            <input type="submit" class="btn btn-primary" onclick="sendmodule()"  value="Valider">
            <input type="reset" class="btn btn-secondary">
        </div>
        <!--/form-->
    </div>
    <!-- end:: Content -->
@endsection
@push('js')
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script src="{{asset('vendor/dropzone.min.js')}}"></script>
    <script type="text/javascript">
        function sendmodule(){

            if($("#idimg").val()=="")
            {
                Swal.fire(
                    'Veuillez compléter ce champ : Image module',
                    '',
                    'error'
                )
            }
            else
            if($("#catalogue").val()=="")
            {
                Swal.fire(
                    'Veuillez compléter ce champ : Catalogue',
                    '',
                    'error'
                )
            }
            else
            if($("#name").val()=="")
            {
                Swal.fire(
                    'Veuillez compléter ce champ : Titre module',
                    '',
                    'error'
                )
            }
            else
            if($("#description").val()=="")
            {
                Swal.fire(
                    'Veuillez compléter ce champ : Déscription',
                    '',
                    'error'
                )
            }
            else
            {
                $.post("save-module", {
                    image: $("#idimg").val(),
                    catalogue: $("#catalogue").val(),
                    name: $("#name").val(),
                    description: $("#description").val(),
                    isactive: $("#isactive:checked").val(),
                    _token: '{{ csrf_token() }}'
                })
                    .done(function (data) {
                        Swal.fire(
                            data.msg,
                            '',
                            data.status
                        )

                        setTimeout(function () {

                            window.location.href = "admin-list-modules";

                        }, 2000);
                    });

            }





        }
    </script>

@endpush


