<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;


class FuncionarioController extends Controller{
    
    public function exibir(){
        return view ('funcionario');
    }
    
    public function insere(){
        $nome = \Request::input('nome');
        $cpf = \Request::input('cpf');
        $salario = \Request::input('salario');
        
        
        $novo = new cadastrofuncionario();
        
        $novo->nome = $nome;
        $novo->cpf = $cpf;
        $novo->salario = $salario;
        
        $novo->save();
        return redirect('');
    }
}
