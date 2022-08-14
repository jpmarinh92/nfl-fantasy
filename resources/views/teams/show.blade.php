@extends('layout')

@section('title', 'Teams | ' . $team->name)

@section('content')
<div class="container">
  
  <div class="bg-white p-5 shadow rounded d-flex flex-column mb-2">
    <div class="team">
      <div class="team_photo">
        <img src="{{$team->logo}}" alt="{{ $team->name }}" width="400" height="350">
      </div>

      <div class="team_info">
        <h1>{{$team->name}}</h1>
        <p class="fs-3">Team Name: {{$team->name}}</p>
        <p class="fs-3">Location: {{$team->location}}</p>
        <p class="fs-3">Stadium: {{$team->stadium}}</p>
        <p class="fs-3">Salary Cap: {{$team->salary_cap}}</p>
      </div>
    </div>

    <div class="d-flex align-self-center">
      <a class="btn btn-primary me-3 btn-sm" href="{{ route('teams.edit', ['name' => $team->name]) }}">Edit</a>
      <form method="POST" action="{{ route('teams.destroy', ['id' => $team->id]) }}">
        @csrf @method("DELETE")
        <button class="btn btn-danger btn-sm">Delete Team</button>
      </form>
    </div>

  </div>

  <div class="bg-white p-5 shadow rounded">
    <section class="roster">
      <div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col" style="width: 50%">Player</th>
              <th scope="col" style="width: 10%">#</th>
              <th scope="col" style="width: 10%">Position</th>
              <th scope="col" style="width: 10%">Age</th>
              <th scope="col" style="width: 10%">College</th>
              <th scope="col" style="width: 10%">Salary</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($players as $player)
              <tr>
                <th scope="row">
                  <a href="{{ route('players.show', $player->id) }}">
                    <img src="{{$player->image}}" alt="{{ $player->first_name }} {{ $player->last_name }}" width="110" height="100"> {{$player->first_name}} {{$player->last_name}}</th>
                  </a>
                <th>{{$player->number}}</th>
                <th>{{$player->position}}</th>
                <th>{{$player->age}}</th>
                <th>{{$player->college}}</th>
                <th>{{$player->salary}}</th>
              </tr>
            @empty
              <p> No players have been entered</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>



@endsection