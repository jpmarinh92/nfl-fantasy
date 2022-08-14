<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $teams = [
            ['name' => 'Vikings', 'location' => 'Minnesota', 'stadium' => 'US Bank Stadium', "logo" => "https://nfl-jp.s3.amazonaws.com/teams/Vikings.png"],
            ['name' => 'Panthers', 'location' => 'Carolina', 'stadium' => 'Bank Of America Stadium', "logo" => "https://nfl-jp.s3.amazonaws.com/teams/Panthers.png"],
            ['name' => 'Chiefs', 'location' => 'Kansas City', 'stadium' => 'Arrow Head Stadium', "logo" => "https://nfl-jp.s3.amazonaws.com/teams/Chiefs.png"],
        ];
      
      foreach ($teams as $team) {
        DB::table('teams')->insert($team);
      }
    }
}
