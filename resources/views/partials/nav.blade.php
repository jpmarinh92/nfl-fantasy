<nav class="navbar bg-white shadow-sm">
  <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link {{ setActive('home') }}" href='{{ route('home') }}'>Home</a></li>
    <li class="nav-item"><a class="nav-link {{ setActive('players.*') }}" href='{{ route('players.index') }}'>Players</a></li>
    <li class="nav-item"><a class="nav-link {{ setActive('teams.*') }}" href='{{ route('teams.index') }}'>Teams</a></li>
  </ul>
</nav>