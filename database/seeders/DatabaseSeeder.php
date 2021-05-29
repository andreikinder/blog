<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        \App\Models\User::truncate();

        \App\Models\Category::truncate();
        \App\Models\Post::truncate();



         //\App\Models\User::factory(10)->create();
      $user =   \App\Models\User::factory()->create();

       $personal =   Category::create([
              'name' => 'Personal',
              'slug' => 'personal'
          ]);


        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);



        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);


        Post::create([
            'user_id'=> $user->id,
            'category_id' => $family->id,
            'title' => 'My family post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem inp',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam, amet asperiores assumenda autem cumque eius, est eum fugit illum ipsum laboriosam laudantium necessitatibus, nihil nostrum placeat rem sunt tenetur veniam voluptatum!
            Accusamus, dolorum fugiat? Autem debitis, dolore fugiat nam nihil quaerat quisquam quo rem.
            Adipisci aliquid amet cupiditate ea eius incidunt iste neque nisi praesentium, saepe, sint unde!
            Accusantium corporis doloremque ducimus eum impedit,
            nam nisi nostrum nulla odit officia omnis qui quo quod reprehenderit similique.
            Beatae ea fugit omnis porro rerum. Ab aliquam aperiam architecto atque dicta laudantium maiores,
            modi nesciunt officia perspiciatis placeat praesentium quaerat sapiente ullam!'
        ]);

        Post::create([
            'user_id'=> $user->id,
            'category_id' => $personal->id,
            'title' => 'My personal post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem inp',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam, amet asperiores assumenda autem cumque eius, est eum fugit illum ipsum laboriosam laudantium necessitatibus, nihil nostrum placeat rem sunt tenetur veniam voluptatum!
            Accusamus, dolorum fugiat? Autem debitis, dolore fugiat nam nihil quaerat quisquam quo rem.
            Adipisci aliquid amet cupiditate ea eius incidunt iste neque nisi praesentium, saepe, sint unde!
            Accusantium corporis doloremque ducimus eum impedit,
            nam nisi nostrum nulla odit officia omnis qui quo quod reprehenderit similique.
            Beatae ea fugit omnis porro rerum. Ab aliquam aperiam architecto atque dicta laudantium maiores,
            modi nesciunt officia perspiciatis placeat praesentium quaerat sapiente ullam!'
        ]);

        Post::create([
            'user_id'=> $user->id,
            'category_id' => $work->id,
            'title' => 'My work post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem inp',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam, amet asperiores assumenda autem cumque eius, est eum fugit illum ipsum laboriosam laudantium necessitatibus, nihil nostrum placeat rem sunt tenetur veniam voluptatum!
            Accusamus, dolorum fugiat? Autem debitis, dolore fugiat nam nihil quaerat quisquam quo rem.
            Adipisci aliquid amet cupiditate ea eius incidunt iste neque nisi praesentium, saepe, sint unde!
            Accusantium corporis doloremque ducimus eum impedit,
            nam nisi nostrum nulla odit officia omnis qui quo quod reprehenderit similique.
            Beatae ea fugit omnis porro rerum. Ab aliquam aperiam architecto atque dicta laudantium maiores,
            modi nesciunt officia perspiciatis placeat praesentium quaerat sapiente ullam!'
        ]);



    }
}
