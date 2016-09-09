<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\projecto;
use App\Models\membro;

class tarefa extends Eloquent
{
    //


    protected $primaryKey='tarefa_id';

    public function projectos(){
        return $this->belongsTo(projecto::class);
    }
    public function membros(){
        return $this->belongsToMany(membro::class);
    }
}
