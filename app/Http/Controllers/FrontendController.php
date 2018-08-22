<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Tplato;
use App\Menu;
use App\Buffet;
use App\Promo;
use App\Contacto;

class FrontendController extends Controller
{
    //
    public function index(){
           //Paginate(4) me dice cuantos registros voy a mostrar en la página
           //OrdenBy me da en que order voy a mostrar los registros asd or desc

            //$products = Product::orderBy('id', 'asc')->paginate(4);
            $carousels = Carousel::orderBy('id', 'asc')->paginate(6);
            $tplatos = Tplato::orderBy('id', 'asc')->paginate(50);
            $menus = Menu::orderBy('id', 'asc')->paginate(500);
            $buffets = Buffet::orderBy('id', 'asc')->paginate(10);
            $promos = Promo::orderBy('id', 'asc')->paginate(10);
            $contactos = Contacto::orderBy('id', 'asc')->paginate(10);

           //Coloco las tablas que voy a mostrar en el welcome
           //$products2 = Product::orderBy('id', 'desc')->paginate(3);
           //$products3 = Product::orderBy('id', 'desc')->paginate(3);

           //Si temgo varias paginas debo hacer un metodo para cada uno de ellas
            return view('welcome', compact('carousels', 'tplatos', 'menus', 'buffets', 'promos', 'contactos'));
        }
}
