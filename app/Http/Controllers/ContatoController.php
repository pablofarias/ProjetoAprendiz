<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["Nome" => "Maria", "Telefone" => "999999999"],
            (object)["Nome" => "Jose", "Telefone" => "8888888888"],
            (object)["Nome" => "Pablo", "Telefone" => "555555555"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req->all());
        return "Este é o index Controller do ContatoControle Criar";
    }

    public function editar()
    {
        return "Este é o index Controller do ContatoControle Editar";
    }

}
