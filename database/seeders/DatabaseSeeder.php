<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use PharIo\Manifest\Email;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // User::create([
        //     'name' => 'Faqih Firdaus',
        //     'email' => 'faqih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Jafar Setiawan',
        //     'email' => 'jafar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ex optio magnam praesentium cum, minus molestias animi id laboriosam deserunt natus ipsa modi adipisci non. Alias consectetur labore molestiae vero corporis asperiores iusto et quaerat dolorem optio ducimus sit temporibus eum neque recusandae nobis quas, aliquid consequatur, blanditiis assumenda itaque? Neque aperiam minima animi perspiciatis, esse dolores voluptatem quae maxime.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ex optio magnam praesentium cum, minus molestias animi id laboriosam deserunt natus ipsa modi adipisci non. Alias consectetur labore molestiae vero corporis asperiores iusto et quaerat dolorem optio ducimus sit temporibus eum neque recusandae nobis quas, aliquid consequatur, blanditiis assumenda itaque? Neque aperiam minima animi perspiciatis, esse dolores voluptatem quae maxime.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ex optio magnam praesentium cum, minus molestias animi id laboriosam deserunt natus ipsa modi adipisci non. Alias consectetur labore molestiae vero corporis asperiores iusto et quaerat dolorem optio ducimus sit temporibus eum neque recusandae nobis quas, aliquid consequatur, blanditiis assumenda itaque? Neque aperiam minima animi perspiciatis, esse dolores voluptatem quae maxime.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ex optio magnam praesentium cum, minus molestias animi id laboriosam deserunt natus ipsa modi adipisci non. Alias consectetur labore molestiae vero corporis asperiores iusto et quaerat dolorem optio ducimus sit temporibus eum neque recusandae nobis quas, aliquid consequatur, blanditiis assumenda itaque? Neque aperiam minima animi perspiciatis, esse dolores voluptatem quae maxime.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}
