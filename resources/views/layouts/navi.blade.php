<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-info">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Liens</a>
            </li>
            <a class="nav-link" href="{{ url('/')}}">BDD</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Liens</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Témoignages</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }} ">Formulaires</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Email</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Références</a>
          </li>
        </ul>
        <form action="search" method="get" class="form-inline">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Je cherche...">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Chercher</button>
            </span>
          </div>
        </form>
      </nav>

      @yield('content')
</body>
</html>
