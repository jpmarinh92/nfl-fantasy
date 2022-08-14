@extends('layout')

@section('title', 'Players')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center">
    <h1 class="display-4">Players</h1>
    <a class="btn btn-primary" href="{{ route('players.create')}}">Add Player</a>
  </div>
  <ul class="list-group">
    @forelse( $players as $player )
      <li class="list-group-item mb-1 shadow-sm">
        <a href="{{ route('players.show', $player->id) }}">
        <span class="fw-bold">
          {{ $player->first_name }} {{ $player->last_name }}
        </span>
        </a>
      </li>
    @empty
    <li> No players have been entered</li>
    @endforelse
</div>
@endsection