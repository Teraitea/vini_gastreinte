<?php

use Faker\Generator as Faker;

$factory->define(App\Astreinte::class, function (Faker $faker) {
    return [
        'date_debut' => $faker->dateTimeThisMonth,
        'date_fin' => $faker->dateTimeThisMonth,
        'durée' => $faker->randomDigitNotNull,
        'type_astreinte_id' => $faker->numberBetween(1,5),
        'user_id' => $faker->numberBetween(1,2),
        'etat_id' => $faker->numberBetween(1,3),
    ];
});
