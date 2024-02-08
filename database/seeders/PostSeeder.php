<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
      
        for ($i=0; $i < 30; $i++) { 
             $c =Category::inRandomOrder()->first() ;

            $title = Str::random(20);

             Post::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => "<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusamus doloribus dolorum ea natus optio saepe veniam molestias fuga possimus autem vero, laborum a sequi cupiditate perferendis voluptates dolorem rem!",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusamus doloribus dolorum ea natus optio saepe veniam molestias fuga possimus autem vero, laborum a sequi cupiditate perferendis voluptates dolorem rem!",
                'posted' => "yes",
                'category_id' => $c->id
                

             ]);
        }



    }
}
