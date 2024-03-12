<!doctype html>
<html lang="en">
  <head>
    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  {{-- <nav class="nav justify-content-center">
    <a class="nav-link active" href="#">Active link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link disabled" href="#">Disabled link</a>
  </nav> --}}

  <nav class="navbar navbar-expand navbar-light bg-faded">
      <a class="navbar-brand" href="#">Navbar</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
              <a class="nav-link" href="#">Active <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Action 1</a>
                  <a class="dropdown-item" href="#">Action 2</a>
              </div>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </nav>