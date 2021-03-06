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
/**
 * Состояние для учетной записи администратора
 */
$factory->state(App\User::class, 'admin', [
      'name' => 'admin',
      'isAdmin' => 1,
      'email' => 'admin@test.ru',
      'password' => bcrypt('123456'),
]);
/**
 * Состояние для учетной записи пользователя
 */
$factory->state(App\User::class, 'user', [
      'name' => 'user',
      'email' => 'user@test.ru',
      'password' => bcrypt('123456'),
]);
