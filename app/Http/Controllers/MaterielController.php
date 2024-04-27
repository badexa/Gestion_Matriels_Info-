<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
  

class MaterielController extends Controller
{


    

    public function datax()
    {

 
        return view('datax');
    }
 


    public function index()
    {
        return view('home');
    }

    public function indix()
    {
        return view('about');
    } 

  

    

    public function indrx()
    {
        return view('contact');
    }

    public function indnx()
    {
        return view('liste');
    }

    public function indpx()
    {
        return view('ajouter');
    }


    

  
  

    public function indxx(Request $request)
    {
        $request->validate([
            'Article' => 'required',
            'Qu' => 'required',
            'Inv' => 'required',
            'Date' => 'required',
            'Marque' => 'required',
            'Modéle' => 'required',
            'Processeur' => 'required',
            'Vitesse' => 'required',
            'Ram' => 'required',
            'Format' => 'required',
            'Programme' => 'required',
            'Projet' => 'required',
            'Etat' => 'required',
            'Etablissement' => 'required',
          
           
        ]);
        
        $materiel = new Materiel();
        $materiel->Article = $request->Article;
        $materiel->Qu = $request->Qu;
        $materiel->Inv = $request->Inv;
        $materiel->Date = $request->Date;
        $materiel->Marque = $request->Marque;
        $materiel->Modéle = $request->Modéle;
        $materiel->Processeur = $request->Processeur;
        $materiel->Vitesse = $request->Vitesse;
        $materiel->Ram = $request->Ram;
        $materiel->Format = $request->Format;
        $materiel->Programme = $request->Programme;
        $materiel->Projet = $request->Projet;
        $materiel->Etat = $request->Etat;
        $materiel->Etablissement = $request->Etablissement;
        $materiel->save();

        return redirect('/liste')->with('status','Materiel Bureau Ajouter Avec Succés');
    }

    public function data()
    {
        $data= Materiel::paginate(9);
        return view('liste',compact('data') );
    }

    // public function update($id)
    // {
    //     $data= Materiel::find($id);
    //     return view('update',compact('data'));
    // }

    public function edit(string $id)
    {
        $data = Materiel::findOrFail($id);
 
        return view('update', compact('data'));
    }
 


    // public function updatex(Request $request)
    // {
    //     $request->validate([
    //         'Article' => 'required',
    //         'Qu' => 'required',
    //         'Inv' => 'required',
    //         'Date' => 'required',
    //         'Marque' => 'required',
    //         'Modéle' => 'required',
    //         'Processeur' => 'required',
    //         'Vitesse' => 'required',
    //         'Ram' => 'required',
    //         'Format' => 'required',
    //         'Programme' => 'required',
    //         'Projet' => 'required',
    //         'Etat' => 'required',
    //         'Etablissement' => 'required',
          
           
    //     ]);
        
    //     $materiel = Materiel::find($request->id);
    //     $materiel->Article = $request->Article;
    //     $materiel->Qu = $request->Qu;
    //     $materiel->Inv = $request->Inv;
    //     $materiel->Date = $request->Date;
    //     $materiel->Marque = $request->Marque;
    //     $materiel->Modéle = $request->Modéle;
    //     $materiel->Processeur = $request->Processeur;
    //     $materiel->Vitesse = $request->Vitesse;
    //     $materiel->Ram = $request->Ram;
    //     $materiel->Format = $request->Format;
    //     $materiel->Programme = $request->Programme;
    //     $materiel->Projet = $request->Projet;
    //     $materiel->Etat = $request->Etat;
    //     $materiel->Etablissement = $request->Etablissement;
    //     $materiel->update();
    //     return redirect('/liste')->with('status','Materiel Bureau Modifier Avec Succés');
    // }

    public function update(Request $request, string $id)
    {
        $product = Materiel::findOrFail($id);
 
        $product->update($request->all());
 
        return redirect()->route('liste')->with('success', 'product updated successfully');
    }

    public function delete($id)
    {
        $materiel = Materiel::find($id);
        $materiel->delete();
        return redirect('/update/traitement/{id}')->with('status','Materiel Bureau Supprimer Avec Succés');
    }





   
      
        public function getStandard(Request $request)
        {
            if ($request->ajax()) {
                $standards = Materiel::select('Etablissement')
                    ->groupBy('Etablissement')
                    ->get();
     
                return response()->json($standards);
            }
        }
     
            
     
        public function records(Request $request)
        {
            if ($request->ajax()) {
     
                if (request('std') ) {
                    $materiels = Materiel::where('Etablissement', '=', request('std'))
                        ->latest()
                        ->get();
                } else {
                    $materiels = Materiel::when(request('std'), function ($query) {
                        $query->where('Etablissement', '=', request('std'));
                    })
                       
                        ->latest()
                        ->get();
                }
     
                return response()->json([
                    'materiels' => $materiels
                ]);
            } else {
                abort(403);
            }
        }
    }








   

 
   


