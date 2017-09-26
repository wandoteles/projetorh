<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rescisao;

class RescisaoController extends Controller {
    public function exibir(){
        return view('rescisao');
    }
}
