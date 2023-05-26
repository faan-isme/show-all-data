<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        for ($i=1; $i < 50; $i++) { 
            DB::table('peserta')->insert([
                'nama' =>$faker->name,
                'umur'=>$faker->numberBetween(20,30),
                'noWA'=>$faker->phoneNumber()

            ]);
        }
    }
}
