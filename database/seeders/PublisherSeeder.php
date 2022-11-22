<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::insert([
            [
                'name' => 'HarperCollins Publishers',
                'address' => 'HarperCollins Publishers 195 Broadway New York, NY 10007',
                'phone' => '212-207-7000',
                'email' => 'hello@harpercollins.com',
                'image' => 'publisher-001.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'name' => 'Doubleday',
                'address' => '1745 Broadway New York, NY 10019 Fax (212) 940-7390',
                'phone' => '(212) 572-2299',
                'email' => 'knopfpublicity@randomhouse.com',
                'image' => 'publisher-002.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'name' => 'Random House Publishing Group',
                'address' => '1745 Broadway, 3rd Floor New York, NY 10019',
                'phone' => '(212) 782-9000',
                'email' => 'consumerservices@penguinrandomhouse.com',
                'image' => 'publisher-003.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'name' => 'Gramedia Pustaka Utama',
                'address' => 'Gedung Kompas Gramedia Blok 1 lt.5 Jl. Palmerah Barat No.29-37 Jakarta 10270 Indonesia',
                'phone' => '(021) 53650110/11',
                'email' => 'redaksi@gramediapustakautama.id',
                'image' => 'publisher-004.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
            [
                'name' => 'Bhuana Ilmu Populer',
                'address' => 'Kompas Gramedia Bld. Gedung Kompas Gramedia, Jalan Palmerah Barat 29-37, Unit 1, Lantai 2, Jakarta, Indonesia 10270',
                'phone' => '+62 21 53677834',
                'email' => ' redaksi_bip@penerbitbip.id',
                'image' => 'publisher-005.jpg',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ]
        ]);
        
    }
}
