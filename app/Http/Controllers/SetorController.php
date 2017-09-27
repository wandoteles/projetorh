<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setor;

class SetorController extends Controller {

    public function exibir() {
        return view('setor');
    }

    public function cadastro() {
        return view('cadastrosetor');
    }

    public function inserirSetor() {
//       $nome = \request::input('nome');
//       
//       $cargo = new Cargo();
//       $cargo-> nome = $nome;
//       $cargo->save();
//      
        $setor = new Setor();
        $setor->nome = \Request::input('nome');

        $setor->save();
        return redirect('/');
    }

}
