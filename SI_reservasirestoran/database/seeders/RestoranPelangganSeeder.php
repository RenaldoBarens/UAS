<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RestoranPelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 2; $i++){
            
            DB::table('restoran_pelanggans')->insert([
                'Nama_Cafe' => $faker->company(),
                'Alamat' => $faker->address(),
                'Rating' => $faker->numberBetween($min = 1, $max = 5),
                'Tipe_Restoran' => $faker->word(),
                'Jarak' => $faker->numberBetween($min = 1, $max = 50)
            ]);
        }

        

    }
}