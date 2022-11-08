<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory  as Faker;


class SiswaSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            $gender = $faker->randomElement($array = array('male', 'female'));
            $image = $faker->randomElement($array = array('gambar1.jpeg'));
            \DB::table('students')->insert([
                'id' => $faker->numberBetween($min = 100, $max = 500),
                'Nama' => $faker->name($gender),
                'Kelas' => $faker->company,
                'Jenis_kelamin' => $gender,
                'Alamat' => $faker->address,
                'Foto' => ($image)
            ]);
        }
    }
}
