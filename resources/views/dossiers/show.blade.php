@extends('dashboards.users.layouts.user-dash-layout')
@section('content')

<div class="card">
  <div class="card-header">Dossiers Page</div>
  <div class="card-body" style="height: 100%;width: 50%;">
   
 
        <div class="card-body"  style="height: 100%;width: 50%;">
        <h5 class="card-title">Nom_proprietaire : {{ $dossiers->nom_proprietaire }}</h5>
        <p class="card-text">Nom_dossier : {{ $dossiers->nom_dossier }}</p>
        <p class="card-text">Etat_dossier: {{ $dossiers->etat_dossier }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection