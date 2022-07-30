@extends('layouts.admin')
@section('title', 'Détail demande')
@push('css')
@endpush
@section('contenu')
    <!-- begin:: Content -->
    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>DETAIL DEMANDE COWORKING</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nom & Prénom</label>
                    <input type="text" class="form-control" value="{{$res->nomprenom}}" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Adresse mail</label>
                    <input type="text" class="form-control" value="{{$res->email}}" readonly>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Statut</label>
                    <input type="text" class="form-control" value="{{$res->statut}}" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Tél</label>
                    <input type="text" class="form-control" value="{{$res->tel}}" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Date de réservation </label>
                    <input type="text" class="form-control" value="{{$res->date_debut}}" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nombre de jours</label>
                    <input type="text" class="form-control" value="{{$res->nbjours}}" readonly>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Nombre des personnes</label>
                    <input type="text" class="form-control" value="{{$res->nbpersonnes}}" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Type de la salle</label>
                    <input type="text" class="form-control" value="{{$res->salle}}" readonly>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" cols="3" readonly>{{$res->message}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Ressource</label>
                    <input type="text" class="form-control" value="{{$res->ressources}}" readonly>
                </div>
            </div>
        </div>

        <div class="header_box version_2">
            <button type="button" class="btn btn-secondary">FERMER</button>
            <button type="button" class="btn btn-danger">PDF</button>
        </div>
    </div>
    <!-- end:: Content -->
@endsection
@push('js')

@endpush


