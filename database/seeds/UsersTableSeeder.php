<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nom' => 'TRAFTON',
                'prenom' => 'Maroura',
                'identifiant' => 'Tmaroura',
                'type_agent_id' => 1,
                'email' => 'maroura.TRAFTON@vini.pf',
                'password' => bcrypt('maroura')
            ],
            [
                'nom' => 'FOND LOI',
                'prenom' => 'Dan',
                'identifiant' => 'Fldan',
                'type_agent_id' => 1,
                'email' => 'teraitea.tarihaa@vini.pf',
                'password' => bcrypt('fongloi')
            ],
            
        ];

        foreach($users AS $user):
            User::create($user);
        endforeach;

    }
}
