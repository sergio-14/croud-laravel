<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['estudiante']=Estudiante::paginate(8);
        return view('Estudiante.index',$datos );
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Estudiante.create');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg,gif',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'LA foto es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        //$datosEstudiante = $request->all();
        $datosEstudiante = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosEstudiante['Foto']=$request->file('Foto')->store('uploads','public');

        }
        Estudiante::insert($datosEstudiante);

         //return response()->json($datosEstudiante);

         return redirect('Estudiante')->with('mensaje','Estudiante agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        return view('Estudiante.edit', compact('estudiante') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg,gif'];
            $mensaje=['Foto.required'=>'LA foto es requerida'];
        }

        $this->validate($request,$campos,$mensaje);
        



        $datosEstudiante = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $estudiante=Estudiante::findOrFail($id);

            Storage::delete('public/'.$estudiante->Foto);

            $datosEstudiante['Foto']=$request->file('Foto')->store('uploads','public');

        }


        Estudiante::where('id','=',$id)->update($datosEstudiante);

        $estudiante=Estudiante::findOrFail($id);
        //return view('Estudiante.edit', compact('estudiante') );

        return redirect('Estudiante')->with('mensaje','La informacion a sido Editada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $estudiante=Estudiante::findOrFail($id);
        if(Storage::delete('public/'.$estudiante->Foto)){

            Estudiante::destroy($id);
        }

        
        //return redirect('Estudiante');
        return redirect('Estudiante')->with('mensaje','El Estudiante a sido Eliminado');
    }
}
