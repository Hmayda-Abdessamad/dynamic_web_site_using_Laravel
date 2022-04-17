<?php

namespace App\Http\Controllers;
use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DossierController extends Controller
{
    
    public function index()
    {
        $dossiers = Dossier::where('nom_proprietaire', Auth::user()->name)->get();
        return view ('dossiers.index')->with('dossiers', $dossiers);
    }
 
    
    public function create()
    {
        return view('dossiers.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Dossier::create($input);
        return redirect('dossier')->with('flash_message', 'Dossier Addedd!');  
    }
 
    
    public function show($id)
    {
        $dossier = Dossier::find($id);
        return view('dossiers.show')->with('dossiers', $dossier);
    }
 
    
    public function edit($id)
    {
        $dossier = Dossier::find($id);
        return view('dossiers.edit')->with('dossiers', $dossier);
    }
 
  
    public function update(Request $request, $id)
    {
        $dossier = Dossier::find($id);
        $input = $request->all();
        $dossier->update($input);
        return redirect('dossier')->with('flash_message', 'dossier Updated!');  
    }
 
   
    public function destroy($id)
    {
        Dossier::destroy($id);
        return redirect('dossier')->with('flash_message', 'Dossier deleted!');  
    }

}
