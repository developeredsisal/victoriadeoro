<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use ZipArchive;

class LibroController extends Controller
{
    public function create()
    {
        $categorias = DB::table('categoria')->select('id', 'nombre_categoria')->orderByDesc('id')->get();
        return view('subir_recurso', ['categorias' => $categorias]);
    }
    public function registrar(Request $request)
    {
        $libro = new Libro();
        $nombre_recurso = $request->input('nombre');
        $libro->nombre = $nombre_recurso;
        $libro->archivo = "index.html";
        $libro->categoria_id = $request->input('category');
        if ($request->hasFile("imagen")) {
            $image = $request->file('imagen');
            $libro->imagen = $image->getClientOriginalName(); 
        }
        $libro->save();
        //Subir Imagen al servior
        $image->move(public_path('libros/' . $libro->id), $image->getClientOriginalName());
        if ($request->hasFile("archivo")) {
            $archivo = $request->file("archivo");
            if ($_FILES["archivo"]["name"]) {
                $nombre = $_FILES["archivo"]["name"];
                $ruta = $_FILES["archivo"]["tmp_name"];
                $tipo = $_FILES["archivo"]["type"];
                $zip = new ZipArchive();
                if ($zip->open($ruta) === true) {
                    $extraido = $zip->extractTo(public_path('libros/' . $libro->id));
                    $zip->close();
                }
            }
        }
        return redirect(route('actividades'));
    }
    
    public function fonemas()
    {
        $libros = DB::table('libro')->join('categoria', 'libro.categoria_id', '=', 'categoria.id')
                                    ->select('libro.id AS id', 'libro.nombre AS nombre', 'libro.archivo AS archivo', 'libro.categoria_id AS categoria_id', 'libro.imagen AS imagen', 'categoria.nombre_categoria AS categoria')
                                    ->where('libro.categoria_id', 1)
                                    ->orderBy('id')->get();
        return view('fonemas', ['libros' => $libros]);
    }
    
    public function ortografia()
    {
        $libros = DB::table('libro')->join('categoria', 'libro.categoria_id', '=', 'categoria.id')
                                    ->select('libro.id AS id', 'libro.nombre AS nombre', 'libro.archivo AS archivo', 'libro.categoria_id AS categoria_id', 'libro.imagen AS imagen', 'categoria.nombre_categoria AS categoria')
                                    ->where('libro.categoria_id', 2)
                                    ->orderBy('id')->get();
        return view('ortografia', ['libros' => $libros]);
    }
    
    public function lecturas()
    {
        $libros = DB::table('libro')->join('categoria', 'libro.categoria_id', '=', 'categoria.id')
                                    ->select('libro.id AS id', 'libro.nombre AS nombre', 'libro.archivo AS archivo', 'libro.categoria_id AS categoria_id', 'libro.imagen AS imagen', 'categoria.nombre_categoria AS categoria')
                                    ->where('libro.categoria_id', 3)
                                    ->orderBy('id')->get();
        return view('lecturas', ['libros' => $libros]);
    }
    
    public function actividades()
    {
        $libros = DB::table('libro')->join('categoria', 'libro.categoria_id', '=', 'categoria.id')
                                    ->select('libro.id AS id', 'libro.nombre AS nombre', 'libro.archivo AS archivo', 'libro.categoria_id AS categoria_id', 'libro.imagen AS imagen', 'categoria.nombre_categoria AS categoria')
                                    ->where('libro.categoria_id', 4)
                                    ->orderBy('id')->get();
        return view('actividades', ['libros' => $libros]);
    }
    
    public function actividad($id)
    {
        $libro = DB::table('libro')->where('id', '=', $id)->get()->toArray();
        return view('ver_actividad', ['libro' => $libro]);
    }
    public function envedar($id)
    {
        $libro = DB::table('libro')->where('id', '=', $id)->get()->toArray();
        return view('ver_envedar', ['libro' => $libro]);
    }

}