<?php

use Illuminate\Database\Seeder;
use App\Etat;
class EtatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etats = [
            [
                'etat' => 'A valider'
            ],
            [
                'etat' => 'Annuler'
            ],
            [
                'etat' => 'Valider'
            ],
            [
                'etat' => 'Refuser'
            ],
        ];
        
        foreach($etats AS $etat):
            Etat::create($etat);
        endforeach;
    }
}
