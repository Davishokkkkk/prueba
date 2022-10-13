<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Flash;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
        $nombre = $request->get('buscarpor');
        $cursos = Curso::where('nombre','like',"%$nombre%")->paginate(4);
       return view('cursos.index',compact(
        'cursos'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursos= request()->except('_token');
        Curso::insert($cursos);
        Flash::success('Creado correctamente');
        return redirect (route('cursos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $cursos=Curso::findorFail($id);
        return view ('cursos.edit', compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
      $cursos=request()->except(['_token','_method']);
      Curso::where('id','=',$id)->update($cursos);
       Flash::success('Actualizado correctamente');
        return redirect ('cursos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Curso::destroy($id);
        Flash::error('Eliminado correctamente');
        return redirect('cursos');
    }
}