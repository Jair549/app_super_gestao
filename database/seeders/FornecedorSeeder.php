<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instanciando o objeto e salvando
        $fornecedor = new Fornecedor();
        $fornecedor->name = 'Fornecedor 2';
        $fornecedor->site = 'fornecedor2.com';
        $fornecedor->uf = 'BA';
        $fornecedor->email = 'contato@fornecedor2.com';
        $fornecedor->save();

        //O métido create (atenção para o atributo fillable do model)
        Fornecedor::create([
            'name' => 'Fornecedor 3',
            'site' => 'fornecedor3.com',
            'uf' => 'PE',
            'email' => 'fornecedor3@gmail.com'
        ]);

        //Método insert (atenção para o atributo fillable do model)
        DB::table('fornecedores')->insert([
            'name' => 'Fornecedor 4',
            'site' => 'fornecedor4.com',
            'uf' => 'CE',
            'email' => 'fornecedor4@gmail.com'
        ]);
    }
}
