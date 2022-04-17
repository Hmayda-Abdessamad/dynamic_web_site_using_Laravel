<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;
use Illuminate\Support\Facades\Auth;

class ProfesseurController extends Controller
{ 
       public function index()
       {
           $professeurs = Professeur::where('id', Auth::user()->id)->get();
           return view ('professeurs.index')->with('professeurs', $professeurs);
       }
    
       
       public function create()
       {
           return view('professeurs.create');
       }
    
      
       public function store(Request $request)
       {   
           $input = $request->all();
           Professeur::create($input);
           $professeur=new Professeur;
           if($request->hasFile('image')){
               $file=$request->file('image');
               $extention=$file->getClientOriginalExtension();
               $filename=time().'.'.$extention;
               $file->move('images/professeurs',$filename);
               $professeur->image=$filename;
           }
           $professeur->save();

           return redirect('professeur')->with('flash_message', 'Professeur Addedd!');  
       }
    
       
       public function show($id)
       {
           $professeurs = Professeur::find($id);
           return view('professeurs.show')->with('professeurs', $professeurs);
       }
    
       
       public function edit($id)
       {
           $professeurs = Professeur::find($id);
           return view('professeurs.edit')->with('professeurs', $professeurs);
       }
    
     
       public function update(Request $request, $id)
       {
           $professeur = Professeur::find($id);
           $input = $request->all();
           $professeur->update($input);
           return redirect('professeur')->with('flash_message', 'Professeur Updated!');  
       }
    
      
       public function destroy($id)
       {
           Professeur::destroy($id);
           return redirect('professeur')->with('flash_message', 'Professeur deleted!');  
       }
   }
  