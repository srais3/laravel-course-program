<?php

namespace Retrocube\ProgramWorkout\Providers;

use Illuminate\Support\ServiceProvider;

class WorkoutServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/workout-program.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        $this->publishes([
            __DIR__.'/../database/seeders/WorkoutSeeder.php' => resource_path('/../Database/seeders/WorkoutSeeder.php'),
            __DIR__.'/../../public/' => resource_path('/../public/'),
        ]);
    }
}
