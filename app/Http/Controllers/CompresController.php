<?php

namespace App\Http\Controllers;

use App\Compre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Esdeveniment;

use UxWeb\SweetAlert\SweetAlert;

use App\Providers\SweetAlertServiceProvider;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class CompresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $compre = new Compre;
        $compre->user_id = Auth::user()->id;
        $compre->esdeveniment_id = $request->esdeveniment_id;
        $compre->save();


        $compre->esdeveniment_id;
        $esdeveniment = Esdeveniment::findOrFail($compre->esdeveniment_id);
  /*      $esdeveniment->entradas--;
        $esdeveniment->save();

        $esdeveniment->id;*/




if ($esdeveniment->entradas > 0) {
    $esdeveniment->entradas--;
    $esdeveniment->save();
    $request->session()->flash('status', 'La compra se ha realizado correctamente');


} else {
    $request->session()->flash('status', 'Lo sentimos, no quedan entradas.');
}
        $esdeveniment->id;

 return view("esdeveniments.usuarios_show", compact("esdeveniment"));
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
