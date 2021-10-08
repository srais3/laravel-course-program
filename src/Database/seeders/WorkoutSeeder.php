<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addWorkout();
    }

    public function addWorkout()
    {
        $data = [
            [
                'title'    => 'Beginner Body Weight Program',
                'slug'         => 'beginner-body-weight-program',
                'image_url'   => '/workout/banner1.png',
                'descp'         => 'This is the process of limiting calorie intake to a specific time frame that aligns with our circadian rhythm. Circadian rhythm is often referred to as our.',
                'created_at'   => Carbon::now()
            ],
            [
                'title'    => 'HIIT30',
                'slug'         => 'hiits30',
                'image_url'   => '/workout/banner2.png',
                'descp'         => 'This is the process of limiting calorie intake to a specific time frame that aligns with our circadian rhythm. Circadian rhythm is often referred to as our.',
                'created_at'   => Carbon::now()
            ],
            [
                'title'    => 'Bye Bye Bubble Butts',
                'slug'         => 'bye-bye-bubble-butts',
                'image_url'   => '/workout/banner3.png',
                'descp'         => 'This is the process of limiting calorie intake to a specific time frame that aligns with our circadian rhythm. Circadian rhythm is often referred to as our.',
                'created_at'   => Carbon::now()
            ],
            [
                'title'    => 'Lose Weight',
                'slug'         => 'lose-weight',
                'image_url'   => '/workout/banner4.png',
                'descp'         => 'This is the process of limiting calorie intake to a specific time frame that aligns with our circadian rhythm. Circadian rhythm is often referred to as our.',
                'created_at'   => Carbon::now()
            ]
        ];

        \DB::table('workout')->insert($data);
    }
}
