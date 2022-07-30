<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $demandes = new Demande();


        return view('admin.listdemande',['demandes'=>$demandes->all(),'menu'=>'Coworking','smenu'=>'DEMANDE']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {





    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demande = new Demande();
        $demande->nomprenom = $request->Input('nomprenom');
        $demande->email = $request->Input('adrmail');
        $demande->date_debut = $request->Input('date_debut');
        $demande->nbjours = $request->Input('nbjours');
        $demande->nbpersonnes = $request->Input('nbpersonnes');
        $demande->message = $request->Input('message');
        $demande->tel = $request->Input('tel');
        $demande->salle = $request->Input('salle');

$res="";

 if($request->input('ressources')){
        foreach ($request->input('ressources') as $ressource){
          $res.=$ressource.'+';
    }
    }

  $demande->ressources = $res;


  if ($demande->save()==true)
                return response()->json(['status' => 'success', 'msg' => 'Votre demande a été enregistrée avec succès...']);
            else
                return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la création de votre demande']);




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demande = new Demande();
        $res = $demande->find($id);
        return view('admin.detaildemande',compact('res'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

     $demande = Demande::Find($request->input('idd'));
        if ($demande->delete())
                        return response()->json(['status' => 'success', 'msg' => 'Demande supprimée avec succès...']);
                    else
                        return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la suppression de la demande']);

    }
}
