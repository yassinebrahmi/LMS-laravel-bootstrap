<?php
namespace App\Http\Controllers;
use App\RessourceCoworking;
use Illuminate\Http\Request;
class RCoworkingController extends Controller
{
    public function index()
    {
        $coworking = new RessourceCoworking();
        return view('ressource.list',['coworkings'=>$coworking->all(),'menu'=>'Coworking','smenu'=>'RESSOURCES']);
    }
    public function create()
    {

        return view('ressource.add',['menu'=>'RESSOURCES','smenu'=>'NOUVELLE RESSOURCE']);
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
