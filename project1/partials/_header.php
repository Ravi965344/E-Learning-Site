<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/project1">iDescuss</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/project1">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="contact.php" tabindex="-1">Contact</a>
        </li>
      </ul>';
     if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
      echo'<div class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
        <a href="partials/_logout.php" class="btn btn-outline-success mx-2">Logout</a>
      </div>';
      }
     else{
       echo'<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
      <button class="btn btn-outline-success mx-2"data-bs-toggle="modal" data-bs-target="#login">Login</button>
      <button class="btn btn-outline-success ml-2"data-bs-toggle="modal" data-bs-target="#signup">Signup</button>';
     }
    echo'</div>
  </div>
</nav>';
include 'partials/_login.php';
include 'partials/_signup.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> 
  <button type="button" class="close" data-dismiss="alert" arial-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
?> 