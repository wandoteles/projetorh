<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cargo;

class CargoController extends Controller {

    public function exibir() {
        return view('cargo');
    }

}
