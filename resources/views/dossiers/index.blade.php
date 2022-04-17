@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Dossier')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Dossiers</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/dossier/create') }}" class="btn btn-success btn-sm" title="Add New Dossier">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>nom_proprietaire</th>
                                        <th>nom_dossier</th>
                                        <th>etat_dossier</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dossiers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom_proprietaire }}</td>
                                        <td>{{ $item->nom_dossier }}</td>
                                        <td>{{ $item->etat_dossier }}</td>
 
                                        <td>
                                            <a href="{{ url('/dossier/' . $item->id) }}" title="View Dossier"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/dossier/' . $item->id . '/edit') }}" title="Edit Dossier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/dossier' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Dossier" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
