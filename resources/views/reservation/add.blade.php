@extends('layouts.admin')
@section('title', 'Nouvelle Réservation')
@push('css')
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>Réservation de Coworking</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Statut :*</label>
                    <select class="form-control">
                        <option value="" selected="selected">CHOIX STATUT</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Societe">Societe</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nom & Prénom / Raison Social :*</label>
                    <input type="text" class="form-control" value="" >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Adresse mail :*</label>
                    <input type="text" class="form-control" value="" >
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Tél :*</label>
                    <input type="text" class="form-control" value="" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Date de début :* </label>
                    <input type="date" class="form-control" value="" >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Date de Fin :* </label>
                    <input type="date" class="form-control" value="" >
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Nombre des jours :*</label>
                    <input type="text" class="form-control" value="" >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nombre des personnes :*</label>
                    <input type="text" class="form-control" value="" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <label>Ressource :*</label>
                    <select  class="js-example-basic-multiple" id="ressources" name="ressources[]" multiple="multiple" style="width: 100%" >
                        @foreach($ressources as $ressource)
                            <option value="{{$ressource->id}}">{{$ressource->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Total :</label>
                    <input id="total" type="text" class="form-control" value="" readonly>
                </div>
            </div>
        </div>

        <div class="header_box version_2">
            <button type="submit" class="btn btn-primary" >Valider</button>
            <input type="reset" class="btn btn-secondary" >

        </div>
    </div>
    <!-- end:: Content -->
@endsection
@push('js')
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">

        $( "#idfd" ).submit(function( event ) {
            $.ajax({
                url: '{{ route('save-demande') }}',
                type: "POST",
                data: {
                    nomprenom: $('#nomprenom').val(),
                    adrmail: $('#email').val(),
                    date_debut: $('#date_debut').val(),
                    nbjours: $('#nbjrs').val(),
                    nbpersonnes: $('#nbpers').val(),
                    salle: $('#salle').val(),
                    tel: $('#tel').val(),
                    message: $('#message').val(),
                    ressources: $('#ressources').val(),
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    Swal.fire(
                        'Votre demande a été enregistrée avec succès',
                        '',
                        'success'
                    )
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    return swal.fire({
                        text: response.msg,
                        type: response.status,
                        confirmButtonClass: "btn btn-secondary"
                    })
                }
            })
            event.preventDefault();
        });

        $(document).ready(function() {

            $('#ressources').select2();
			
			
			 
$('#ressources').on('change', function() {
	
	
     
	$("#total").val(Math.floor( Math.random() * 200));
  
	  
    })

        });
    </script>
@endpush


