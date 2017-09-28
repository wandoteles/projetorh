<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use App\Models\Setor;

class CargoController extends Controller {

    public function exibir() {
        $cargo=Cargo::all();
        $setor=Setor::all();
        return view('cargo',['cargos' => $cargo,'setores' => $setor ]);
    }

    public function cadastro() {
        $setor=Setor::all();
        return view('cadastrocargo',['setores' => $setor]);
    }

    public function inserirCargo() {

        $cargo = new Cargo();
        $cargo->nome = \Request::input('nome');
        $cargo->Setor_id = \Request::input('setor');

        $cargo->save();
        return redirect('/cargo');
    }

}
