<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.login');
    }


    public function register(Request $request){

        $user = new User();
        $count = $user->where('email', $request->input('email'))->count();




        if ($count<>0)
            return response()->json(['status' => 'warning', 'msg' => 'Erreur : Compte exist déja']);
        else {
            $user->nom = $request->input('nom');
            $user->prenom = $request->input('prenom');
            $user->email = $request->input('email');
            $user->password =  Hash::make($request->input('password1')) ;
            if ($user->save())
                return response()->json(['status' => 'success', 'msg' => 'Votre inscription a été enregistrée avec succès...']);
            else
                return response()->json(['status' => 'danger', 'msg' => 'Erreur lors de l\'inscription de votre demande']);
        }



    }
}
