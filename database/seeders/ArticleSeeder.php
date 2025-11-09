<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $writerId = Writer::pluck('id');
        $categoryId = Category::pluck('id');

        for($i=0;$i<10;$i++){
            $title = $faker->sentence(mt_rand(3, 6));
            $title = str_replace('.', '', $title);

            Article::create([
                'title' => $title,
                'description' => $faker->sentence(4,6),
                'content' => $faker->paragraph(1),
                'slug' => str_replace(' ', '-', $title),
                'writer_id' => $writerId->random(),
                'category_id' => $categoryId->random(),
            ]);

        };

    }
}
