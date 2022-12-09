<?php session_start(); ?>
<!Doctype html>
<html lang="en">
<head>
    <title>Little Pawsitive Steps!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/footer.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <!-- php include 'partials/_navbar.php';  -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="index.php">LITTLE PAWSITIVE STEPS!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span  class=" sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="Adoption info.php">Adoption info</a>
        </li>
        
</ul>
<ul  class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Breeds</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Beagle">Beagles</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Boxer_(dog)">Boxer</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Bulldog">Bulldogs</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Cocker_Spaniel">Cocker Spaniel</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Dachshund">Dachshund</a> 
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Dalmatian_(dog)">Dalmatian</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/German_Shepherd">German Shepherd</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Great_Dane">Great Dane</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Pomeranian_(dog)">Pomeranian</a> 
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Pug">Pug</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Golden_Retriever">Retrievers (Golden)</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Labrador_Retriever">Retrievers (Labrador)</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Rottweiler">Rottweilers</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Siberian_Husky">Siberian Husky</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Tibetan_Mastiff">Tibetan Mastiff</a>
       
        </div>
           
        
        <?php
         if(isset($_SESSION['loggedin']))
         {
           echo "<li class='nav-item'> 
           <a class='nav-link' href='logout.php'>Logout</a></li>";
         }
         else
         {
          echo "<li class='nav-item'>
            <a class='nav-link' href='login.php'>Login</a></li>;
          <li class='nav-item'>
            <a class='nav-link' href='signup.php'>Signup</a>
        </li>";
         }
            ?>
        
       
        
             
    </ul>
        <form class="form-inline my-2 my-lg-0">
            
           <!-- <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>-->
            <input class="form-control mr-sm-2 "type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button> 
        </form>
      
      </div>
    </nav>

    <ul  class= ml-auto">
        <li ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Breeds</a>
        <div >
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
        <a href="https://en.wikipedia.org/wiki/Beagle" class="btn-lg btn-secondary"role="button ">Beagles</a>
             
               <a class="dropdown-item" href=
               >Boxer</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Bulldog">Bulldogs</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Cocker_Spaniel">Cocker Spaniel</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Dachshund">Dachshund</a> 
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Dalmatian_(dog)">Dalmatian</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/German_Shepherd">German Shepherd</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Great_Dane">Great Dane</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Pomeranian_(dog)">Pomeranian</a> 
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Pug">Pug</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Golden_Retriever">Retrievers (Golden)</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Labrador_Retriever">Retrievers (Labrador)</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Rottweiler">Rottweilers</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Siberian_Husky">Siberian Husky</a>
               <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Tibetan_Mastiff">Tibetan Mastiff</a>
       
        </div>
        
       
        
             
    </ul>







<!-- Footer -->

    <?php include "partials/footer.php"; ?>
  
<!-- footer ends  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>



 