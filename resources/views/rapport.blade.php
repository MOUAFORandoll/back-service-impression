@php
use Carbon\Carbon;
@endphp

@extends('pdf.layouts.pdf' )
 

@section('title', 'Facture')
 
@section('content')
<div class="container-fluid mt-3 border border-secondary">
 
      <div class="  text-center fw-bolder fs-3 se">Reçu de Paiement de votre livraison</div>
 <div class="container-fluid-second">
    <div class="row mt-1">
        <div class="col-md-12">
            <div class="fw-bold fs-4">Facture à :</div>
               <div class=" fw-bold">Nom   <b class="fw-normal">{{ $data['initiateur']['nom'] }}</b></div>
                
                <div class="mt-2 fw-bold">Téléphone  <b class="fw-normal">{{$data['initiateur']['phone'] }}</b></div>
            
                <div class="mt-2 fw-bold">Ville <b class="fw-normal"> {{ $data['livraison']['ville'] }}</b></div>
                <div class="mt-2 fw-bold">Lieu de Départ <b class="fw-normal">{{ $data['livraison']['lieuDepart'] }}</div>
            
                <div class="mt-2 fw-bold">Montant de la Livraison  <b class="fw-normal">{{ $data['livraison']['montant'] }}</b></div>
                <div class="mt-2 fw-bold">Méthode de paiement <b class="fw-normal"> {{$data['initiateur']['nom'] }}</b></div>
            </div>
        </div>
    
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="fw-bold fs-4">Produits :</div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Catégorie</th>
                        <th>Quantité</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                          <tbody>
                @foreach($data['colis'] as $colis)
                <tr>
                    <td>{{ $colis['nom'] }}</td>
                    <td>{{ $colis['category'] }}</td>
                    <td>{{ $colis['quantite'] }}</td>
                    <td>{{ $colis['valeurColis'] }}</td>
                </tr>
                @endforeach
            </tbody>
            
            </table>
        </div>
    </div></div>
</div>

@endsection
