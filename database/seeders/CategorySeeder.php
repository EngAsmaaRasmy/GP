<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Heart',
                'desc' => 'heart disease',
                'description' => 'The heart is a fist-sized organ that pumps blood throughout your body.
                 Its the primary organ of your circulatory system. Your heart contains four main sections .',
                'image' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Internal Disease',
                'desc' => 'internal disease',
                'description' => 'Internal diseases (Internal Medicine) the department that diagnoses and
                 treats the problems in the internal organs of patients over the age of 15',
                'image' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Pediatrics',
                'desc' => 'Pediatrics',
                'description' => 'Pediatrics is the branch of medicine dealing with the health 
                and medical care of infants, children, and adolescents from birth up to the age of 18',
                'image' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Gynaecology',
                'desc' => 'Gynaecology',
                'description' => 'A gynecologist is a doctor who specializes in female reproductive health. 
                They diagnose and treat issues related to the female reproductive tract.',
                'image' => '',
                'created_at' => Carbon::now(),
            ]
        ];

        Category::insert($category);
    }
}
