@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-6">
      <img class="img-fluid" src="/img/home.svg" alt="fantasy">
    </div>

    <div class="col-6">
      <h1 class="displau-4 text-primary">By Fans For Fans</h1>
      <p class="lead text-secondary"> Create your own fantasy leagues, add players and teams. Invite your friends and find out who is the ultimate fantasy football king.</p>
      
      <a class="btn btn-lg col-12 btn-primary mb-1" href="{{ route('teams.index')}}">Teams</a>
      <a class="btn btn-lg col-12 btn-outline-primary" href="{{ route('players.index')}}">Players</a>
    </div>

  </div>
</div>
@endsection