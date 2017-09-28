<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setor;

class SetorController extends Controller {

    public function exibir() {
        $setor=  Setor::all();
        return view('setor',['setores' => $setor]);
    }

    public function cadastro() {
        return view('cadastrosetor');
    }

    public function inserirSetor() {
    
        $setor = new Setor();
        $setor->nome = \Request::input('nome');

        $setor->save();
        return redirect('/setor');
    }

}
