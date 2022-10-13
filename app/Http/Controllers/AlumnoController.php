<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Flash;
use App\Models\Curso;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $nombre = $request->get('buscarpor');
        $alumnos = Alumno::where('nombre','like',"%$nombre%")->paginate(4);
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
        $cursos =Curso::pluck('nombre','id');
        return view('alumnos.create',compact('cursos'));
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
            'nombre' => 'required',
             'apellido' => 'required|alpha',
             'edad' => 'required', 
             'ci' => 'required |numeric', 
             'telefono' => 'required |max:10', 
             'direccion' => 'required',
            'gmail' => 'required|unique:alumnos,gmail',
            'profesion' => 'required',
            'genero' => 'required',
            'fechanac' => 'required',
            'curso_id' => 'required'
        ];
            $mensaje =[
                'required' =>'El :attributed es requerido',
                'fechanac.required' => 'La fecha de nacimiento es requerido',
                'telefono.required' => 'El numero de telefono es requerido',
                'curso_id.required' => 'El  curso es requerido'
        ];
        $this->validate($request,$rules,$mensaje);
        $alumnos= request()->except('_token');
        Alumno::insert($alumnos);
        Flash::success('Creado correctamente');
        return redirect (route('alumnos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $cursos =Curso::pluck('nombre','id');
        $alumnos=Alumno::findorFail($id);
        return view ('alumnos.show', compact('alumnos','cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
    $cursos =Curso::pluck('nombre','id');
       $alumnos=Alumno::findorFail($id);
        return view ('alumnos.edit', compact('alumnos','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
      $alumnos=request()->except(['_token','_method']);
      Alumno::where('id','=',$id)->update($alumnos);
       Flash::success('Actualizado correctamente');
        return redirect ('alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        Flash::error('Eliminado correctamente');
        return redirect('alumnos');
    }
}