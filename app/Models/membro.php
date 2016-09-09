<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\projecto;
use App\Models\tarefa;
class membro extends Model
{
    //
    protected $fillable=['nome','idade','sexo','departamento','cargo','endereco','email','telefone','grau'];
    public $timestamps=false;
    protected $primaryKey='membro_id';

    public function projectos(){
        return $this->hasMany(projeto::class);
    }

    public function tarefas(){
        return $this->belongsToMany(tarefa::class);
    }
}
