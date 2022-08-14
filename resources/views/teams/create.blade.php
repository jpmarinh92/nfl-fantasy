@extends('layout')

@section('title', 'Add Team')

@section('content')
<div class="container">
  <form class="bg-white shadow rounded py-3 px-4" method="POST" enctype="multipart/form-data" action="{{ route('teams.store') }}">
    @csrf

    <h1 class="display-4">Add A Team</h1>
    
    <div class="form-group">
      <label for="name">Team Name</label>
      <input class="form-control bg-light shadow-sm @error('name') is-invalid @enderror)" 
        id="name"
        name="name" 
        placeholder="Team Name..." 
        value="{{ old('name') }}">
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="location">Location</label>
      <input class="form-control bg-light shadow-sm @error('location') is-invalid @enderror)" 
        id="location"
        name="location" 
        placeholder="Location..." 
        value="{{ old('location') }}">
        @error('location')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="stadium">Team Stadium</label>
      <input class="form-control bg-light shadow-sm @error('stadium') is-invalid @enderror)" 
        id="stadium"
        name="stadium" 
        placeholder="Stadium..." 
        value="{{ old('stadium') }}">
        @error('stadium')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>

    <div class="custom-file">
      <input name="image" type="file" class="custom-file-input" id="customFile">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>

    <button class="btn btn-primary btn-lg col-12 mt-3">Add Photo</button>
  </form>
</div>
@endsection