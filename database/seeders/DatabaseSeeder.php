<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Writer;
use App\Models\Article;
use App\Models\Congress;
use App\Models\Presenter;
use App\Models\ArticleFile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Congress::factory(5)->create();
        Presenter::factory(5)->create();
        Article::factory(5)->create();
        Writer::factory(5)->create();
        ArticleFile::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
