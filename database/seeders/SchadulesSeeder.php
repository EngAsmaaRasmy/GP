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
                'time' => '5-7',
                'created_at' => Carbon::now(),
            ],
        ];

        Schadule::insert($schedules);
    }
}
