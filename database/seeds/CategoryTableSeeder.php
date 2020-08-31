<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Große Pflanzen', 'slug' => 'large_plants', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kleine Pflanzen', 'slug' => 'small_plants', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Draußen', 'slug' => 'outside', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Drinnen', 'slug' => 'inside', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Besonderes', 'slug' => 'special', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
