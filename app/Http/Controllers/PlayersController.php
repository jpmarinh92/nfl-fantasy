<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{
    public function index(){
      $sql='SELECT * FROM players ORDER BY last_name';

      $players = DB::select($sql);

      return view('players', compact('players'));
    }

    public function show($id){
      
      $sql='SELECT * FROM players WHERE id='.$id;

      $player = DB::select($sql)[0];

      return view('/players/show', compact('player'));
    }

    public function create() {
      $sql="SELECT name FROM teams";
      $teams = DB::select($sql);

      return view('players/create', compact('teams'));
    }

    public function store() {
      
      $img = "https://nfl-jp.s3.amazonaws.com/".request()->file('image')->store('players','s3');
      $fields = request()-> validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'image' => 'required',
        'number'=> 'required',
        'position' => 'required',
        'age' => 'required',
        'college' => 'required',
        'salary' => 'required',
        'team_name'=> 'required'
      ]);
      $fields['image'] = $img;

      $sql = 'INSERT INTO players (first_name, last_name, image, number, position, age, college, salary, team_name ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)';
      $body = [$fields['first_name'], $fields['last_name'], $fields['image'], $fields['number'], $fields['position'], $fields['age'], $fields['college'], $fields['salary'], $fields['team_name']];

      $newPlayer = DB::insert($sql, $body);
      
      return redirect()->route('players.index');
    }

    public function edit($id) {

      $sql = 'SELECT * FROM players WHERE id = '.$id;
      $sql2 = 'SELECT name FROM teams';
      
      $player = DB::select($sql)[0];
      $teams = DB::select($sql2);
    
      return view('/players/edit', compact('player', 'teams'));
    }

    public function update($id) {

      $sql = 'UPDATE players SET first_name ="'.request('first_name').'", last_name="'.request('last_name').'", position = "'.request('position').'", 
              salary = '.request('salary').', team_name ="'.request('team_name').'" WHERE id ='.$id;

      $player = DB::update($sql);
      return  redirect()->route('players.index');

    }

    public function destroy($id) {
      $sql = 'DELETE FROM players WHERE id ='.$id;
      $player = DB::delete($sql);

      return redirect()->route('players.index');
    }
}
