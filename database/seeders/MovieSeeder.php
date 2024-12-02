<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies=[
            [
                'title'=>'Doraemon',
                'photo'=>'Images/Doraemon.jpg',
                'publish_date'=>'2024-06-09',
                'description'=>'some quick example text to build on the card title and make up the bulk of the card content',
                'genre_id' => 1
            ],
            [
                'title'=>'Bluey',
                'photo'=>'Images/Bluey.jpg',
                'publish_date'=>'2024-06-09',
                'description'=>'some quick example text to build on the card title and make up the bulk of the card content',
                'genre_id' => 1
            ],
            [
                'title'=>'Elemental',
                'photo'=>'Images/Elemental.jpg',
                'publish_date'=>'2024-06-09',
                'description'=>'some quick example text to build on the card title and make up the bulk of the card content',
                'genre_id' => 1
            ],
            [
                'title'=>'Spiderman',
                'photo'=>'Images/SpiderMan.jpeg',
                'publish_date'=>'2024-06-09',
                'description'=>'some quick example text to build on the card title and make up the bulk of the card content',
                'genre_id' => 2
            ],
            [
                'title'=>'Falling For Christmas',
                'photo'=>'Images/fallingForChristmas.jpeg',
                'publish_date'=>'2024-06-09',
                'description'=>'some quick example text to build on the card title and make up the bulk of the card content',
                'genre_id' => 3
            ],
            [
                'title'=>'The Princess Switch',
                'photo'=>'Images/thePrincessSwitch.jpg',
                'publish_date'=>'2024-06-09',
                'description'=>'some quick example text to build on the card title and make up the bulk of the card content',
                'genre_id' => 3
            ],
        ];
        DB::table('movies')->insert($movies);
    }
}
