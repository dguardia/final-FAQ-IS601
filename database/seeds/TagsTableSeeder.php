<?php

use App\Question;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::inRandomOrder();
        for ($i = 1; $i <= 30; $i++) {
            $users->each(function ($user) {
                $question = Question::inRandomOrder()->first();
                $tag = factory(Tag::class)->make();
                $tag->user()->associate($user);
                $tag->question()->associate($question);
                $tag->save();
            });
        }
    }
}
