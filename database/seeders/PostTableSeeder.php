<?php

namespace Database\Seeders;
use App\Models\Post;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100 ; $i++) { 

            $new_post = new Post();
            


            
        }
    }
}
