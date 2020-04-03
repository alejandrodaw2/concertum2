<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esdeveniment extends Model
{
    //

    protected $fillable = [
        'user_id','titol','artista','descripcion','diaHora','lloc','aforament',
        'entradas','path',

    ];
    /*
        public function totalDonadoPorPorjecte(){
            $total=0;
            foreach (Donacio::all() as $donacio){
                if($this->id == $donacio->project_id){
                    $total+=$donacio->amount;
                }
            }
            return $total;
        }

*/



}
