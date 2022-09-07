<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $alumnos = Alumno::paginate(4);
       return view('alumnos.index',compact(
        'alumnos'));  
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'nombre' =>'required',
            'apellido' =>'required',
            'edad' =>'required',
            'ci' =>'required',
            'telefono' =>'required',
            'direccion' =>'required',
            'gmail' =>'required|unique:alumno,gmail',
            'profesion' =>'required',
            'genero' =>'required',
            'fechanac' =>'required'
        ];
            $mensaje =[
                'required' =>'El atributo es requerido',
                'nombre.require' =>'El nombre es requerido',
            ];

        $this->validate($required,$rules,$mensaje);
        $alumnos= request()->except('_token');
        Alumno::insert($alumnos);
        return redirect (route('alumnos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos=Alumno::findorFail($id);
        return view ('alumnos.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos=Alumno::findorFail($id);
        return view ('alumnos.edit', compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $alumnos=request()->except(['_token','_method']);
        Alumno::where('id','=',$id)->update($alumnos);
        return redirect ('alumnos');
    }

    /**
     * Remove the specified resource from storage.
     * 
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        return redirect('alumnos');
    }
}
