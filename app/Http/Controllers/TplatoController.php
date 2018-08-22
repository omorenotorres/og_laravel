<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tplato;
use App\Http\Requests\TplatoRequest;
use Storage;

class TplatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Forzar Autenticacion
     **/
        public function __construct()
        {
            $this->middleware('auth');
        }

    public function index()
    {
        //
        //return 'INDEX - TIPO DE PLATOS';
        $tplatos= tplato::orderBy('tp_codigo','ASC')->paginate(5);
        return view('tplatos.index', compact('tplatos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tplatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TplatoRequest $request)
    {
        //
        //return 'TIPO DE PLATO GUARDADO';
        $tplato = new Tplato;

        $tplato ->tp_codigo = $request->tp_codigo;
        $tplato ->tp_descripcion   =   $request->tp_descripcion;
        $tplato ->tp_imagen    =   $request->tp_imagen;
                
        $tplato->save();
        //IMAGE
        if($request->file('tp_imagen')){
           $path = Storage::disk('public')->put('image', $request->file('tp_imagen'));
           $tplato->fill(['tp_imagen' => asset($path)])->save();
        }


        return redirect()->route('tplatos.index')->with('info', 'El "Tipo de Plato" fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tplato = Tplato::find($id);
        return view('tplatos.show', compact('tplato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tplato = Tplato::find($id);
        return view('tplatos.edit', compact('tplato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TplatoRequest $request, $id)
    {
        //
        //return 'TIPO DE PLATO ACTUALIZADO ' . $id;
        $tplato = Tplato::find($id);

        $tplato ->tp_codigo = $request->tp_codigo;
        $tplato ->tp_descripcion   =   $request->tp_descripcion;
        $tplato ->tp_imagen    =   $request->tp_imagen;

        $tplato->save();
        //IMAGE
        if($request->file('tp_imagen')){
           $path = Storage::disk('public')->put('image', $request->file('tp_imagen'));
           $tplato->fill(['tp_imagen' => asset($path)])->save();
        }


        return redirect()->route('tplatos.index')->with('info', 'El "Tipo de Plato" fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tplato = Tplato::find($id);
        $tplato->delete();

        return back()->with('info','El "Tipo de Plato" fue eliminado');

    }
}
