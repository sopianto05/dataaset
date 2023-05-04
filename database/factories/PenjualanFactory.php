<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Penjualan;
use Faker\Generator as Faker;

$factory->define(Penjualan::class, function (Faker $faker) {

    return [
        'tanggal' => $faker->word,
        'pembayaran' => $faker->randomDigitNotNull,
        'total' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
