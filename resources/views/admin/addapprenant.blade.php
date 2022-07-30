@extends('layouts.admin')
@section('title', 'Nouvelle Ressource')
@push('css')
    <link href="{{ asset('vendor/dropzone.css') }}" rel="stylesheet" type="text/css"/>
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>AJOUTER MODULE</h2>
        </div>

            <!--form method="post" action="" enctype="multipart/form-data" id="fmodule" name="ftheme"-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Image module :*</label>
                            <form action="{{route('uploadimage')}}" class="dropzone">
                            @csrf
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8 add_top_30">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Thème :*</label>
                                    <select class="form-control" name="catalogue" id="catalogue" required>
                                        <option value="" selected>CHOIX CATALOGUE</option>
                                        @foreach($themes as $theme)
                                        <option value="{{$theme->id}}">{{$theme->nomtheme}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titre :*</label>
                                    <input type="text" class="form-control" placeholder="Titre Module" required name="name" id="name">
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Déscription :*</label>
                                    <textarea name="description" id="description" style="height:100px;" class="form-control" placeholder="Déscription"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <label>Activé :*</label>
                                    <input type="checkbox" id="checkboxPrimary1" checked="true" name="isactive" id="isactive" required>
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                    </div>
                </div>

            <div class="header_box version_2">
                <input type="hidden" name="idimg" value="" id="idimg" required>
                <input type="submit" class="btn btn-primary" onclick="sendmodule()" >
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


