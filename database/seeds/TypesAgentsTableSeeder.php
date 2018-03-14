<?php

use Illuminate\Database\Seeder;
use App\TypesAgent;
class TypesAgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typesAgents = [
            [
                'type_agent'=>'Chef de projet Niveau 1'
            ],
            [
                'type_agent'=>'Chef de projet Niveau 2'
            ],
        ];

        foreach($typesAgents As $typeAgent):
            TypesAgent::create($typeAgent);
        endforeach;
    }
}
