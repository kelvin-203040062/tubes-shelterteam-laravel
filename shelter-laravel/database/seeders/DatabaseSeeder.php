<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Shelter Team',
            'username' => 'shelter',
            'email' => 'shelter@mail.unpas.ac.id',
            'password' => bcrypt('hilapdeui123')
        ]);

        Category::create([
            'name' => 'Adidas',
            'slug' => 'adidas'
        ]);

        Category::create([
            'name' => 'Nike',
            'slug' => 'nike'
        ]);

        Category::create([
            'name' => 'Puma',
            'slug' => 'puma'
        ]);

        Category::create([
            'name' => 'Vans',
            'slug' => 'vans'
        ]);

        Post::factory(20)->create();

    }
}
