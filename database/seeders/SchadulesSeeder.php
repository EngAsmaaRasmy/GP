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
                'week_day' => 'Saturday , Sunday',
                'time' => '2-5',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 2,
                'week_day' => 'Monday , Tuesday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 3,
                'week_day' => 'Wednesday , Thursday',
                'time' => '4-7',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 4,
                'week_day' => 'Saturday , Monday',
                'time' => '1-4',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 5,
                'week_day' => 'Monday , Wednesday',
                'time' => '6-9',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 6,
                'week_day' => 'Saturday , Wednesday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [

                'doctor_id' => 7,
                'week_day' => 'Saturday , Tuesday',
                'time' => '1-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 8,
                'week_day' => 'Monday , Thursday',
                'time' => '2-5',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 9,
                'week_day' => 'Saturday , Wednesday',
                'time' => '7-9',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 10,
                'week_day' => 'Saturday , Wednesday',
                'time' => '12-3',
                'created_at' => Carbon::now(),
            ],
            [
                'doctor_id' => 11,
                'week_day' => 'Saturday , Thursday',
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
