<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'zaqueen',
            'email' => 'zaqueencollection23@gmail.com',
            'password' => bcrypt('zc321123')
        ]);

        Category::create([
            'name' => 'Kebaya',
            'slug' => 'kebaya'
        ]);

        Category::create([
            'name' => 'Daster',
            'slug' => 'daster'
        ]);

        Category::create([
            'name' => 'Seragam',
            'slug' => 'school-uniforms'
        ]);

        Category::create([
            'name' => 'Mukena',
            'slug' => 'muslim dress'
        ]);

        Category::create([
            'name' => 'Baju Koko',
            'slug' => 'baju-koko'
        ]);
    }
}
