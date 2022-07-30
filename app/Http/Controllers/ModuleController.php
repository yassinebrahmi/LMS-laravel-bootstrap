<?php

namespace App\Http\Controllers;

use App\Module;
use App\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules1 = new Module();
        $modules = $modules1->all();
        $menu = 'Formation';  $smenu = 'Module';
        return view('module.list',compact('modules','menu','smenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $themes = Catalogue::all();
        $menu="Formation";
        $smenu="MODULE";
        return view('module.add',compact('themes','menu','smenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new Module();
        $module->image = $request->input('image');
        $module->catalogue_id = $request->input('catalogue');
        $module->name = $request->input('name');
        $module->description = $request->input('description');
        ($request->input('isactive')==true) ?  $module->isactive = 1 : $module->isactive = 0;

        if ($module->save())
            return response()->json(['status' => 'success', 'msg' => 'Module créé avec succès']);
        else
            return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la création du Module']);

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
        $module = Module::find($id);
        $themes = Catalogue::all();
        return view('module.edit',['module'=>$module,'themes'=>$themes]);
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
        $module1 = new Module();
        $module =  $module1->find($request->input('idm'));
        $module->image = $request->input('image');
        $module->catalogue_id = $request->input('catalogue');
        $module->name = $request->input('name');
        $module->description = $request->input('description');
        ($request->input('isactive')==true) ?  $module->isactive = 1 : $module->isactive = 0;

        if ($module->update())
            return response()->json(['status' => 'success', 'msg' => 'Module créé avec succès']);
        else
            return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la création du Module']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  destroy(Request $request)
    {
        $module = Module::find($request->input('idm'));
        if ($module->delete())
            return response()->json(['status' => 'success', 'msg' => 'Module supprimé avec succès']);
        else
            return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de la suppression du Module']);
    }


        public function uploadimage(Request $request)
    {

        $filenameWithExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();

        if ($request->file('file')->move(Storage::disk('modules')->getDriver()->getAdapter()->getPathPrefix() . Auth::user()->username, $filenameWithExt))
            return response()->json(['status' => 'success', 'msg' => $filenameWithExt]);
        else
            return response()->json(['status' => 'failed', 'msg' => '']);

    }


}
