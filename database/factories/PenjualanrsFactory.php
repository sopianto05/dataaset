<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Penjualanrs;
use Faker\Generator as Faker;

$factory->define(Penjualanrs::class, function (Faker $faker) {

    return [
        'qty' => $faker->randomDigitNotNull,
        'subtotal' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'penjualans_id' => $faker->randomDigitNotNull,
        'barangs_id' => $faker->randomDigitNotNull,
        'returns_id' => $faker->randomDigitNotNull
    ];
});
