<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamsController extends Controller
{
  
    public function index()
      {
        $sql='SELECT * FROM teams';
        
        $teams = DB::select($sql) ;

        return view('teams', compact('teams'));


    }

    public function show($name){

      $playersSQL = 'SELECT * FROM players WHERE team_name = "'.$name.'"';
      $teamSQL = 'SELECT teams.*, SUM(players.salary) AS salary_cap 
                  FROM teams
                  LEFT JOIN players ON players.team_name = teams.name
                  WHERE teams.name = "'. $name . '"
                  GROUP BY teams.name';
      
      $team = DB::select($teamSQL)[0];
      $players = DB::select($playersSQL);


      return view('/teams/show', compact('team', 'players'));
    }

    public function create() {

      return view('/teams/create');
    }

    public function store() {

      $img = "https://nfl-jp.s3.amazonaws.com/".request()->file('image')->store('teams','s3');
      $fields = request()-> validate([
        'name' => 'required',
        'location' => 'required',
        'stadium' => 'required',
        'image' => 'required',
      ]);

      $fields['logo'] = $img;

      $sql = 'INSERT INTO teams (name, location, stadium, logo ) VALUES(?, ?, ?, ?)';
      $body = [$fields['name'], $fields['location'], $fields['stadium'], $fields['logo']];

      $newTeam = DB::insert($sql, $body);
      return redirect()->route('teams.index');
    }

    public function edit($name) {
      $teamSQL = 'SELECT * FROM teams WHERE name = "'.$name.'"';
      
      $team = DB::select($teamSQL)[0];

      return view('/teams/edit', compact('team'));
    }

    public function update($id) {

      $sql = 'UPDATE teams SET name ="'.request('name').'", location = "'.request('location').'", stadium = "'.request('stadium').'" WHERE id ='.$id;
      $team = DB::update($sql);
      return  redirect()->route('teams.index');

    }

    public function destroy($id) {

      $sql = 'DELETE FROM teams WHERE id ='.$id;
      $team = DB::delete($sql);

      return redirect()->route('teams');
    }

    public function saveImage($image, $folder_path = null, $user_avatar = null){

        $folder_path_complete = $folder_path ?? '';
        $info = explode(";", $image)[0];
        $applicationType = explode(":", $info)[1];
        $type = explode("/", $applicationType)[1];

        $image = str_replace("data:$applicationType;base64,", '', $image);
        $image = str_replace(' ', '+', $image);
        $file  = base64_decode($image);
        $name  = sha1(time()) .rand(1,100). ".$type";

        $folder = $folder_path_complete.$name;

        Storage::put($folder, $file, 'public');

        return $folder_path.$name;
    }

    public function createTeam(Request $request) {
      $this->saveImage($request->image);
    }

  }


