<!-- A template outlining the overall page structure for the system -->

<!doctype html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task Management System</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  </head>

  <body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('home') }}">
          Task Management System
        </a>
      </div>
      <div class="nav navbar-nav navbar-right">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
      </div>
    </div>
  </nav>

  <main>
      <div class="container">
          <!-- display message after clicking on button -->
          @if(Session::has('flash_message'))
              <div class="alert alert-success">
                  {{ Session::get('flash_message') }}
              </div>
          @endif
          <!-- allow other pages to add content here -->
          @yield('content')
      </div>
  </main>

  </body>
</html>