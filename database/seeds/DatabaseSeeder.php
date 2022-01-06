<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(App\Blog::class, 50)->create()->each(function ($blog) {
            for ($i = 1; $i <= 5; $i++) {
                $blog->Comments()->save(factory(App\BlogComment::class)->make());
            }
        });
    }
}
