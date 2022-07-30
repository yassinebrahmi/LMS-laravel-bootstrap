<?php

namespace App\Http\Controllers;

use App\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Catalogue::all();
        return view('catalogue.list',['themes'=>$themes,'menu'=>'Formation','smenu'=>'Catalogue']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogue.add',['menu'=>'Catalogue','smenu'=>'Nouveau Catalogue']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theme = new Catalogue();

        $theme->nomtheme = $request->input('titre');
        $theme->description = $request->input('description');
        ($request->input('isactive')==true) ?  $theme->isactive = 1 : $theme->isactive = 0;
        if ($theme->save())
            return response()->json(['status' => 'success', 'msg' => 'Thème créé avec succès']);
        else
            return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la création du Thème']);

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
        $catalogue = Catalogue::find($id);

        return view('catalogue.edit',compact('catalogue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $theme1 = new Catalogue();

        $theme = $theme1->find($request->input('idt'));

        $theme->nomtheme = $request->input('titre');
        $theme->description = $request->input('description');
        ($request->input('isactive')==true) ?  $theme->isactive = 1 : $theme->isactive = 0;

        if ($theme->update())
            return response()->json(['status' => 'success', 'msg' => 'Catalogue modifié avec succès']);
        else
            return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la modification du Catalogue']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $theme = Catalogue::find($request->input('idt'));
        if ($theme->delete())
            return response()->json(['status' => 'success', 'msg' => 'Catalogue supprimé avec succès']);
        else
            return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la suppression du Catalogue']);
    }
}
