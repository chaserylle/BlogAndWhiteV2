<!DOCTYPE html>
<html>
<head>
	<title> @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="style/images/logo.png">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    @section('navbar')
     <div class="navig"> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="../index.php">Blog & White</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="../author/author_blogs.php"> My Blogs <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../author/create_blogs.php"> Write a Blog <span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <span class="navbar-text">
              logged in as user
            </span>
            <div class="divider"></div>
            <a href="../logout.php">
              <button type="button" class="btn btn-sm">
                  <span class="glyphicon glyphicon-log-out">Log out</span> 
              </button>
            </a>
        </div>
      </nav>
    </div>

    <div class="container">
      @yield('content')
    </div>
    </body>
</html>