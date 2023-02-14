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
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return redirect('/entretiens')->with('success', 'Entretien créer avec succèss');
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
    public function edit($id)
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


        return redirect('/entretiens')->with('success', 'Entretien mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $entretien = Entretien::findOrFail($id);
    $entretien->delete();

    return redirect('/entretiens')->with('success', 'Entretien supprimer avec succèss');
    }
}
