<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@filamentphp.com',
        ]);

        $page = Page::create([
            'title' => 'Home',
        ]);

        $page->sections()->create([
            'title' => 'Section'
        ]);
    }
}
