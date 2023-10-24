<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        // dd($usuarios);
        return view('usuario.index', ['usuarios' => $usuarios]);
    }
    public function create()
    {
        return view('usuario.create');
    }
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('usuarios-index');
    }
    public function edit($id)
    {
        $usuarios = Usuario::where('id', $id)->first();
        if (!empty($usuarios)) {
            return view('usuario.edit', ['usuarios' => $usuarios]);
        } else {
            return redirect()->route('usuarios-index');
        }
    }
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'idade' => $request->idade,
        ];
        Usuario::where('id',$id)->update($data);
        return redirect()->route('usuarios-index');
    }
}
