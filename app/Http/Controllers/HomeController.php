<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permissao;
use App\Models\Papel;
use App\User;

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
        return view('site.home.index');
    }

    public function listarUsuario()
    {
        $usuarios = User::where('papel_id','1')->paginate(6);
        $papeis = Papel::all();
        $contador = 0;
        return view('site.home.listar', compact('usuarios','papeis','contador'));
    }
}
