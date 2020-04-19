<?php

namespace App\Http\Controllers;

use App\Esdeveniment;
use App\Compre;
use UxWeb\SweetAlert\SweetAlert;

use App\Providers\SweetAlertServiceProvider;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class EsdevenimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$esdeveniments=Esdeveniment::where('entradas', '>',0)->get();
       // $esdeveniments=Esdeveniment::where('diaHora', '>',Carbon::today())->get();

        $esdeveniments=Esdeveniment::where('entradas', '>',0)
            ->where('diaHora', '>',Carbon::today())->get();


    /*  $callbacks2 = \DB::table('callbacks')
          ->where('datetime', '>', Carbon::today())
          ->get();*/

        //$compres=Compre::all();




        $user=Auth::user();
if($user->role=='usuario'){
    return view("esdeveniments.usuarios_index",compact("esdeveniments"));


}else if($user->role=='manager'){
    return view("esdeveniments.index",compact("esdeveniments"));

}



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $now= Carbon::now();
        return view("esdeveniments.create" ,compact("now"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



        $esdeveniment=new Esdeveniment;
        $esdeveniment->user_id=Auth::user()->id;
        $esdeveniment->titol=$request->titol;
        $esdeveniment->artista=$request->artista;
        $esdeveniment->descripcion=$request->descripcion;
        $esdeveniment->diaHora=$request->diaHora;
        $esdeveniment->lloc=$request->lloc;
        $esdeveniment->aforament=$request->aforament;
        $esdeveniment->entradas=$request->aforament;

        if($request->file('path') != null) {
            if ($request->file('path')->isValid()) {
                $random = random_int(100, 999);

                $archivoFoto=$request->file('path');//Request del archivo
                $nombreImagen=$archivoFoto->getClientOriginalName();//Coge el nombre del archivo
                $archivoFoto->move('images',$random.$nombreImagen);//Sube el archivo al servidor y lo guarda, añade un número random delante

                $esdeveniment->path="images/".$random.$nombreImagen;
            }else{
                Log::warning("No se ha subido la imagen.");
            }
        }



        $esdeveniment->save();

        $esdeveniment->id;
        // Log::info('Projecte creat con el id : '.$projecte->id);
        return view("esdeveniments.show",compact("esdeveniment"));
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
        $esdeveniment=Esdeveniment::findOrFail($id);
        $user=Auth::user();
if($user->role=='usuario'){
    return view("esdeveniments.usuarios_show",compact("esdeveniment"));


}else if($user->role=='manager'){
    return view("esdeveniments.show",compact("esdeveniment"));

}



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
        $esdeveniment=Esdeveniment::findOrFail($id);
        return view("esdeveniments.edit",compact("esdeveniment"));
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
        $esdeveniment=Esdeveniment::findOrFail($id);
        $esdeveniment->update($request->all());
        return redirect("/esdeveniments"); // /productos" esta es la vista de index

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $esdeveniment=Esdeveniment::findOrFail($id);
           $esdeveniment->delete();
           alert('Se ha borrado correctamente');
            return redirect("/esdeveniments");





    }

}
