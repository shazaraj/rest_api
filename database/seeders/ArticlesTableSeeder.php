<?php

namespace Database\Seeders;

use App\Models\Article;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Article::factory()->count(10)->create(['author_id' => 1]);
    }
}
