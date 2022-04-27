<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');

    /*     $usuarios = HTTP::get('https://gateway.marvel.com:443/v1/public/characters?name=hulk&apikey=255cc67d69e2d46cf2e5dc234a9adafd
'); */
        $usuariosArray = $usuarios->json();
        return view('home', compact('usuariosArray'));
    }
}
