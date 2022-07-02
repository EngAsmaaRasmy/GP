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
                'desc' => 'heart',
                'description' => 'Heart',
                'image' => 'https://drive.google.com/file/d/1FY_uwOR1yFkvjyWIxhv20eSRgOP_xXrB/view?usp=drivesdk',
                'created_at' => Carbon::now(),
            ],
        ];

        Category::insert($category);
    }
}
