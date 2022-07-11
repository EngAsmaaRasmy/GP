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
          

        ];

        Schadule::insert($schedules);
    }
}
