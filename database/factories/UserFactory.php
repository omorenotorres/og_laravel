<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Carousel::class, function (Faker $faker) {
    return [
	'c_titulo' => $faker->sentence(2),
    'c_imagen' => $faker->imageUrl($width = 50, $height=100),
        ];
});

$factory->define(App\Menu::class, function (Faker $faker) {
    return [
	'tipo_plato' => $faker->numberBetween($min = 1, $max = 21),
	'item' => $faker->text(50),
	'descripcion_item' => $faker->text(150),
	'precio_item' => $faker->numberBetween($min = 1, $max = 50),
        ];
});


$factory->define(App\Tplato::class, function (Faker $faker) {
    return [
    'tp_codigo' => $faker->numberBetween($min = 1, $max = 21),
	'tp_descripcion' => $faker->unique()->sentence(2),
    'tp_imagen' => $faker->imageUrl($width = 50, $height=100),
        ];
});


$factory->define(App\Promo::class, function (Faker $faker) {
    return [
	'p_titulo' => $faker->unique()->sentence(2),
	'p_descripcion' => $faker->unique()->sentence(2),
    'p_imagen' => $faker->imageUrl($width = 50, $height=100),
        ];
});

$factory->define(App\Buffet::class, function (Faker $faker) {
    return [
    'b_dia' => $faker->unique()->sentence(2),
    'b_precio' => $faker->unique()->sentence(2),
        ];
});

$factory->define(App\Contacto::class, function (Faker $faker) {
    return [
    'co_imagen' => $faker->unique->imageUrl($width = 50, $height=100),    
    'co_descripcion' => $faker->unique()->sentence(2),
    'co_informacion' => $faker->unique()->sentence(2),
        ];
});

$factory->define(App\Reservacion::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'correo' => $faker->safeEmail,
        'nombre' => $faker->name,
        'hora' => $faker->numberBetween($min = 9, $max = 22),
        'fecha' => $faker->date,
        'comensales' => $faker->numberBetween($min = 2, $max = 100),
        'telefono' => $faker->randomnumber(8),
    ];
});