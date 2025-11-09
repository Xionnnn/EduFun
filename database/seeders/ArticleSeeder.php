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

        $interMedia = ['Human and Computer Interaction', 'User Experience', 'User Experience for Digital Immersive Technology'];
        $softwareEng = ['Pattern Software Design', 'Agile Software Development', 'Code Reengineering'];

        for($i=0;$i<6;$i++){
            if($i<3){
                $title = $interMedia[$i];
                $writerId = Writer::where('position', 'Interactive Multimedia Specialist')->pluck('id');
                $categoryId = Category::where('name', 'Interactive Multimedia')->value('id');
            }else{
                $title = $softwareEng[$i-3];
                $writerId = Writer::where('position', 'Software Engineering Specialist')->pluck('id');
                $categoryId = Category::where('name', 'Software Engineering')->value('id');
            }


            $title = str_replace('.', '', $title);

            Article::create([
                'title' => $title,
                'description' => $faker->sentence(4,6),
                'content' => $faker->paragraph(1),
                'slug' => str_replace(' ', '-', $title),
                'writer_id' => $writerId->random(),
                'category_id' => $categoryId,
            ]);

        };

    }
}
