@extends('layouts.admin')
@section('title', 'Modifier Thème')
@push('css')
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>MODIFIER CATALOGUE</h2>
        </div>
        <form name="ftheme" method="post" id="ftheme">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" class="form-control" value="{{$catalogue->nomtheme}}" placeholder="Titre" name="titre" id="titre" required>
                    </div>
                </div>
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Déscription</label>
                        <textarea style="height:100px;" class="form-control" placeholder="Description"
                                  name="description" id="description" required>{{$catalogue->description}}</textarea>
                    </div>
                </div>
                <div class="col-md-9"></div>

                <div class="col-md-3">
                    <label>Activé</label>

                    <input type="checkbox"  @if($catalogue->isactive==1)  checked="true" @else checked="false" @endif name="isactive" id="isactive" required>
                    <input type="hidden" value="{{$catalogue->id}}" id="idt" name="idt" required>
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
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $( "#ftheme" ).submit(function( event ) {

                $.post( "update-theme", { idt: $("#idt").val(),titre: $("#titre").val(), description: $("#description").val(),isactive: $("#isactive:checked" ).val(),_token: '{{ csrf_token() }}' })
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


