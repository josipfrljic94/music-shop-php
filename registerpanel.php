

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

<div class="container-fluid bg-light" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="display-4 text-center">Register</h1>
        </div>
        
        <?php 
              echo ErrorMas();
              echo SuccesMas();
         ?>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
      
        <div class="w-100 text-center">   <h6   class=" w-100  mx-auto text-right text-capitalize  text-primary  text-weight-bold " style="text-decoration:none;font-size:1.2rem;">You have acount? <a href="loginpanel.php" class=" btn btn-primary rounded-0 ">Login</a> </h6></div>
        <form action="userfunctions/register.php" method="POST">


  <div class="mb-3">
    <label for="fname" class="form-label">First name</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="nameHelp">
  </div>

  <div class="mb-3">
    <label for="lname" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="nameHelp">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="pPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password1" name="password">
  </div>

  <div class="mb-3">
    <label for="cPassword1" class="form-label">Check Password</label>
    <input type="password" class="form-control" id="cpassword1" name="cpassword">
  </div>
 
<button type="submit" class="btn btn-primary w-100 rounded-0 my-3">Submit</button>

  </div>
 
</form>
       
    </div>
</div>

</div>

<?php require_once 'includes/footer.php' ?>