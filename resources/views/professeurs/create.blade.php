<!-- @extends('professeurs.layout')
@section('content') -->
@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Profile')
@section('content')
 
<div class="card">
  <div class="card-header">Professeurs Page</div>
  <div class="card-body">
      
      <form action="{{ url('professeur') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group mb-3">
        <label>Image</label></br>
        <input type="file" name="image" id="image" accept=".png,.jpeg,.gif,.jpg" class="form-control" ></br>
        </div>
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom" class="form-control"></br>
        <label>E-mail</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>CIN</label>
        <input type="text" name="cin" id="cin" class="form-control"></br>
        <label>N Telephone</label>
        <input type="telephone" name="telephone" id="telephone" class="form-control">
        <label>Date de recrutement</label>
        <input type="date" name="date_recrutement" id="date_recrutement" class="form-control">
        <label>Date Naissance</label>
        <input type="date" name="date_naissance" id="date_naissance" class="form-control">
        <label for="specialite">Specialite</label>
            <select name="specialite" id="specialite">
                <option value="developpement_web">developpement_web</option>
                <option value="BI">BI</option>
                <option value="IA">IA</option>
                <option value="Marketing_digital">Marketing_digital</option>
            </select></br></br>
        
        <label for="appartenant_a_ENSAJ">appartenant_a_ENSAJ</label>
            <select name="appartenant_a_ENSAJ" id="appartenant_a_ENSAJ">
                <option value="oui">oui</option>
                <option value="non">non</option>
            </select></br></br>
        <label>Dossier Scientifique</label>
        <input type="file" name="Dossier_scientifique" id="Dossier_scientifique" class="form-control" accept=".zip,.rar,.7zip" /></br>
        <label>Dossier Pedagogique</label></br>
        <input type="file" name="Dossier_Pedagogique" id="Dossier_Pedagogique" class="form-control" accept=".zip,.rar,.7zip" /></br>
        <label>Dossier Administratif</label></br>
        <input type="file" name="Dossier_administratif" id="Dossier_administratif" class="form-control" accept=".zip,.rar,.7zip" /></br>
        <div style="padding-left:50%; width:100px;">
        <input type="submit" value="Save" class="btn btn-success" style="padding-left:50%; width:100px;"></br>
        </div>
    </form>
   
  </div>
</div>
@endsection
@stop