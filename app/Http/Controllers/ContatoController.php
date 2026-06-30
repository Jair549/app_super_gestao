<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = [
            1 => 'Dúvida',
            2 => 'Elogio',
            3 => 'Reclamação'
        ];

        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // echo $request->input('name');
        // echo '<br>';
        // echo $request->input('email');

        // $contato = new SiteContato();
        // $contato->name = $request->input('name');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // print_r($contato->getAttributes());

        // $contato->save();

        // print_r($contato->getAttributes());
        // $contato->save();
        // $contato->getAttributes();

        $titulo = 'Contato';
        return view('site.contato', compact('titulo', 'motivo_contatos'));
    }

    public function salvar(Request $request){

        //Realizar a validação dos dados recebidos do formulário de contato
        $request->validate([
            'name' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);

        SiteContato::create($request->all());
    }
}
