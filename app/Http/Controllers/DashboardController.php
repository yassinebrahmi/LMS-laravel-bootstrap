<?php

namespace App\Http\Controllers;

use App\Dashboard;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\str;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = array();
        $end   = strtotime( date('Y-m-d') );
        $first =  strtotime("-1 month");
        $data=1;
        while( $first < $end  ) {
$data = $data +1;
            $dates[] = date( 'd/m/Y', $first );
            $first = strtotime( '+1 day', $first );
        }

        return view('admin.dashboard',['menu'=>'Dashboard','smenu'=>'Coworking Espace','dates'=>json_encode($dates),'data'=>json_encode($data, JSON_NUMERIC_CHECK)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {


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
