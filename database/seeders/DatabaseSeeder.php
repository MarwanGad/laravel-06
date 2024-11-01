<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Language;
use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Author::factory()->create([
            'name' => 'Colleen Hoover',
            'yob' => '1979',
            'data' => 'from texas',
        ]);
        Author::factory()->create([
            'name' => 'Thomas Erikson',
            'yob' => '1965',
            'data' => 'from sweden',
        ]);

        Language::factory()->create([
            'language' => 'Arabic',
        ]);
        Language::factory()->create([
            'language' => 'English',
        ]);
        Language::factory()->create([
            'language' => 'German',
        ]);

        Topic::factory()->create([
            'topic' => 'Horror',
        ]);
        Topic::factory()->create([
            'topic' => 'Romance',
        ]);
        
        Book::factory()->create([
            'title' => 'Novamber 9',
            'language_id' => '2',
            'author_id' => '1',
            'topic_id' => '2',
        ]);
    }
}
