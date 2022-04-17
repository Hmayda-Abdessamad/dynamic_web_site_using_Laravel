@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Profile')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Visualisation du profile Professeur(edit,show,delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/professeur/create') }}" class="btn btn-success btn-sm" title="Add New Professeur">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                 <thead> <!-- nom prenom email cin image telephone date_recrutement date_naissance specialite appartenant_a_ENSAJ Dossier_scientifique Dossier_Pedagogique Dossier_administratif -->
                                    <tr>
                                        <th>#</th>
                                        <th>nom</th>
                                        <th>prenom</th>
                                        <th>email</th>
                                        <th>cin</th>
                                        <th>image</th>
                                        <th>telephone</th>
                                        <th>date_recrutement</th>
                                        <th>date_naissance</th>
                                        <th>specialite</th>
                                        <th>appartenant_a_ENSAJ</th>
                                        <th>Dossier_scientifique</th>
                                        <th>Dossier_Pedagogique</th>
                                        <th>Dossier_administratif</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($professeurs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->cin }}</td>
                                        <td>
                                            <img src="{{ asset('images/professeurs/'.$item->image) }}" width="72px" height="70px" alt="">
                                        </td>
                                        <td>{{ $item->telephone }}</td>
                                        <td>{{ $item->date_recrutement }}</td>
                                        <td>{{ $item->date_naissance }}</td>
                                        <td>{{ $item->specialite }}</td>
                                        <td>{{ $item->appartenant_a_ENSAJ }}</td>
                                        <td>{{ $item->Dossier_scientifique }}</td>
                                        <td>{{ $item->Dossier_Pedagogique }}</td>
                                        <td>{{ $item->Dossier_administratif }}</td>
                                        
 
                                        <td>
                                            <a href="{{ url('/professeur/' . $item->id) }}" title="View Professeur"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a></br></br>
                                            <a href="{{ url('/professeur/' . $item->id . '/edit') }}" title="Edit Professeur"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a></br></br>
 
                                            <form method="POST" action="{{ url('/professeur' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Professeur" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop