<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
                'name' => 'Ahmed Samir',
                'email' => 'ahmedsamir12@gmail.com',
                'category_id' => 1,
                'address'  => '',
                'gender' => 'Male',
                'image' => 'https://drive.google.com/file/d/1HbVcNMMu1BNeWQpHtBpsTJRQkH_Q3Ru9/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Ramy Nashat',
                'email' => 'ramynashat123@gmail.com',
                'category_id' => 1,
                'address'  => '',
                'gender' => 'Male',
                'image' => 'https://drive.google.com/file/d/1HmZQ8OrgpKI16FoU2wPyl9HJxw67ivLI/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Mostafa Arafa',
                'email' => 'mostafa_arafa12@gmail.com',
                'category_id' => 1,
                'address'  => '',
                'gender' => 'Male',
                'image' => 'https://drive.google.com/file/d/1HmXdKQHx2voDWWGgRi1oOuVZLsgGXha-/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Mohamed Ahmed',
                'email' => 'mohamedahmed12@gmail.com',
                'category_id' => 2,
                'address'  => '',
                'gender' => 'Male',
                'image' => 'https://drive.google.com/file/d/1tMhCWYVHdH9iYSOoaMNPFvBO3d5I6JiO/view',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Akram Nagaty',
                'email' => 'akramnagaty123@gmail.com',
                'category_id' => 2,
                'address'  => '',
                'gender' => 'Male',
                'image' => 'https://drive.google.com/file/d/1f7wur8r7AuRoVvtDjjt_bzfoGp-nYIM0/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Eman Ali',
                'email' => 'emanali12@gmail.com',
                'category_id' => 2,
                'address'  => '',
                'gender' => 'Female',
                'image' => 'https://drive.google.com/file/d/1meVdWcVG2tTZL7Q1YgsQEUoErMUQJwIb/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Tasneem Ashraf',
                'email' => 'tasneemashraf1234@gmail.com',
                'category_id' => 3,
                'address'  => '',
                'gender' => 'Female',
                'image' => 'https://drive.google.com/file/d/1wWFn3iLciZrJxw08OrgBfsajcFpo1x6F/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Asmaa Ibrahim',
                'email' => 'asmaaibrahim12@gmail.com',
                'category_id' => 3,
                'address'  => '',
                'gender' => 'Female',
                'image' => 'https://drive.google.com/file/d/1I8a2xinN4rFMiq6vQUgsMCOFHHAG7cZi/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yasser Amin',
                'email' => 'yasseramin123@gmail.com',
                'category_id' => 3,
                'address'  => '',
                'gender' => 'Male',
                'image' => 'https://drive.google.com/file/d/1an4X9CtJATKvtJV2dSb9e8u8PGlipcAo/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Hager Yasin',
                'email' => 'hageryasin12@gmail.com',
                'category_id' => 4,
                'address'  => '',
                'gender' => 'Female',
                'image' => 'https://drive.google.com/file/d/1HX6DwJ-yu5BaizSFTx9L_B3rM6v69Mj8/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Amina Abdallah',
                'email' => 'aminaabdallah189@gmail.com',
                'category_id' => 4,
                'address'  => '',
                'gender' => 'Female',
                'image' => 'https://drive.google.com/file/d/1HcSOpnp1YrGy3C8LAMmBUhqUsXaWH5mB/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Waleed Saad',
                'email' => 'waleedsaad12@gmail.com',
                'category_id' => 4,
                'address'  => '',
                'gender' => 'Male',
                'image' => 'https://drive.google.com/file/d/1CmlafYLH_TdoKT1DluAUPsCg5FnBkKMs/view?usp=sharing',
                'password' => Hash::make('123456'),
                'token' => uniqid(base64_encode(Str::random(40))),
                'created_at' => Carbon::now(),
            ]
        ];

        Doctor::insert($doctors);
    }
}
