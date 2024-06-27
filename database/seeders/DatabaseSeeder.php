<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->createMany([
            [
                'name' => 'Ghaza',
                'email' => 'ghazaja2017@gmail.com',
            ],
            [
                'name' => 'Nico',
                'email' => 'nico@gmail.com',
            ],
            [
                'name' => 'Mine',
                'email' => 'jasmine@gmail.com',
            ],
        ]);

        Category::factory()->createMany([
            [
                'name' => 'art',
            ],
            [
                'name' => 'Bussiness',
            ],
            [
                'name' => 'Education',
            ],
            [
                'name' => 'Entertainment',
            ],
            [
                'name' => 'Family',
            ],
            [
                'name' => 'Fashion',
            ],
            [
                'name' => 'Food',
            ],
            [
                'name' => 'Health',
            ],
            [
                'name' => 'Music',
            ],
            [
                'name' => 'News',
            ],
            [
                'name' => 'Politics',
            ],
            [
                'name' => 'Science',
            ],
            [
                'name' => 'Sports',
            ],
            [
                'name' => 'Technology',
            ],
            [
                'name' => 'Travel',
            ],
            [
                'name' => 'Others',
            ],
        ]);
    }
}
