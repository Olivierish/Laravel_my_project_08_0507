<?php

use App\Post;
use Illuminate\Database\Seeder;

/**
 * Summary of PostSeeder
 */
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = array(
            "First Man: The Life of Neil A. Armstrong" => "First Man: The Life of Neil A. Armstrong by James R. Hansen",
            "Neil Armstrong: A Life of Flight" => "Neil Armstrong: A Life of Flight by Jay Barbree",
            "Moonshot: The Flight of Apollo 11" => "Moonshot: The Flight of Apollo 11 by Brian Floca",
            "Neil Armstrong: Young Flyer" => "Neil Armstrong: Young Flyer by Montrew Dunham",
            "Carrying the Fire: An Astronaut's Journeys" => "Carrying the Fire: An Astronaut's Journeys by Michael Collins",
            "Neil Armstrong: One Giant Leap for Mankind" => "Neil Armstrong: One Giant Leap for Mankind by Tara Dixon-Engel and Mike Jackson",
            "Neil Armstrong: A Life of Exploration" => "Neil Armstrong: A Life of Exploration by Jay Parisi"
        );

        foreach ($post as $key => $value) {
            $newpost = new Post(
                [
                    'name' => $key,
                    'beschreibung' => $value,
                ]
                );
            $newpost->save();
        }
    }
}
