<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('example',['only' => 'home']); // se puede cambiar only por except y es lo contrario
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
        // return response('Contenido de la respuesta', 201)
        //                 ->header('X-TOKEN', 'secret')
        //                 ->header('X-TOKEN-2', 'secret-2')
        //                 ->cookie('X-COOKIE', 'cookie');
    }

    public function saludo($nombre = "Invitado")
    {
        $html = "<h2>Bienvenido a mi página de Laravel</h2>";

        $consolas =[
            "PHP",
            "Laravel",
            "Bootstrap"
        ];

           // return view('saludo', ['nombre' => $nombre]);
    return view('saludo', compact('nombre', 'html', 'consolas'));
    }
}
