<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
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
        //return 'INDEX - MENU';
        $menus= menu::orderBy('tipo_plato','ASC')->paginate(5);
        return view('menus.index', compact('menus'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        //
        //return 'RECURSO GUARDADO';
        $menu = new Menu;

        $menu ->tipo_plato = $request->tipo_plato;
        $menu ->item   =   $request->item;
        $menu ->descripcion_item    =   $request->descripcion_item;
        $menu ->precio_item    =   $request->precio_item;
        
        $menu->save();

        return redirect()->route('menus.index')->with('info', 'El "Plato" fue creado');

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
        $menu = Menu::find($id);
        return view('menus.show', compact('menu'));
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
        $menu = Menu::find($id);
        return view('menus.edit', compact('menu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        //
        //return 'RECURSO ACTUALIZADO ' . $id;
        $menu = Menu::find($id);

        $menu ->tipo_plato = $request->tipo_plato;
        $menu ->item   =   $request->item;
        $menu ->descripcion_item    =   $request->descripcion_item;
        $menu ->precio_item    =   $request->precio_item;
        

        $menu->save();

        return redirect()->route('menus.index')->with('info', 'El "Plato" fue actualizado');

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
        $menu = Menu::find($id);
        $menu->delete();

        return back()->with('info','El "Plato" fue eliminado');

    }
}
