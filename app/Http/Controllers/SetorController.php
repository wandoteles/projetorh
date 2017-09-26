<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setor;

class SetorController extends Controller {

    public function exibir() {
        return view('setor');
    }

}
