<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entretien;

class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entretiens = Entretien::all();
        

        return view('index', compact('entretiens'));
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $entretiens = Entretien::all();
    return view('create', compact('entretiens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // dump($request);
         
      /*   request()->validate([

            'nom' =>['required','max:255'],
            'prenom'=>['required'],
            'email'=>['required','max:255'],
            'telephone'=>['required','max:255'],
            'adresse'=>['required','max:255'],
            'date_debut'=>['required'],
            'date_fin'=>['required'],
            'participants' =>['required','max:255'],
            'connaissez_vous_defarcsi'=>['required','max:255'],
            'comment_voyez_vous_defarsci'=>['required','max:255'],
            'presentation'=>['required','max:255'],
            'qu_enttendez_de_defarsci'=>['required','max:255'],
            'atouts'=>['required','max:255'],
            'faiblesses'=>['required','max:255'],
            'maladie_ou_allergie' =>['required','max:255'],
            'objectifs_dans_2ans'=>['required','max:255'],
            'mois_de_formation'=>['required','max:255'],
            'demarrage'=>['required','max:255'],
            'heure_d_arriver'=>['required'],
            'heure_petit_dejeuner'=>['required'],
            'heure_pause'=>['required'],
            'modalite_paiement'=>['required'],

        ]);*/


        $entretiens = new Entretien;
        $entretiens->nom=$request->nom;
        $entretiens->prenom=$request->prenom;
        $entretiens->email=$request->email;
        $entretiens->telephone=$request->telephone;
        $entretiens->addresse=$request->addresse;
        $entretiens->date_debut=$request->date_debut;
        $entretiens->date_fin=$request->date_fin;
        $entretiens->participant=$request->participant;
        $entretiens->connaissez_vous_defarcsi=$request->defarcsi;
        $entretiens->comment_voyez_vous_defarsci=$request->comment_voyez_vous_defarsci;
        $entretiens->presentation=$request->presentation;
        $entretiens->qu_enttendez_de_defarsci=$request->qu_enttendez_de_defarsci;
        $entretiens->atouts=$request->atouts;
        $entretiens->faiblesses=$request->faiblesses;
        $entretiens->maladie_ou_allergie=$request->gridRadios;
        $entretiens->objectifs_dans_2ans=$request->objectifs_dans_2ans;
        $entretiens->mois_de_formation=$request->mois_de_formation;
        $entretiens->demarrage=$request->demarrage;
        $entretiens->heure_d_arriver=$request->heure_d_arriver;
        $entretiens->heure_petit_dejeuner=$request->heure_petit_dejeuner;
        $entretiens->heure_pause=$request->heure_pause;
        $entretiens->modalite_paiement=$request->modalite_paiement;
       //dd($entretiens);
        $entretiens->save();


        $sucess='User Created';
        return redirect()->back()->withSucess($sucess);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entretien = Entretien::find($id);
        return view('show', compact('entretien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entretien $entretien, $id)
    {
        $entretien = Entretien::find($id);
        return view('edit', compact('entretien'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dump($request);
         
      /*   request()->validate([

            'nom' =>['required','max:255'],
            'prenom'=>['required'],
            'email'=>['required','max:255'],
            'telephone'=>['required','max:255'],
            'adresse'=>['required','max:255'],
            'date_debut'=>['required'],
            'date_fin'=>['required'],
            'participants' =>['required','max:255'],
            'connaissez_vous_defarcsi'=>['required','max:255'],
            'comment_voyez_vous_defarsci'=>['required','max:255'],
            'presentation'=>['required','max:255'],
            'qu_enttendez_de_defarsci'=>['required','max:255'],
            'atouts'=>['required','max:255'],
            'faiblesses'=>['required','max:255'],
            'maladie_ou_allergie' =>['required','max:255'],
            'objectifs_dans_2ans'=>['required','max:255'],
            'mois_de_formation'=>['required','max:255'],
            'demarrage'=>['required','max:255'],
            'heure_d_arriver'=>['required'],
            'heure_petit_dejeuner'=>['required'],
            'heure_pause'=>['required'],
            'modalite_paiement'=>['required'],

        ]);*/


        $entretiens = Entretien::find($id);
        $entretiens->nom=$request->nom;
        $entretiens->prenom=$request->prenom;
        $entretiens->email=$request->email;
        $entretiens->telephone=$request->telephone;
        $entretiens->addresse=$request->addresse;
        $entretiens->date_debut=$request->date_debut;
        $entretiens->date_fin=$request->date_fin;
        $entretiens->participant=$request->participant;
        $entretiens->connaissez_vous_defarcsi=$request->defarcsi;
        $entretiens->comment_voyez_vous_defarsci=$request->comment_voyez_vous_defarsci;
        $entretiens->presentation=$request->presentation;
        $entretiens->qu_enttendez_de_defarsci=$request->qu_enttendez_de_defarsci;
        $entretiens->atouts=$request->atouts;
        $entretiens->faiblesses=$request->faiblesses;
        $entretiens->maladie_ou_allergie=$request->gridRadios;
        $entretiens->objectifs_dans_2ans=$request->objectifs_dans_2ans;
        $entretiens->mois_de_formation=$request->mois_de_formation;
        $entretiens->demarrage=$request->demarrage;
        $entretiens->heure_d_arriver=$request->heure_d_arriver;
        $entretiens->heure_petit_dejeuner=$request->heure_petit_dejeuner;
        $entretiens->heure_pause=$request->heure_pause;
        $entretiens->modalite_paiement=$request->modalite_paiement;
       //dd($entretiens);
        $entretiens->update();


        $sucess='User Updated';
        return redirect()->back()->withSucess($sucess);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entretien $entretien,$id)
    {
         $entretien = Entretien::find($id);
       $entretien->delete();

        $sucess='User Deleted';
    return redirect()->back()->withSucess($sucess);
    }
}
