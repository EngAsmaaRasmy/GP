<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = [
            [
                'name' => 'Asmaa',
                'email' => 'asmaa@gmail.com',
                'category_id' => 1,
                'address'  => 'cairo',
                'gender' => 'Female',
                'password' => Hash::make('123456'),
                'created_at' => Carbon::now(),
            ],
        ];

        Doctor::insert($doctors);
    }
}
