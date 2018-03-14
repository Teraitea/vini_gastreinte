<?php

use Illuminate\Database\Seeder;
use App\TypesAstreinte;
class TypesAstreintesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeAstreintes = [
            [
                'type_astreinte'=>'Astreinte Production'
            ],
            [
                'type_astreinte'=>'Astreinte Sollicitations'
            ],
        ];

        foreach($typeAstreintes AS $typeAstreinte):
            TypesAstreinte::create($typeAstreinte);
        endforeach;
    }
}
