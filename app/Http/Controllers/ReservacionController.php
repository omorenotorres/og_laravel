<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservacion;
use App\Http\Requests\ReservacionRequest;

class ReservacionController extends Controller
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
        //return 'INDEX - RESERVACIONES';
        $reservacions = reservacion::orderBy('id','ASC')->paginate(5);
        return view('reservacions.index', compact('reservacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reservacions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservacionRequest $request)
    {
        //
        //return 'RESERVACION GUARDADA';
        $reservacion = new Reservacion;

        $reservacion ->nombre = $request->nombre;
        $reservacion ->correo  =   $request->correo;
        $reservacion ->hora    =   $request->hora;
        $reservacion ->fecha    =   $request->fecha;
        $reservacion ->comensales = $request->comensales;
        $reservacion ->telefono  =   $request->telefono;
        
        $reservacion->save();

        return redirect()->route('reservacions.index')->with('info', 'La "Reservacion" fue creada');

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
        $reservacion = Reservacion::find($id);
        return view('reservacions.show', compact('reservacion'));
        
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
        $reservacion = Reservacion::find($id);
        return view('reservacions.edit', compact('reservacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservacionRequest $request, $id)
    {
        //
        //
        //return 'RESERVACION ACTUALIZADA ' . $id;
        $reservacion = Reservacion::find($id);

        $reservacion ->nombre = $request->nombre;
        $reservacion ->correo  =   $request->correo;
        $reservacion ->hora    =   $request->hora;
        $reservacion ->fecha    =   $request->fecha;
        $reservacion ->comensales = $request->comensales;
        $reservacion ->telefono  =   $request->telefono;
        

        $reservacion->save();

        return redirect()->route('reservacions.index')->with('info', 'La "Reservacion" fue actualizada');
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
        $reservacion = Reservacion::find($id);
        $reservacion->delete();

        return back()->with('info','La "Reservacion" fue eliminada');
    }
}
