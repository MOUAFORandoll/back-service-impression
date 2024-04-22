@php
use Carbon\Carbon;
@endphp

@extends('pdf.layouts.pdf' )
 

@section('title', 'Facture')
 
@section('content')
<div class="container-fluid mt-3 ">
 
      <div class="  text-center fw-bolder fs-3 se">Bon de livraison Medicament</div>
 <div class="container-fluid-second">
    <div class="row my-3 pb-3">
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
    
  </div> 
   <div class="row mt-3">
        <div class="col-md-12">
            <div class=" se  text-center fw-bolder fs-3"> Pharmacie Medicament</div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>Pharmacie</th>
                        <th>Medicament</th>
                    
                    </tr>
                </thead>
                <tbody>
                 @foreach($data['donnees'] as $pharma)
                <tr>
                    <td>{{ $pharma['pharmacie'] }}</td>
                    <td> 
                          <table class="table table-bordered "> 
                             <tbody>   @foreach($pharma['medicaments'] as $medicament)
                <tr>
                    <td>{{ $medicament['libelle'] }}</td>
                    <td>{{ $medicament['quantite'] }}</td>
                    <td>{{ $medicament['prix'] }}</td>
                   
                  
                </tr>
                @endforeach 
             </tbody>
            
            </table>
             </td> 
                     
                </tr>
                @endforeach
            </tbody>
            
            </table>
        </div>
    </div>
</div>

@endsection
 {{-- --}}