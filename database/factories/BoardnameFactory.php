<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'boardname' => str_random(6),
        'top_num'   => rand(10,99),
        'bot_num'   => rand(10,99),
        'method'    => str_random(3),
        'note'      => str_random(10)
    ];
});
