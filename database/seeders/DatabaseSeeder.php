<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dicky Kurnia Ramadhan',
            'username' => 'kurniadhn',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('laravel')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);

        Category::create([
            'name' => 'Music',
            'slug' => 'music'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas odit error delectus et corrupti illum possimus atque natus non enim.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam odio, iste consequatur repellendus sunt fuga perferendis earum nemo voluptas ad architecto atque fugiat, molestiae, illum provident nulla iusto facilis? Sed fugiat rem quae, eaque ea accusantium maxime aliquam distinctio ex dolores natus dicta hic esse repellat doloribus provident minima, debitis pariatur consequatur expedita velit architecto quidem. Consequatur delectus aperiam quam explicabo, corrupti iste ipsum a tempora? Et ea culpa autem. Porro consectetur perferendis eaque reiciendis nam eos aliquam delectus aspernatur, beatae recusandae, assumenda obcaecati provident quidem, facilis saepe minima! Dolorem, illo? Soluta placeat, numquam repudiandae quasi excepturi sapiente consectetur? Ut!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

    }
}
