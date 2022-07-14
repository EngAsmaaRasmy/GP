<?php

namespace Database\Seeders;

use App\Models\Schadule;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SchadulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
            [
                'doctor_id' => 1,
                'week_day' => 'Saturday',
                'time' => '2-5',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 1,
                'week_day' => 'Sunday',
                'time' => '2-5',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 2,
                'week_day' => 'Monday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 2,
                'week_day' => 'Tuesday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 3,
                'week_day' => 'Wednesday',
                'time' => '4-7',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 3,
                'week_day' => 'Thursday',
                'time' => '4-7',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 4,
                'week_day' => 'Saturday',
                'time' => '1-4',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 4,
                'week_day' => 'Monday',
                'time' => '1-4',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 5,
                'week_day' => 'Monday',
                'time' => '6-9',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 5,
                'week_day' => 'Wednesday',
                'time' => '6-9',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 6,
                'week_day' => 'Wednesday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 6,
                'week_day' => 'Saturday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [

                'doctor_id' => 7,
                'week_day' => 'Saturday',
                'time' => '1-3',
                'created_at' => Carbon::now(),
            ],
            [

                'doctor_id' => 7,
                'week_day' => 'Tuesday',
                'time' => '1-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 8,
                'week_day' => 'Monday',
                'time' => '2-5',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 8,
                'week_day' => 'Thursday',
                'time' => '2-5',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 9,
                'week_day' => 'Wednesday',
                'time' => '7-9',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 9,
                'week_day' => 'Saturday',
                'time' => '7-9',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 10,
                'week_day' => 'Saturday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 10,
                'week_day' => 'Wednesday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 11,
                'week_day' => 'Saturday',
                'time' => '1-4',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 11,
                'week_day' => 'Thursday',
                'time' => '1-4',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 12,
                'week_day' => 'Tuesday',
                'time' => '4-7',
                'created_at' => Carbon::now(),
            ],
        ];

        Schadule::insert($schedules);
    }
}
