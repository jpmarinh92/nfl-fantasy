@extends('layout')

@section('title', 'Teams')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center">
    <h1 class="display-4">Teams</h1>
    <a class="btn btn-primary" href="{{ route('teams.create')}}">Add Team</a>
  </div>
  <ul class="list-group">
    @forelse( $teams as $team )
      <li class="list-group-item mb-1 shadow-sm">
        <a href="{{ route('teams.show', $team->name) }}">
          <span class="font-weight-bold">
            {{ $team->location }} {{ $team->name }} 
          </span>
        </a>
      </li>
    @empty
    <li> No teams have been entered</li>
    @endforelse
  </ul>
</div>
@endsection