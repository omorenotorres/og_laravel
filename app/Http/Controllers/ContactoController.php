<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Http\Requests\ContactoRequest;
use Storage;


class ContactoController extends Controller
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
        //return 'INDEX - CONTACTOS';
        $contactos= contacto::orderBy('id','ASC')->paginate(5);
        return view('contactos.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contactos.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
        //
        //return 'TIPO DE CONTACTO GUARDADO';
        $contacto = new Contacto;

        $contacto ->co_descripcion = $request->co_descripcion;
        $contacto ->co_informacion = $request->co_informacion;
        $contacto ->co_imagen    =   $request->co_imagen;
                
        $contacto->save();
        //IMAGE
        if($request->file('co_imagen')){
           $path = Storage::disk('public')->put('image', $request->file('co_imagen'));
           $contacto->fill(['co_imagen' => asset($path)])->save();
        }


        return redirect()->route('contactos.index')->with('info', 'El "Tipo de Contacto" fue creado');        
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
        $contacto = Contacto::find($id);
        return view('contactos.show', compact('contacto'));        
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
        $contacto = Contacto::find($id);
        return view('contactos.edit', compact('contacto'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactoRequest $request, $id)
    {
        //
        //return 'TIPO DE CONTACTO ACTUALIZADO ' . $id;
        $contacto = Contacto::find($id);

        $contacto ->co_descripcion = $request->co_descripcion;
        $contacto ->co_informacion = $request->co_informacion;
        $contacto ->co_imagen    =   $request->co_imagen;

        $contacto->save();
        //IMAGE
        if($request->file('co_imagen')){
           $path = Storage::disk('public')->put('image', $request->file('co_imagen'));
           $contacto->fill(['co_imagen' => asset($path)])->save();
        }


        return redirect()->route('contactos.index')->with('info', 'El "Tipo de Contacto" fue actualizado');        
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
        $contacto = Contacto::find($id);
        $contacto->delete();

        return back()->with('info','El "Tipo de Contacto" fue eliminado');
    }
}
