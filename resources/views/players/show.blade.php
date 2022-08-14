@extends('layout')

@section('title', 'Players | ' . $player->first_name . $player->last_name)

@section('content')
<div class="container">
  <div class="bg-white p-2 shadow rounded d-flex flex-column align-items-center">
    <section class="player d-flex jusitfy-content-center">
      <div class="player_photo">
        <img class="rounded"src="{{$player->image}}" alt="{{ $player->first_name }} {{ $player->last_name }}" width="490" height="350">
      </div>
      <div class="player_info bg-black text-white rounded pl-2 bg-opacity-75" style="min-width: 490px; padding-left: 25px; max-height: 350px;">
        <h1>{{$player->first_name}} {{$player->last_name}}</h1>
        <p class="fs-3">{{ $player->position }}</p>
        <p class="fs-3">#{{ $player->number }}</p>
        <p class="fs-4">Age: {{ $player->age }}</p>
        <p class="fs-4">College: {{ $player->college }}</p>
        <p class="fs-4">Salary: {{ $player->salary }}</p>
        <P  class="fs-4">Team: {{$player->team_name}}</P>
      </div>
    </section>

    <div class="d-flex ">
      <a class="btn btn-primary me-3" href="{{ route('players.edit', ['id' => $player->id]) }}">Edit</a>
      <form method="POST" action="{{ route('players.destroy', ['id' => $player->id]) }}">
        @csrf @method("DELETE")
        <button class="btn btn-danger">Delete Player</button>
      </form>
    </div>
  </div>
</div>
@endsection