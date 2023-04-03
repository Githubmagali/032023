<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;


    protected $table ="productos";

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    /*protected $primaryKey ="producto_id"; si tu primary key s ellama ID no es necesario colo car esto
    public $incrementing = false; para que no sea autoincremental, osea que no se le sume 1 al campo de forma automatica
    protected $keyType = 'string'; si colocaste estas campos personalizados co notros nombres
    public $timestamps = false; deshabilitamos los campos para que no los incerte

    const CREATED_AT ='fecha_alta';si tenemos campos  los queremos incorporar con otros nombres
    const UPDATED_AT ='fecha_modifica'; si las marcas de tiempo tienen otro nombre diferente al predefinido que nos genera laravel
    
    
    el ORM hace la tabla en plural para conectarse a esta tabla
    el ORM toma de forma definida que el campo se va a llamar ID, el la primary Key autoincremetal
    si el ID no esta definido como prmary key se define como  protected $primaryKey ="producto_id";*/
}
