<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('user', function () {
    \App\Models\User::create([
        'name' => 'Muhammad Nur Hadi',
        'email' => 'saya@mnurhad.com',
        'password' => bcrypt('123456789')
    ]);
})->describe('Create sample user');
