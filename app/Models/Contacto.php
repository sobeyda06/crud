<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table= 'contactos';
    protected $primarykey= 'id_medidor';
    protected $fillable= ['Nombre', 'Cedula', 'direccion'];
    protected $guarded=[];
    public $timestamps=false;
    
}
