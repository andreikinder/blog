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
//        \App\Models\User::truncate();
//
//        \App\Models\Category::truncate();
//        \App\Models\Post::truncate();
//


         //\App\Models\User::factory(10)->create();
      $user =   \App\Models\User::factory()->create([
          'name' => 'John Doe'
      ]);

      Post::factory(10)->create([
          'user_id' => $user->id
      ]);





    }
}
