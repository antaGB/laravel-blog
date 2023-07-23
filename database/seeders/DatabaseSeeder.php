<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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

        User::create([
            'name' => 'Anta',
            'username' => 'anta',
            'email' => 'Anta@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(2)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, dignissimos!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit obcaecati alias labore assumenda asperiores neque cupiditate natus autem incidunt magnam quasi blanditiis dolorum, quis facere corrupti provident voluptatibus atque quas iusto ab dicta placeat non reprehenderit voluptatum. Exercitationem voluptatibus quos doloremque id voluptates asperiores vel, qui eius dolorem hic aperiam corrupti in, laudantium provident </p><p>distinctio. Voluptatem amet doloribus aspernatur expedita sint accusamus molestias ipsam nobis natus aliquam, perferendis velit. Voluptatibus sint nam molestiae error, eos, cum fuga, excepturi sed amet repudiandae autem nulla qui soluta quod ipsa minus dolore commodi delectus possimus quam neque eius? Voluptatem natus placeat minus debitis quia </p><p>consequatur dolores, dignissimos id maiores, provident cum blanditiis deleniti, inventore quas? Distinctio, consequuntur soluta? Quae a reiciendis laudantium blanditiis. Nihil voluptatum officiis numquam tempore architecto? Mollitia, quaerat ipsum vero aliquid exercitationem iure sint! At illo iure tempora soluta temporibus voluptate quas! Optio officiis consequuntur obcaecati facilis aliquid magni nisi?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, dignissimos!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit obcaecati alias labore assumenda asperiores neque cupiditate natus autem incidunt magnam quasi blanditiis dolorum, quis facere corrupti provident voluptatibus atque quas iusto ab dicta placeat non reprehenderit voluptatum. Exercitationem voluptatibus quos doloremque id voluptates asperiores vel, qui eius dolorem hic aperiam corrupti in, laudantium provident </p><p>distinctio. Voluptatem amet doloribus aspernatur expedita sint accusamus molestias ipsam nobis natus aliquam, perferendis velit. Voluptatibus sint nam molestiae error, eos, cum fuga, excepturi sed amet repudiandae autem nulla qui soluta quod ipsa minus dolore commodi delectus possimus quam neque eius? Voluptatem natus placeat minus debitis quia </p><p>consequatur dolores, dignissimos id maiores, provident cum blanditiis deleniti, inventore quas? Distinctio, consequuntur soluta? Quae a reiciendis laudantium blanditiis. Nihil voluptatum officiis numquam tempore architecto? Mollitia, quaerat ipsum vero aliquid exercitationem iure sint! At illo iure tempora soluta temporibus voluptate quas! Optio officiis consequuntur obcaecati facilis aliquid magni nisi?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
    }
}
