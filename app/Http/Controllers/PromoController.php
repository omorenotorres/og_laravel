<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
use App\Http\Requests\PromoRequest;
use Storage;

class PromoController extends Controller
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
        //return 'INDEX - PROMOCIONES';
        $promos= promo::orderBy('id','ASC')->paginate(5);
        return view('promos.index', compact('promos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('promos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromoRequest $request)
    {
        //
        //return 'PROMOCION GUARDADO';
        $promo = new Promo;

        $promo ->p_titulo = $request->p_titulo;
        $promo ->p_descripcion   =   $request->p_descripcion;
        $promo ->p_imagen    =   $request->p_imagen;
                
        $promo->save();
        //IMAGE
        if($request->file('p_imagen')){
           $path = Storage::disk('public')->put('image', $request->file('p_imagen'));
           $promo->fill(['p_imagen' => asset($path)])->save();
        }


        return redirect()->route('promos.index')->with('info', 'La "Promocion" fue creada');
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
        $promo = Promo::find($id);
        return view('promos.show', compact('promo'));
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
        $promo = Promo::find($id);
        return view('promos.edit', compact('promo'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromoRequest $request, $id)
    {
        //
        //return 'PROMOCION ACTUALIZADA ' . $id;
        $promo = Promo::find($id);

        $promo ->p_titulo = $request->p_titulo;
        $promo ->p_descripcion   =   $request->p_descripcion;
        $promo ->p_imagen    =   $request->p_imagen;

        $promo->save();
        //IMAGE
        if($request->file('p_imagen')){
           $path = Storage::disk('public')->put('image', $request->file('p_imagen'));
           $promo->fill(['p_imagen' => asset($path)])->save();
        }


        return redirect()->route('promos.index')->with('info', 'La "Promocion" fue actualizada');
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
        $promo = Promo::find($id);
        $promo->delete();

        return back()->with('info','La "Promocion" fue eliminada');

    }
}
