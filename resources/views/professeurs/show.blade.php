<!-- @extends('professeurs.layout')
@section('content') -->
@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Profile')
@section('content')
 <div class="card">
  <div class="card-header">Professeurs Page</div>
  <div class="card-body">
   
      <div class="card-body" style="padding-left:35%">
        <p class="card-image"><img src="{{ asset('images/professeurs/'.$professeurs->image) }}"></p>
        <h5 class="card-title">Nom : {{ $professeurs->nom }}</h5>
        <p class="card-text">Prenom : {{ $professeurs->prenom }}</p>
        <p class="card-text">Cin: {{ $professeurs->cin }}</p>
        <p class="card-text">Telephone: {{ $professeurs->telephone }}</p>
        <p class="card-date">Date de Recrutement: {{ $professeurs->date_recrutement }}</p>
        <p class="card-date">Date de Naissance: {{ $professeurs->date_naissance }}</p>
        <p class="card-text">Specialite: {{ $professeurs->specialite }}</p>
        <p class="card-text">Appartenant_a_ENSAJ: {{ $professeurs->appartenant_a_ENSAJ}}</p>
        <p class="card-file">Dossier_scientifique: {{ $professeurs->Dossier_scientifique }}</p>
        <p class="card-file">Dossier_Pedagogique: {{ $professeurs->Dossier_Pedagogique }}</p>
        <p class="card-file">Dossier_administratif: {{ $professeurs->Dossier_administratif }}</p>

      </div>
       
    </hr>
  
  </div>

</div>
@endsection
@stop
