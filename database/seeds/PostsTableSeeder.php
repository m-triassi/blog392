<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $author = User::where('name', "Massimo Triassi")->first();
        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'id'=> \Ramsey\Uuid\Uuid::uuid4(),
                'title' => "Article About Something " . ($i+1),
                'slug' => "something-" . ($i+1),
                'excerpt' => substr($loremIpsum, 0, 25),
                'body' => $loremIpsum,
                'status' => 'published',
                'author_id' => $author->id
            ]);
        }
    }
}
