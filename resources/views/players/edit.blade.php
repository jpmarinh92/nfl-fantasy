@extends('layout')

@section('title', 'Edit Player | '. $player->first_name . $player->last_name)

@section('content')
<div class="container">
  <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('players.update', ['id' => $player->id]) }}">
    @csrf @method('PATCH')
    
    <h1 h1 class="display-4">Edit Player</h1>
    
    <div class="form-group">
      <label for="first_name">First Name</label>
      <input class="form-control bg-light shadow-sm @error('first_name') is-invalid @enderror)" 
        id="first_name"
        name="first_name" 
        placeholder="First Name..." 
        value="{{ $player->first_name }}">
        @error('first_name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="last_name">Last Name</label>
      <input class="form-control bg-light shadow-sm @error('last_name') is-invalid @enderror)" 
        id="last_name"
        name="last_name" 
        placeholder="Last Name..." 
        value="{{ $player->last_name }}">
        @error('last_name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="salary">Salary</label>
      <input class="form-control bg-light shadow-sm @error('salary') is-invalid @enderror)" 
        id="salary"
        name="salary" 
        placeholder="Salary..." 
        value="{{ $player->salary }}">
        @error('salary')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="position">Position</label>
      <input class="form-control bg-light shadow-sm @error('position') is-invalid @enderror)" 
        id="position"
        name="position" 
        placeholder="Position..." 
        value="{{ $player->position }}">
        @error('position')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="team_name">Team</label>
      <input class="form-control bg-light shadow-sm @error('team_name') is-invalid @enderror)" 
        id="team_name"
        name="team_name" 
        placeholder="Team..." 
        value="{{ $player->team_name }}">
        @error('team_name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <button class="btn btn-primary btn-lg col-12 mt-3">Edit Player</button>
  </form>
</div>
@endsection