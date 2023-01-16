<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function show(){
        $candidatos = Candidato::all();
        return view("index", ["candidatos" => $candidatos]);
    }
    public function create(Request $request) 
    {
        // dd($request->nome_candidato);
        $name = $request->name;
        $telefone = $request->telefone;

        $x = Candidato::create([
            "name" => $name,
            "telefone" => $telefone
        ]);
        return redirect()->route("home");
    }

    public function delete(Request $id) {
        // $id = 
        dd($id);
    }
}
