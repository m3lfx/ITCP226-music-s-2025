<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 200; $i++) {
            $album = new Album();
            $album->title = $faker->words(3, true);
            $album->genre = $faker->randomElement(array('kpop', 'punk', 'pop', 'grunge', 'hiphop'));
            
            $album->date_released = $faker->date();
            $album->artist_id = $faker->numberBetween(11, 500);
            $album->save();

        }
    }
}
