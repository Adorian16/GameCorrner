<!DOCTYPE html>
<?php include "functions.php"; ?>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GameCorrner</title>
</head>
<body>
<?php session_start(); ?>
    <nav class="navbar navbar-expand-lg bg-dark" >
  <div class="container-fluid">
    <img src="img/Ado_s.ico.ico" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <button type="button" class="btn btn-light btn-sm ms-2"><a class="nav-link mb-0 h1 text-black" href="index.php">Home</a></button>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-light btn-sm ms-2"><a class="nav-link mb-0 h1 text-black" href="games.php">Games</a></button>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-light btn-sm ms-2"><a class="nav-link mb-0 h1 text-black" href="about_us.php">About Us</a></button>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-light btn-sm ms-2"><?php    

    if($_SESSION){echo'<a class="nav-link mb-0 h1 text-black" href="logout.php">Log out</a>';} else {echo '<a class="nav-link mb-0 h1 text-black" href="account.php">Sign In</a>';}?></button>

   
        </li>
      </ul>

    </div>
  </div>
</nav>

