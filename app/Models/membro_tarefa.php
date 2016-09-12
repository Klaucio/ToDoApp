<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class membro_tarefa extends Model
{
    //
    protected $fillable=['membro_id','tarefa_id'];

    public $timestamps=false;

}
