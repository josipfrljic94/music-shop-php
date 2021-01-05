<!-- include header -->
<?php require_once '../includes/header.php' ?>

<!-- include ADMIN FUNCTIONS -->
<?php require_once 'adminactions.php' ?>



<div class="container-fluid p-0 bg-dark">
<div class="row p-0   mx-auto " style="border-bottom:3px solid;">
        <div class="col-lg-8 mx-auto  p-0  pt-2 m-0 " style="min-height:10vh;">
            <h1 class="text-dark text-center font-weight-bolder display-4 text-white  text-uppercase">
          
            Products Manager
           

            </h1>
    <!-- 
      Add product
     -->

    <div class="row mx-auto bg-dark px-3">
      <button class="col-lg-8 offset-lg-2 btn btn-block border-0 rounded-0 btn-primary text-uppercase font-weight-bold" data-bs-toggle="modal" data-bs-target="#addmodal">Add Admin</button>
    </div>
    <div class="row mx-auto">
    <?php 
              echo ErrorMas();
              echo SuccesMas();
              ?>
    </div>

     <!-- 

       end add product
      -->


      <!-- modal star
       -->
        <!-- Modal -->
<style>
label{
  color:#fafafa;
}
.form-control{
  background-color:#555555;
  border-radius:none;
  border:none;
  color:#fafafa;
}
.form-select{
  background-color:#555555;
  border-radius:none;
  border:none;
  color:#fafafa;
}
</style>

<div class="modal fade " id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-light" id="exampleModalLabel">Add Name</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <!-- 

        ** ADD PRODUCT FORM**
       -->
       <form action="../admin/adminactions.php" method="POST">


<div class="mb-3">
  <label for="fname" class="form-label">First name</label>
  <input type="text" class="form-control" id="fname" name="aname" aria-describedby="nameHelp">
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
<!-- 

** END ADD PRODUCT FORM**

 -->

   


      </div>
    </div>
  </div>
</div>
  <!-- 
    end modal -->

     <!-- 



     

  table
 -->
 <table class="table table-dark table-striped shadow p-3 mt-4">
    <thead>
        <tr class="m-0">
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
      <tbody class="m-0 p-2" id=" products-table" >
            <!-- INCLUDE READ ADMIN FUNCTION FROM ADMINACTIONS -->
            <?php readAdmins() ?>
      </tbody >
  </table>


<!-- 
  end table
 -->
              
    
 </div>  
    </div>
    

<?php require_once '../includes/footer.php' ?>