<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buffet;
use App\Http\Requests\BuffetRequest;

class BuffetController extends Controller
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
        $buffets = buffet::orderBy('id','ASC')->paginate(5);
        return view('buffets.index', compact('buffets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buffets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuffetRequest $request)
    {
        //
        //return 'BUFFET GUARDADO';
        $buffet = new Buffet;

        $buffet ->b_dia = $request->b_dia;
        $buffet ->b_precio    =   $request->b_precio;
                
        $buffet->save();
       
        return redirect()->route('buffets.index')->with('info', 'El "Dia del Buffet" fue creado');
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
        $buffet = Buffet::find($id);
        return view('buffets.show', compact('buffet'));
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
        $buffet = Buffet::find($id);
        return view('buffets.edit', compact('buffet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //return 'DIA DE BUFFET ACTUALIZADO ' . $id;
        $buffet = Buffet::find($id);

        $buffet ->b_dia = $request->b_dia;
        $buffet ->b_precio    =   $request->b_precio;

        $buffet->save();
        
        return redirect()->route('buffets.index')->with('info', 'El "Dia del Buffet" fue actualizado');
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
        $buffet = Buffet::find($id);
        $buffet->delete();

        return back()->with('info','El "Dia del Buffet" fue eliminado');
    }
}
