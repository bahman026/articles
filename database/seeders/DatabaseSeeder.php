<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(FileSeeder::class);
    }
}
