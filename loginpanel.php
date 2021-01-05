

<!-- INCLUDE HEADER -->
<?php require_once 'includes/header.php' ;?>

<!-- css for border of input -->




<style>

   .form-control{
        border-radius:0;
        border:0;
        box-shadow:2px 3px 6px #e1e1e1e1;
    }    
</style>


<!-- end css -->

<div class="container-fluid bg-light py-5" style="min-height:60vh" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="display-4 text-center">Login</h1>
        </div>
        <?php  
        echo ErrorMas();
              echo SuccesMas();
          
        ?>
    </div>
   
    <div class="row">
        <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">

        <form action="userfunctions/login.php" method="POST">

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="lemail" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="pPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password1" name="password">
  </div>

 
  <button type="submit" name="submit" class="btn btn-primary w-100 rounded-0 my-3">Submit</button>
  </div>
 
 
</form>
       
    </div>
</div>



<?php require_once 'includes/footer.php' ?>