<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Episode;
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
        //Genre
        Genre::create([
            'name' => 'Drama'
        ]);
        Genre::create([
            'name' => 'Kids'
        ]);
        Genre::create([
            'name' => 'TV Show'
        ]);
        //Movie-1
        Movie::create([
            'genre_id' => '1',
            'title' => 'The World Of The Married',
            'photo' => 'A.jpg',
            'description' => 'Ji Sun-woo, a family doctor who seemingly lives a perfect life, starts to seek revenge on her husband Lee Tae-O, whom she suspects is having an affair.',
            'rating' => '4'
        ]);
        Movie::create([
            'genre_id' => '1',
            'title' => 'Boys Over Flowers',
            'photo' => 'B.jpg',
            'description' => 'Jan Di, the Heroine, is the poor but bright girl who has a strong sense of justice and full of vitality. She transfers to an exclusive high school where only the rich go. In there, she encounters with the four rich and quirky boys and experiences love and friendship.',
            'rating' => '4'
        ]);
        Movie::create([
            'genre_id' => '1',
            'title' => 'Descendants of the Sun',
            'photo' => 'C.jpg',
            'description' => 'Yoo Shi Jin (Song Joong Ki), the leader of a Special Forces unit, meets trauma surgeon Kang Mo Yeon (Song Hye Kyo) in a hospital emergency room after Shi Jin and his second-in-command, Seo Dae Young (Jin Goo), chase down a thief on their day off.',
            'rating' => '5'
        ]);
        Movie::create([
            'genre_id' => '1',
            'title' => 'Goblin',
            'photo' => 'D.jpg',
            'description' => 'Kim Shin (Gong Yoo) is a decorated military general during the Goryeo Dynasty who is betrayed by the jealous king he served. When Kim Shin is faced with death instead of honor after fighting a mighty battle, God turns Kim Shin into a goblin.',
            'rating' => '3'
        ]);
        //Movie-2
        Movie::create([
            'genre_id' => '2',
            'title' => 'BoBoiBoy',
            'photo' => 'E.jpg',
            'description' => 'BoBoiBoy robot friend, Ochobot, has been kidnapped by a group of alien treasure hunters named The Tengkotak in order to use him to locate an ancient and powerful Sfera Kuasa hiding on earth.',
            'rating' => '4'
        ]);
        Movie::create([
            'genre_id' => '2',
            'title' => 'Thomas and Friends',
            'photo' => 'F.jpg',
            'description' => 'Life on the Island of Sodor is extremely busy for the engines. While Thomas and his friends are hard at work, they like to listen to music and sing along. So hop on board for toe-tappin fun with Thomas & Friends Songs and Stories.',
            'rating' => '5'
        ]);
        Movie::create([
            'genre_id' => '2',
            'title' => 'Dore the Explorer',
            'photo' => 'G.jpg',
            'description' => 'Dora is a 7-year old Latina girl. She is the main character and star of the show. She is very kind and never gets angry, even at Swiper who tries to steal her stuff. Dora tries to get all her friends and even children watching the show involved in her adventures.',
            'rating' => '3'
        ]);
        Movie::create([
            'genre_id' => '2',
            'title' => 'Spongebob Squarepants',
            'photo' => 'H.jpg',
            'description' => 'Spongebob Squarepants is a talking square sponge who lives in a pineapple under the sea. His relentless cheerfulness gets on the nerves of his grumpy neighbor, Squidward Tentacles. Spongebob works as a fry cook at the Krusty Krab, owned by the kind but greedy Mr. Krabs.',
            'rating' => '4'
        ]);
        //Movie-3
        Movie::create([
            'genre_id' => '3',
            'title' => 'NBC Sunday Night Football',
            'photo' => 'I.jpg',
            'description' => 'NBCs broadcast begins at 7 p.m. Eastern Time with its pre-game show, which runs until kickoff.The show serves the same purpose as NFL Primetime did for ESPN, offering recaps of the early action as well as a preview of the game to come.',
            'rating' => '4'
        ]);
        Movie::create([
            'genre_id' => '3',
            'title' => 'NCIS',
            'photo' => 'J.jpg',
            'description' => 'American police procedural television series, revolving around a fictional team of special agents from the Naval Criminal Investigative Service combining elements of the military drama and police procedural genres.',
            'rating' => '3'
        ]);
        Movie::create([
            'genre_id' => '3',
            'title' => '60 Minutes',
            'photo' => 'K.jpg',
            'description' => 'The oldest and most-watched newsmagazine on television gets the real story on Americas most prevalent issues. CBS News correspondents contribute segments to each hourlong episode. Topics range from hard news coverage to politics, lifestyle, pop culture, etc',
            'rating' => '4'
        ]);
        Movie::create([
            'genre_id' => '3',
            'title' => 'Chicago Med',
            'photo' => 'L.jpg',
            'description' => 'The doctors and nurses who work at the emergency ward of the Gaffney Chicago Medical Center strive to save the lives of their patients while dealing with personal and interpersonal issues.',
            'rating' => '5'
        ]);
        //Episode Movie 1
        Episode::create([
            'movie_id'=>'1',
            'episode' => '1',
            'title' => 'Infidelity'
        ]);
        Episode::create([
            'movie_id'=>'1',
            'episode' => '2',
            'title' => 'What is going on?'
        ]);
        Episode::create([
            'movie_id' => '1',
            'episode' => '3',
            'title' => 'Who is she?'
        ]);
        Episode::create([
            'movie_id' => '1',
            'episode' => '4',
            'title' => 'Dealing'
        ]);
        Episode::create([
            'movie_id' => '1',
            'episode' => '5',
            'title' => 'Affair'
        ]);
        Episode::create([
            'movie_id' => '1',
            'episode' => '6',
            'title' => 'Divorce'
        ]);
        Episode::create([
            'movie_id' => '1',
            'episode' => '7',
            'title' => 'Anxious'
        ]);
        Episode::create([
            'movie_id' => '1',
            'episode' => '8',
            'title' => 'The Truth'
        ]);
        Episode::create([
            'movie_id' => '1',
            'episode' => '9',
            'title' => 'Worried of Tae-Oh'
        ]);
        //Episode - Movie 2
        Episode::create([
            'movie_id' => '2',
            'episode' => '1',
            'title' => 'Saving a suicidal student'
        ]);
        Episode::create([
            'movie_id' => '2',
            'episode' => '2',
            'title' => 'Jan Di become popular'
        ]);
        Episode::create([
            'movie_id' => '2',
            'episode' => '3',
            'title' => 'The Mean Girls Trio'
        ]);
        Episode::create([
            'movie_id' => '2',
            'episode' => '4',
            'title' => 'Beatrayal'
        ]);
        Episode::create([
            'movie_id' => '2',
            'episode' => '5',
            'title' => 'Jan Di is my girlfriend!'
        ]);
        Episode::create([
            'movie_id' => '2',
            'episode' => '6',
            'title' => 'A triangle love'
        ]);
        Episode::create([
            'movie_id' => '2',
            'episode' => '7',
            'title' => 'Joon Pyo'
        ]);
        Episode::create([
            'movie_id' => '2',
            'episode' => '8',
            'title' => 'The competition ends'
        ]);
        Episode::create([
            'movie_id' => '2',
            'episode' => '9',
            'title' => 'Overnighted?'
        ]);
        //Episode - Movie 3
        Episode::create([
            'movie_id' => '3',
            'episode' => '1',
            'title' => 'Strong-Willed Surgeon'
        ]);
        Episode::create([
            'movie_id' => '3',
            'episode' => '2',
            'title' => 'Meet again?'
        ]);
        Episode::create([
            'movie_id' => '3',
            'episode' => '3',
            'title' => 'Si-jin and Mo-yeon'
        ]);
        Episode::create([
            'movie_id' => '3',
            'episode' => '4',
            'title' => 'Tempers flare'
        ]);
        Episode::create([
            'movie_id' => '3',
            'episode' => '5',
            'title' => 'Feeling confused'
        ]);
        Episode::create([
            'movie_id' => '3',
            'episode' => '6',
            'title' => 'Earthquake strikes the city'
        ]);
        Episode::create([
            'movie_id' => '3',
            'episode' => '7',
            'title' => 'Heartbreaking decisions'
        ]);
        Episode::create([
            'movie_id' => '3',
            'episode' => '8',
            'title' => 'Healing romance'
        ]);
        Episode::create([
            'movie_id' => '3',
            'episode' => '9',
            'title' => 'Unexpected visitor'
        ]);
        //Episode - Movie 4
        Episode::create([
            'movie_id' => '4',
            'episode' => '1',
            'title' => 'What Kind of a Guardian Are You?'
        ]);
        Episode::create([
            'movie_id' => '4',
            'episode' => '2',
            'title' => 'I will Become Your Bride in 200 Years'
        ]);
        Episode::create([
            'movie_id' => '4',
            'episode' => '3',
            'title' => 'I See the Sword'
        ]);
        Episode::create([
            'movie_id' => '4',
            'episode' => '4',
            'title' => 'I Will Not Leave You'
        ]);
        Episode::create([
            'movie_id' => '4',
            'episode' => '5',
            'title' => 'I Have to End My Life'
        ]);
        Episode::create([
            'movie_id' => '4',
            'episode' => '6',
            'title' => 'Tomorrow'
        ]);
        Episode::create([
            'movie_id' => '4',
            'episode' => '7',
            'title' => 'I Think Your Face'
        ]);
        Episode::create([
            'movie_id' => '4',
            'episode' => '8',
            'title' => 'You Gave Her That Fate'
        ]);
        Episode::create([
            'movie_id' => '4',
            'episode' => '9',
            'title' => 'Is She Really Your Sister?'
        ]);
        //Episode - Movie 5
        Episode::create([
            'movie_id' => '5',
            'episode' => '1',
            'title' => 'The Rise of BoBoiBoy'
        ]);
        Episode::create([
            'movie_id' => '5',
            'episode' => '2',
            'title' => 'Adu Du Attacks!'
        ]);
        Episode::create([
            'movie_id' => '5',
            'episode' => '3',
            'title' => 'The Multi-Monster'
        ]);
        Episode::create([
            'movie_id' => '5',
            'episode' => '4',
            'title' => 'Team BoBoiBoy'
        ]);
        Episode::create([
            'movie_id' => '5',
            'episode' => '5',
            'title' => 'BoBoiBoy Weakness'
        ]);
        Episode::create([
            'movie_id' => '5',
            'episode' => '6',
            'title' => 'A New Form Awakens!'
        ]);
        Episode::create([
            'movie_id' => '5',
            'episode' => '7',
            'title' => 'Game On!'
        ]);
        Episode::create([
            'movie_id' => '5',
            'episode' => '8',
            'title' => 'The Dream World'
        ]);
        Episode::create([
            'movie_id' => '5',
            'episode' => '9',
            'title' => 'Checkers'
        ]);
        //Episode - Movie 6
        Episode::create([
            'movie_id' => '6',
            'episode' => '1',
            'title' => 'Thomas and the Royal Engine'
        ]);
        Episode::create([
            'movie_id' => '6',
            'episode' => '2',
            'title' => 'Thomas Fuzzy Friend'
        ]);
        Episode::create([
            'movie_id' => '6',
            'episode' => '3',
            'title' => 'The Great Little Railway Show'
        ]);
        Episode::create([
            'movie_id' => '6',
            'episode' => '4',
            'title' => 'Thomas and the Forest Engines'
        ]);
        Episode::create([
            'movie_id' => '6',
            'episode' => '5',
            'title' => 'Emily to the Rescue'
        ]);
        Episode::create([
            'movie_id' => '6',
            'episode' => '6',
            'title' => 'Nia and the Unfriendly Elephant'
        ]);
        Episode::create([
            'movie_id' => '6',
            'episode' => '7',
            'title' => 'Shankar Makeover'
        ]);
        Episode::create([
            'movie_id' => '6',
            'episode' => '8',
            'title' => 'James the Super Engine'
        ]);
        Episode::create([
            'movie_id' => '6',
            'episode' => '9',
            'title' => 'Yong Bao and the Tiger'
        ]);
        //Episode - Movie 7
        Episode::create([
            'movie_id' => '7',
            'episode' => '1',
            'title' => 'The Big Red Chicken'
        ]);
        Episode::create([
            'movie_id' => '7',
            'episode' => '2',
            'title' => 'Lost and Found'
        ]);
        Episode::create([
            'movie_id' => '7',
            'episode' => '3',
            'title' => 'Hic-Boom-Ohhh'
        ]);
        Episode::create([
            'movie_id' => '7',
            'episode' => '4',
            'title' => 'Beaches'
        ]);
        Episode::create([
            'movie_id' => '7',
            'episode' => '5',
            'title' => 'We All Scream for Ice Cream'
        ]);
        Episode::create([
            'movie_id' => '7',
            'episode' => '6',
            'title' => 'Choo Choo'
        ]);
        Episode::create([
            'movie_id' => '7',
            'episode' => '7',
            'title' => 'Treasure Island'
        ]);
        Episode::create([
            'movie_id' => '7',
            'episode' => '8',
            'title' => 'Big River'
        ]);
        Episode::create([
            'movie_id' => '7',
            'episode' => '9',
            'title' => 'Berry Hunt'
        ]);
        //Episode - Movie 8
        Episode::create([
            'movie_id' => '8',
            'episode' => '1',
            'title' => 'Help Wanted'
        ]);
        Episode::create([
            'movie_id' => '8',
            'episode' => '2',
            'title' => 'Ripped Pants'
        ]);
        Episode::create([
            'movie_id' => '8',
            'episode' => '3',
            'title' => 'Plankton!'
        ]);
        Episode::create([
            'movie_id' => '8',
            'episode' => '4',
            'title' => 'Boating School'
        ]);
        Episode::create([
            'movie_id' => '8',
            'episode' => '5',
            'title' => 'Home Sweet Pineapple'
        ]);
        Episode::create([
            'movie_id' => '8',
            'episode' => '6',
            'title' => 'Pickles'
        ]);
        Episode::create([
            'movie_id' => '8',
            'episode' => '7',
            'title' => 'Hall Monitor'
        ]);
        Episode::create([
            'movie_id' => '8',
            'episode' => '8',
            'title' => 'Nature Pants'
        ]);
        Episode::create([
            'movie_id' => '8',
            'episode' => '9',
            'title' => 'F.U.N'
        ]);
        //Episode - Movie 9
        Episode::create([
            'movie_id' => '9',
            'episode' => '1',
            'title' => 'Miami Dolphins vs. Pittsburgh Steelers'
        ]);
        Episode::create([
            'movie_id' => '9',
            'episode' => '2',
            'title' => 'Indianapolis Colts vs. New York Giants'
        ]);
        Episode::create([
            'movie_id' => '9',
            'episode' => '3',
            'title' => 'Washington Redskins vs. Dallas Cowboys'
        ]);
        Episode::create([
            'movie_id' => '9',
            'episode' => '4',
            'title' => 'Denver Broncos vs. New England Patriots'
        ]);
        Episode::create([
            'movie_id' => '9',
            'episode' => '5',
            'title' => 'Seattle Seahawks vs. Chicago Bears'
        ]);
        Episode::create([
            'movie_id' => '9',
            'episode' => '6',
            'title' => 'Pittsburgh Steelers vs. San Diego Chargers'
        ]);
        Episode::create([
            'movie_id' => '9',
            'episode' => '7',
            'title' => 'Oakland Raiders vs. Denver Broncos'
        ]);
        Episode::create([
            'movie_id' => '9',
            'episode' => '8',
            'title' => 'Dallas Cowboys vs. Carolina Panthers'
        ]);
        Episode::create([
            'movie_id' => '9',
            'episode' => '9',
            'title' => 'Indianapolis Colts vs. New England Patriots'
        ]);
        //Episode - Movie 10
        Episode::create([
            'movie_id' => '10',
            'episode' => '1',
            'title' => 'Blood in the Water'
        ]);
        Episode::create([
            'movie_id' => '10',
            'episode' => '2',
            'title' => 'Nearly Departed'
        ]);
        Episode::create([
            'movie_id' => '10',
            'episode' => '3',
            'title' => 'Road to Nowhere'
        ]);
        Episode::create([
            'movie_id' => '10',
            'episode' => '4',
            'title' => 'Great Wide Open'
        ]);
        Episode::create([
            'movie_id' => '10',
            'episode' => '5',
            'title' => 'Face the Strange'
        ]);
        Episode::create([
            'movie_id' => '10',
            'episode' => '6',
            'title' => 'False Start'
        ]);
        Episode::create([
            'movie_id' => '10',
            'episode' => '7',
            'title' => 'Docked'
        ]);
        Episode::create([
            'movie_id' => '10',
            'episode' => '8',
            'title' => 'Peacekeeper'
        ]);
        Episode::create([
            'movie_id' => '10',
            'episode' => '9',
            'title' => 'Pledge of Allegiance'
        ]);
        //Episode - Movie 11
        Episode::create([
            'movie_id' => '11',
            'episode' => '1',
            'title' => 'The FDNY'
        ]);
        Episode::create([
            'movie_id' => '11',
            'episode' => '2',
            'title' => 'King of the Deep'
        ]);
        Episode::create([
            'movie_id' => '11',
            'episode' => '3',
            'title' => 'The Final Act'
        ]);
        Episode::create([
            'movie_id' => '11',
            'episode' => '4',
            'title' => 'Whither Ye Olde English Pub'
        ]);
        Episode::create([
            'movie_id' => '11',
            'episode' => '5',
            'title' => 'Running Dry'
        ]);
        Episode::create([
            'movie_id' => '11',
            'episode' => '6',
            'title' => 'A New Model'
        ]);
        Episode::create([
            'movie_id' => '11',
            'episode' => '7',
            'title' => 'The Get Back Sessions'
        ]);
        Episode::create([
            'movie_id' => '11',
            'episode' => '8',
            'title' => 'Caligula Gardens'
        ]);
        Episode::create([
            'movie_id' => '11',
            'episode' => '9',
            'title' => 'Rita Moreno'
        ]);
        //Episode - Movie 12
        Episode::create([
            'movie_id' => '12',
            'episode' => '1',
            'title' => 'You Can Not Always Trust What You See'
        ]);
        Episode::create([
            'movie_id' => '12',
            'episode' => '2',
            'title' => 'To Lean In, or to Let Go'
        ]);
        Episode::create([
            'movie_id' => '12',
            'episode' => '3',
            'title' => 'RBe the Change You Want to See'
        ]);
        Episode::create([
            'movie_id' => '12',
            'episode' => '4',
            'title' => 'Status Quo, aka the Mess We are in'
        ]);
        Episode::create([
            'movie_id' => '12',
            'episode' => '5',
            'title' => 'Change Is a Tough Pill to Swallow'
        ]);
        Episode::create([
            'movie_id' => '12',
            'episode' => '6',
            'title' => 'A Square Peg in a Round Hole'
        ]);
        Episode::create([
            'movie_id' => '12',
            'episode' => '7',
            'title' => 'Just as a Snake Sheds Its Skin'
        ]);
        Episode::create([
            'movie_id' => '12',
            'episode' => '8',
            'title' => 'Secret Santa Has a Gift for You'
        ]);
        Episode::create([
            'movie_id' => '12',
            'episode' => '9',
            'title' => 'Judge Not, for You Will Be Judged'
        ]);
    }
}
