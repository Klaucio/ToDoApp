<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\membro;
use App\Models\tarefa;

class projecto extends Model
{
    //
    protected $fillable=['designacao','data_inicio','estado','membro_id'];
    protected $primaryKey='projecto_id';
    public $timestamps=false;

    public function membros(){
        return $this->belongsTo(membro::class);
    }
    public function tarefas(){
        return $this->hasMany(tarefa::class);
    }
}
