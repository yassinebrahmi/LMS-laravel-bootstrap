<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        $menu='Formations';
        $smenu='List des formations';
        return  view('formation.list',compact('formations','menu','smenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        $formations = Formation::all();
        $menu='Formation';
        $smenu = 'Nouvelle Formation';
        return  view('formation.add',compact('modules','formations','menu','smenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new Formation();
        $module->description = $request->input('description');
        $module->titre = $request->input('titre');
        $module->formateur = $request->input('formateur');
        $module->nbheurs = $request->input('nbheurs');
        $module->niveau = $request->input('niveau');
        $module->langue = $request->input('langue');
        $module->prix = $request->input('prix');
        $module->image = "";
        $module->video = "";
        $module->prerequis = $request->input('prerequis');
        $module->created_by = Auth::User()->username;


        if ($module->save())
            return response()->json(['status' => 'success', 'msg' => 'Formation créé avec succès']);
        else
            return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la création du formation']);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
