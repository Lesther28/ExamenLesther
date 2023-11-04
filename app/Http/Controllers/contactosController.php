<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Directorio;

class contactosController extends Controller
{
    public function index(){
        $directorio = directorio::all();
        return view('directorio', compact ('directorio'));
    }

    public function buscar(){
        
        return view('buscar');
    }

    public function ver($codigoEntrada){
        $directorios = directorio::find($codigoEntrada);
        $contactos = contacto::find($codigoEntrada);
        return view('vercontactos', compact('directorios','contactos'));
    }

    public function eliminar ($codigoEntrada){
        $directoriou = directorio::find($codigoEntrada);
        return view('eliminar', compact('directoriou'));
    }

    public function destroy ($id){
        $directoriou = directorio::find($id);
        $directoriou->delete();

        return redirect()->route('directorio.inicio');
    }

    public function agregar(){
        
        return view('crearEntrada');
    }

    public function store(Request $request){
    $nvodirectorio = new directorio();
    $nvodirectorio->codigoEntrada = $request->input('codigo');
    $nvodirectorio->nombre = $request->input('nombre');
    $nvodirectorio->apellido = $request->input('apellido');
    $nvodirectorio->correo = $request->input('correo');
    $nvodirectorio->telefono = $request->input('telefono');

    $nvodirectorio->save();
    return redirect()->route('directorio.inicio');
    }
}
