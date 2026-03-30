<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 1',
                'status' => 'N',
                'CNPJ' => '0',
                'DDD' => '11',
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'fornecedor 1',
                'status' => 'N',
                'CNPJ' => '0',
                'DDD' => '11',
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'fornecedor 1',
                'status' => 'N',
                'CNPJ' => '0',
                'DDD' => '32',
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'fornecedor 1',
                'status' => 'N',
                'CNPJ' => '0',
                'DDD' => '75',
                'telefone' => '0000-0000'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
