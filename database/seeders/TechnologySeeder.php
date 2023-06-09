<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Technology;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5 ; $i++) { 
            $newTecnology = new Technology();
            $newTecnology->name = $faker->sentence(3);
            $newTecnology->slug = Str::slug($newTecnology->name,'-');
            $newTecnology->cover =  $faker->imageUrl(category:'Technology',format:'jpg');
            $newTecnology->save();
        }
    }
}
