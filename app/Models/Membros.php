<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membros extends Model
{
    protected $table = 'membros';
    protected $fillable = ["membros", "nome", "idade", "genero", "profissão"];
}
