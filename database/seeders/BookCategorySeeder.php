<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::insert([
            [
                'book_id' => 1,
                'category_id' => 4,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 2,
                'category_id' => 4,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 3,
                'category_id' => 4,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 3,
                'category_id' => 5,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 4,
                'category_id' => 1,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 4,
                'category_id' => 2,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 5,
                'category_id' => 3,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 6,
                'category_id' => 1,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 6,
                'category_id' => 4,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 7,
                'category_id' => 4,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'book_id' => 7,
                'category_id' => 5,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 8,
                'category_id' => 4,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'book_id' => 8,
                'category_id' => 5,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ], 
            [
                'book_id' => 9,
                'category_id' => 2,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'book_id' => 10,
                'category_id' => 4,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'book_id' => 10,
                'category_id' => 5,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ]
        ]);
    }
}
