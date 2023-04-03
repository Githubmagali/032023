<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{



    public function index(Request $request){
      
        //$productos = Producto::all(); 
      //return view ('productos.index', ['lista'=>$productos]);
   if($request->isMethod('get')){
    echo "Metodo GET";
}

      $productos = Categoria::find(1)->productos()->get();
      return view ('productos.index', ['lista' => $productos]);
    }
    
    public function show($nombre){
        return view('productos.show', ['producto' => $nombre]); 
    }
    public function create(){
        return view('productos.create'); 
    }
    public function store(Request $request){

        $validacion = $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'precio' => 'required'

        ]);

        $producto = new Producto();
        $producto->codigo =$request->input('codigo');
        $producto->descripcion = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->existencia = 0;
        $producto->categoria_id = 1;
        $producto->activo = 1;
        $producto->save();
        return ("Registro guardado!");

    }

public function edit($id){
    $productos = Producto::find($id); //WHERE id=$id
    return view ('productos.edit', ['id'=>$id, 'producto' => $productos]);
}

public function update(Request $request, $id){

    $producto = Producto::find($id); //find hace un WHERE id=$id pero a la clave primaria en este caso $id
    $producto->descripcion = $request->input('nombre');
    $producto->precio= $request->input('precio');
    $producto->save();
    return "Registro modificado!";
}


public function destroy($id)
{
    $producto = Producto::find($id);
    $producto->detele();
    echo "Registro $id eliminado";
}
}  //'producto'INDICE => $nombre VARIABLE
