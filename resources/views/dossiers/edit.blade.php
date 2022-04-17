@extends('dashboards.users.layouts.user-dash-layout')
@section('content')
<div class="card">
  <div class="card-header">editer les dossiers</div>
  <div class="card-body">
      
      <form action="{{ url('dossier/' .$dossiers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$dossiers->id}}" id="id" />
        <label>nom_proprietaire</label></br>
        <input type="text" name="nom_proprietaire" id="nom_proprietaire" value="{{$dossiers->nom_proprietaire}}" class="form-control"></br>
        <!-- <label>nom_dossier</label></br>
        <input type="text" name="nom_dossier" id="nom_dossier" value="{{$dossiers->nom_dossier}}" class="form-control"></br>
     -->
        <label for="nom_dossier">nom_dossier</label>
            <select name="nom_dossier" id="nom_dossier">
                <option value="{{$dossiers->nom_dossier}}" selected></option>
                <option value="scientifique">scientifique</option>
                <option value="pedagogique">pedagogique</option>
                <option value="administratif">administratif</option>
            </select></br></br>
        <!-- <label>etat_dossier</label></br> -->
        <!-- <input type="text" name="etat_dossier" id="etat_dossier" value="{{$dossiers->etat_dossier}}" class="form-control"></br> -->
        <label for="etat_dossier">etat_dossier</label>
            <select name="etat_dossier" id="etat_dossier">
                <option value="{{$dossiers->etat_dossier}}" selected>{{$dossiers->etat_dossier}}</option>
                <option value="En_attente">En_attente</option>
                <option value="en_cours">en_cours</option>
                <option value="validé">validé</option>
                <option value="refusé">refusé</option>
            </select></br></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop