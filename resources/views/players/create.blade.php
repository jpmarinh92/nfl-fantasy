@extends('layout')

@section('title', 'Add Player')

@section('content')
<div class="container">
  <form  class="bg-white shadow rounded py-3 px-4" method="POST" enctype="multipart/form-data" action="{{ route('players.store') }}">
    @csrf

    <h1 class="display-4">Add A Player</h1>
    
    <div class="form-group">
      <label for="first_name">First Name</label>
      <input class="form-control bg-light shadow-sm @error('first_name') is-invalid @enderror)" 
        id="first_name"
        name="first_name" 
        placeholder="First Name..." 
        value="{{ old('first_name') }}">
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
        value="{{ old('last_name') }}">
        @error('last_name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="number">Number</label>
      <input class="form-control bg-light shadow-sm @error('number') is-invalid @enderror)" 
        id="number"
        name="number" 
        placeholder="Number..." 
        value="{{ old('number') }}">
        @error('number')
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
        value="{{ old('position') }}">
        @error('position')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="age">Age</label>
      <input class="form-control bg-light shadow-sm @error('age') is-invalid @enderror)" 
        id="age"
        name="age" 
        placeholder="Age..." 
        value="{{ old('age') }}">
        @error('age')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="college">College</label>
      <input class="form-control bg-light shadow-sm @error('college') is-invalid @enderror)" 
        id="college"
        name="college" 
        placeholder="College..." 
        value="{{ old('college') }}">
        @error('college')
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
        value="{{ old('salary') }}">
        @error('salary')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    {{-- <div class="form-group">
      <label for="team_name">Team Name</label>
      <input class="form-control bg-light shadow-sm @error('team_name') is-invalid @enderror)" 
        id="team_name"
        name="team_name" 
        placeholder="Team Name..." 
        value="{{ old('team_name') }}">
        @error('team_name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div> --}}
   
    <div class ="form-group">
      <label for="team_name">Team Name:</label>
      <select name="team_name" id="team_name" class="form-control bg-light shadow-sm @error('team_name') is-invalid @enderror)">
        <option value="" disabled selected>Select a team</option>
        @forelse ($teams as $team)
        <option value="{{$team->name}}">{{$team->name}}</option>
        @empty
          <option value="No Team">No Team</option>
        @endforelse
      </select>   
    </div>

    <div class="custom-file form-group form-control-lg">
      <input name="image" type="file" class="custom-file-input form-control-lg" id="customFile">
      <label class="custom-file-label" for="customFile">Add Photo</label>
    </div>


    <button class="btn btn-primary btn-lg col-12 mt-3">Add Player</button>
  </form>
@endsection