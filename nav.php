<!DOCTYPE html>
<html>
<head>
  <title>Blog & I</title>
  <meta charset="utf-8">
   <!-- <link href="/images/mine.png" rel="icon" type="image/png" /> -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<link rel="icon" type="image/x-icon" href="favicon.ico">

<style>
  nav{
  width: 100%;
  height: 75px;
  background-color: #0005;
  line-height: 50px;
}

nav ul li{
  list-style-type: none;
  display: inline-block;
  padding-bottom: 0;
  transition: 0.7s all;
}
nav ul li:hover{
  background-color:#0005;
}

a {
  font-size: 20px;
}



@media only screen and (max-width: 975px) {
  li a {

  color: #8dadf0!important;
  background-color: #0005;
}
}

</style>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong fixed-top">
  <a class="navbar-brand" href="index.php">Blog & I</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>