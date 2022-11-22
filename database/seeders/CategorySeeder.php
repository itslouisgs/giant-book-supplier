<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Comedy',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'name' => 'Romance',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'name' => 'Sci-fi',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'name' => 'Nonfiction',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'name' => 'Self-development',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
        ]);
    }
}
