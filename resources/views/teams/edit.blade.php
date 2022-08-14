@extends('layout')

@section('title', 'Edit Team | '.$team->name)

@section('content')
<div class="container">
  <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('teams.update', ['id' => $team->id]) }}">
    @csrf @method('PATCH')

    <h1 h1 class="display-4">Edit Team</h1>
    
    <div class="form-group">
      <label for="name">Team Name</label>
      <input class="form-control bg-light shadow-sm @error('name') is-invalid @enderror)" 
        id="name"
        name="name" 
        placeholder="Team Name..." 
        value="{{ $team->name }}">
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="location">Team Name</label>
      <input class="form-control bg-light shadow-sm @error('location') is-invalid @enderror)" 
        id="location"
        name="location" 
        placeholder="Location..." 
        value="{{ $team->location }}">
        @error('location')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="stadium">Team Name</label>
      <input class="form-control bg-light shadow-sm @error('stadium') is-invalid @enderror)" 
        id="stadium"
        name="stadium" 
        placeholder="Stadium..." 
        value="{{ $team->stadium }}">
        @error('stadium')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
    
    <button class="btn btn-primary btn-lg col-12 mt-3">Edit Team</button>
  </form>
</div>
@endsection