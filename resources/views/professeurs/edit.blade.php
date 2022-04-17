<!-- @extends('professeurs.layout')
@section('content') -->
@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Profile')
@section('content')
<div class="card">
  <div class="card-header">Editer mon profile</div>
  <div class="card-body">
      
      <form action="{{ url('professeur/' .$professeurs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}" id="id" />
        <div class="form-group mb-3">
        <label>Image</label></br>
        <input type="file" name="image" id="image" accept=".png,.gif,.jpng" value="{{$professeurs->image}}" class="form-control"></br>
        </div>
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" value="{{Auth::user()->name}}" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom" value="{{$professeurs->prenom}}" class="form-control"></br>
        <label>E-mail</label></br>
        <input type="email" name="email" id="email" value="{{Auth::user()->email}}" class="form-control"></br>
        <label>cin</label>
        <input type="text" name="cin" id="cin" value="{{$professeurs->cin}}" class="form-control">
        <label>telephone</label>
        <input type="telephone" name="telephone" id="telephone" value="{{$professeurs->telephone}}" class="form-control">
        <label>date_recrutement</label>
        <input type="date" name="date_recrutement" id="date_recrutement" value="{{$professeurs->date_recrutement}}" class="form-control">
        <label>date_naissance</label>
        <input type="date" name="date_naissance" id="date_naissance" value="{{$professeurs->date_naissance}}"class="form-control"></br></br>
        <label for="specialite">specialite</label>
            <select name="specialite" id="specialite">
                <option value="{{$professeurs->specialite}}" selected>{{$professeurs->specialite}}</option>
                <option value="developpement_web">developpement_web</option>
                <option value="BI">BI</option>
                <option value="IA">IA</option>
                <option value="Marketing_digital">Marketing_digital</option>
            </select></br></br>
        
        <label for="appartenant_a_ENSAJ">appartenant_a_ENSAJ</label>
            <select name="appartenant_a_ENSAJ" id="appartenant_a_ENSAJ">
                <option value="{{$professeurs->appartenant_a_ENSAJ}}">{{$professeurs->appartenant_a_ENSAJ}}</option>
                <option value="oui">oui</option>
                <option value="non">non</option>
            </select></br></br>
        <label>Dossier_scientifique</label>
        <input type="file" name="Dossier_scientifique" id="Dossier_scientifique" value="{{$professeurs->Dossier_scientifique}}" class="form-control" accept=".zip,.rar,.7zip" /></br>
        <label>Dossier_Pedagogique</label>
        <input type="file" name="Dossier_Pedagogique" id="Dossier_Pedagogique" value="{{$professeurs->Dossier_Pedagogique}}" class="form-control"  accept=".zip,.rar,.7zip" /></br>
        <label>Dossier_administratif</label>
        <input type="file" name="Dossier_administratif" id="Dossier_administratif" value="{{$professeurs->Dossier_administratif}}" class="form-control" accept=".zip,.rar,.7zip" /></br>
        </br></br>
        <div style="padding-left:50%; width:100px;">
        <input type="submit" value="Save" class="btn btn-success" style="width:100px;"></br></br></br>
        </div>
        
        
        <!-- <input type="submit" value="Update" class="btn btn-success"></br> -->
    </form>
   
  </div>
</div>
@endsection
@stop