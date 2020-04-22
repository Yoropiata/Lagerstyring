<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Lagersystem</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/inventar">Oversigt</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/inventar/ret">Ret Lager</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/brugere">Brugere</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Admin">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/logout') }}">Log ud</a>
      </li>
    </ul>
  </div>
</nav>