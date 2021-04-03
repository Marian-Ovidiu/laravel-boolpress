<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;
use App\Post;
use App\Comment;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i< 25; $i++){

            $author = new Author();
            $author->name = $faker->firstname();
            $author->surname = $faker->lastname();
            $author->email = $faker->email();
            $author->save();

            $authorDetail = new AuthorDetail();
            $authorDetail->bio = $faker->text();
            $authorDetail->website = $faker->url();
            $authorDetail->pic = 'https://picsum.photos/seed/'. rand(0, 1000) . '/200/300';
            $author->detail()->save($authorDetail);

            for ($x = 0; $x < rand(2, 5); $x++) {
                $post = new Post();
                $post->title = $faker->text(20);
                $post->body = $faker-> text(1000);
                $author->posts()->save($post);

                for ($j = 0; $j < rand(1, 6); $j++) {
                    $comment = new Comment();
                    $comment->comment = $faker->text(rand(20, 255));
                    $post->comments()->save($comment);
                }

            }
        }

    }
}
