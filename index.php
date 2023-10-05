<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pydimalla Family</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="localhost/website/suvarna.php.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Family memebers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/website/johnny.php.php">Johnny</a>
          <a class="dropdown-item" href="/website/kamal.php.php">Kamal</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/website/suvarna.php.php">Suvarna</a>
        </div>
      </li>
    </ul>
    <br>
    <form class="form-inline my-1 my-lg-0" action="phone.php" method="GET">
      <div>
      <label>Name</label>
      <input class="form-control" size="20" type="text" name="name1" placeholder="Enter name" aria-label="Enter name">
      </div>
      &nbsp;&nbsp;
      <div>
      <label>Phone</label>
      <input class="form-control" size="20" type="text" name="phone1" placeholder="Enter Phone Number" aria-label="Enter Phone Number">
      <button class="btn btn-outline-success my-1" size="3" type="submit">Enter</button>
      </div>
    </form>
    &nbsp;&nbsp;&nbsp;
    <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
      <input class="form-control" size="7" type="search" name="name1" placeholder="Enter family member" aria-label="Search">
      <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>

<div class="container-fluid">
  <h3>About Pydimalla Family</h3>
  <p>We are from East Godavari district of Andhra Pradesh, India.</p>
</div>

</body>
</html>




