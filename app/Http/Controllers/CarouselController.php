<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Carousel;
use App\Http\Requests\CarouselRequest;
use Storage;

class CarouselController extends Controller
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
        //return 'INDEX - CAROUSELES';
        $carousels= carousel::orderBy('id','ASC')->paginate(5);
        return view('carousels.index', compact('carousels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('carousels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarouselRequest $request)
    {
        //
        //return 'CAROUSEL GUARDADO';
        $carousel = new Carousel;

        $carousel ->c_titulo = $request->c_titulo;
        $carousel ->c_imagen    =   $request->c_imagen;
                
        $carousel->save();
        //IMAGE
        if($request->file('c_imagen')){
           $path = Storage::disk('public')->put('image', $request->file('c_imagen'));
           $carousel->fill(['c_imagen' => asset($path)])->save();
        }


        return redirect()->route('carousels.index')->with('info', 'El "Carrusel" fue creado');
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
        $carousel = Carousel::find($id);
        return view('carousels.show', compact('carousel'));

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
        $carousel = Carousel::find($id);
        return view('carousels.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarouselRequest $request, $id)
    {
        //
        ////return 'TIPO DE PLATO ACTUALIZADO ' . $id;
        $carousel = Carousel::find($id);

        $carousel ->c_titulo = $request->c_titulo;
        $carousel ->c_imagen    =   $request->c_imagen;

        $carousel->save();
        //IMAGE
        if($request->file('c_imagen')){
           $path = Storage::disk('public')->put('image', $request->file('c_imagen'));
           $carousel->fill(['c_imagen' => asset($path)])->save();
        }


        return redirect()->route('carousels.index')->with('info', 'El "Carrusel" fue actualizado');
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
        $carousel = Carousel::find($id);
        $carousel->delete();

        return back()->with('info','El "Carrusel" fue eliminado');

    }
}
