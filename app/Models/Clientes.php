<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiares extends Model
{
    protected $table = 'familiares';


    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'telefono',
        'f_nacimiento',
        'url_imagen',
        'id_paciente',
        
    ];
}