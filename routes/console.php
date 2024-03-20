<?php

// use Illuminate\Foundation\Inspiring;
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

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote ');

// Artisan::command('talk', function () {
//     $this->info('Trying to get to you!!!!');
// })->purpose('Talking to th MOON');

Artisan::command('greet {name}', function ($name) {
    $this->info('Trying to get to you ' . $name .'!!!!');
})->purpose('Talking to th MOON');

Artisan::command('add {a} {b}', function ($a, $b) {
    $this->info($a + $b);
})->purpose('adding two variables');

// basic structure
// Artisan::command('$signature,$function(){}')->purpose('purpose thakbe');



