<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContato::factory()->count(100)->create();
        // $siteContato = new SiteContato();
        // $siteContato->name = 'Sistema SG';
        // $siteContato->telefone = '(75) 9 8195-1111';
        // $siteContato->email = 'contato@sitemasg.com';
        // $siteContato->mensagem = 'Mensagem de contato do sistema de gestão';
        // $siteContato->motivo_contato = 1;
        // $siteContato->save();
    }
}
