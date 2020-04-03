<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compre extends Model
{
    //

    protected $fillable = [
        'user_id','esdeveniment_id','preu',
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
