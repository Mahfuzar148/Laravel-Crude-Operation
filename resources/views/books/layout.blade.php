
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-primary">
        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav justify-content-between w-100">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('books.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('books.create')}}">Insert Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Search Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/">Delete Book</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="#">Update Book</a>
            </li>
          </ul>
        </div>

      </nav>
    <div class="container mt-lg-5 pt-3">
        @yield('page-content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
