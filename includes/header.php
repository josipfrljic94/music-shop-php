<?php require_once "session.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
</head>
<body style="background:url(images/bg-main.jpg);background-repeat:no-repeat; background-size:cover;" >

<div class="container-fluid p-0">


<!--UPPER NAVBAR -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid  d-flex justify-content-around">
   
    <a class="navbar-brand w-50 text-left text-xs-center "> <svg  xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#0a0a0a;" class="bi bi-file-music-fill  mt-2" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-.5 4.11v1.8l-2.5.5v5.09c0 .495-.301.883-.662 1.123C7.974 12.866 7.499 13 7 13c-.5 0-.974-.134-1.338-.377-.36-.24-.662-.628-.662-1.123s.301-.883.662-1.123C6.026 10.134 6.501 10 7 10c.356 0 .7.068 1 .196V4.41a1 1 0 0 1 .804-.98l1.5-.3a1 1 0 0 1 1.196.98z"/>
</svg>
<small class="text-danger text-uppercase">music heaven</small>
</a>
    <form class="d-flex ">
    <div class="input-group ">
  <input type="text" class="form-control rounded-0" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn bg-secondary rounded-0" type="button" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fafafa" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
</div>
    
    </form>

   
  
    <a class="nav-link bg-secondary " href="#">
            <svg class="m-0 mb-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0a0a0a;" class="bi bi-bag-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
            
            </svg>
            <span class="badge bg-danger m-0   p-1 text-left " style="font-size:0.6rem;">15</span> 
          </a>
      </div>
  
</nav>



<!-- END UPPER NAVBAR -->

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
   
    <button class="navbar-toggler border-0 shadow-sm w-100 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon  text-center p-1" style="border:2px solid #dc3545;"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav w-100" style="margin-left:50px;">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Categories</a>
        </li>

      </ul>

      <ul class="navbar-nav" style="margin:0 50px;">
      <?php if(isset($_SESSION["customerid"])): ?>
        <li class="nav-item ">
          <a class="nav-link" href="userfunctions/logout.php">
          <?php   echo  CustomerName(); ?>
          </a>
        </li>
        <?php else: ?>
          <li class="nav-item">
          <a class="nav-link" href="registerpanel.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg></a>
        </li>
        <?php endif ?>
      
     
      </ul>

    
    </div>
   

   
  </div>
</nav>
    
  

<!-- end of navbar -->

