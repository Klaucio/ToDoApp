<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\projecto;
use App\Models\membro;

class tarefa extends Model
{
    //

    protected $fillable=['projecto_id','titulo','descricao','data_criacao','data_real_entrega','data_entrega_desejada','estado'];

    protected $primaryKey='tarefa_id';
    public $timestamps=false;

    public function projectos(){
        return $this->belongsTo(projecto::class);
    }
    public function membros(){
        return $this->belongsToMany(membro::class);
    }
}
