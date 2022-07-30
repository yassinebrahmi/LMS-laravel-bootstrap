@extends('layouts.admin')
@section('title', 'Nouveau Module')
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
                            <form action="/file-upload" class="dropzone"></form>
                        </div>
                    </div>
                    <div class="col-md-8 add_top_30">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Thème :*</label>
                                    <select class="form-control" name="theme" id="theme" required>
                                        <option value="" selected>CHOIX THEME</option>
                                        @foreach($themes as $theme)
                                        <option value="{{$theme->id}}">{{$theme->nomtheme}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titre :*</label>
                                    <input type="text" class="form-control" placeholder="Titre Module" required>
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Déscription :*</label>
                                    <textarea style="height:100px;" class="form-control" placeholder="Déscription"></textarea>
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
                <input type="submit" class="btn btn-primary">
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


