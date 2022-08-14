<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{

    public function run()
    {
      $players = [
        ["first_name" =>"Kirk", "last_name" => "Cousins", "image" => "https://nfl-jp.s3.amazonaws.com/players/KirkCousins.png","number"=> 8, "age"=> 34, "college"=> "Michigan State", "position"=> "QB","team_name" => "Vikings", "salary" => 40],
        ["first_name" =>"Dalvin", "last_name" => "Cook", "image" => "https://nfl-jp.s3.amazonaws.com/players/DalvinCook.png","number"=> 4, "age"=> 27, "college"=> "Florida State", "position"=> "RB","team_name" => "Vikings", "salary" => 20],
        ["first_name" =>"Justin", "last_name" => "Jefferson", "image" => "https://nfl-jp.s3.amazonaws.com/players/JustinJefferson.png","number"=> 18, "age"=> 23, "college"=> "LSU", "position"=> "WR","team_name" => "Vikings", "salary" => 10],
        ["first_name" =>"Baker", "last_name" => "Mayfield", "image" => "https://nfl-jp.s3.amazonaws.com/players/BakerMayfield.png","number"=> 6, "age"=> 27, "college"=> "Oklahoma", "position"=> "QB","team_name" => "Panthers", "salary" => 20],
        ["first_name" =>"Christian", "last_name" => "McCaffrey", "image" => "https://nfl-jp.s3.amazonaws.com/players/ChristianMcCaffrey.png","number"=> 22, "age"=> 26, "college"=> "Stanford", "position"=> "RB","team_name" => "Panthers", "salary" => 30],
        ["first_name" =>"D. J.", "last_name" => "Moore", "image" => "https://nfl-jp.s3.amazonaws.com/players/DJMoore.png","number"=> 2, "age"=> 25, "college"=> "Maryland", "position"=> "WR","team_name" => "Panthers", "salary" => 15],
        ["first_name" =>"Patrick", "last_name" => "Mahomes", "image" => "https://nfl-jp.s3.amazonaws.com/players/PatrickMahomes.png","number"=> 15, "age"=> 26, "college"=> "Texas Tech", "position"=> "QB","team_name" => "Chiefs", "salary" => 50],
        ["first_name" =>"Travis", "last_name" => "Kelce", "image" => "https://nfl-jp.s3.amazonaws.com/players/TravisKelce.png","number"=> 87, "age"=> 32, "college"=> "Cincinnati", "position"=> "TE","team_name" => "Chiefs", "salary" => 20],
        ["first_name" =>"JuJu", "last_name" => "Smith-Schuster", "image" => "https://nfl-jp.s3.amazonaws.com/players/JuJuSmithSchuster.png","number"=> 9, "age"=> 25, "college"=> "Southern California", "position"=> "WR","team_name" => "Chiefs", "salary" => 15]
      ];

      DB::table('players')->insert($players);
    }
}
