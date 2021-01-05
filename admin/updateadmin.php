<!-- INCLUDE SESSION -->
<?php require_once '../includes/session.php'; ?>
<!-- ADMIN DB -->
<?php require_once 'admindb.php'; ?>

<!-- ADMIN DB -->
<?php require_once 'adminactions.php'; ?>

<!-- includes header -->
<?php require_once '../includes/header.php' ;?>



<!-- style -->

<style>
label{
  color:#fafafa;
}
.form-control{
  background-color:#555555;
  border-radius:0 0;
  border:none;
  color:#fafafa;

}
.form-select{
  background-color:#555555;
  border:none;
  color:#fafafa;
}
</style>
<!-- style -->


 <div class="container-fluid bg-dark p-0" style="border-top:3px solid #555555; ">

 <div class="row p-0   mx-auto " style="border-bottom:3px solid #007bff;">
        <div class="col-lg-8 mx-auto  p-0  pt-2 m-0 " style="min-height:10vh;">
            <h1 class="text-dark text-center font-weight-bolder display-4 text-white  text-uppercase">
          
            Update Profile
            </h1>
 
        </div>
 
</div>





    <div class="row mx-auto">
        <div class="col-lg-6 offset-lg-3">

        <?php 
        // GET ID 
        $id= $_GET['id']; 
        $admin=readAdmindb($id); ?>

        <!--IF LOOP FOR CHECK ID  -->

      <?php  if(isset($_GET['id']) && is_numeric(($_GET['id'])) && $admin ):?> 
      
        
       
       

         
      
   
           <!--
               START FORM
            -->
            <form action="adminactions.php?uid=<?php echo $admin['id'] ?>" method="POST">
              <input type="hidden" name="email" value="<?php echo $admin['email']?>">

              <div class="mb-1">
                <label for="name" class="form-label"> First Name</label>
                <input type="text"  class="form-control" id="name" aria-describedby="name" name="ufname" value="<?php echo $admin['f_name'] ?>" required>
              
              </div>

              <div class="mb-1">
                <label for="price" class="form-label">Last name</label>
                <input type="text"  class="form-control" id="name" aria-describedby="name" name="ulname" value="<?php echo $admin['l_name'] ?>" required>
                
              </div>

              <div class="mb-1">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control"  id="email" name="uemail" value="<?php echo $admin['email'] ?>" required>
              </div>
              <div class="mb-1">
                <label for="password" class="form-label">Password </label>
                <input type="password" class="form-control"  id="password" name="password" required>
              </div>

            <button type="submit"  class="btn btn-primary rounded-0 col-lg-8 offset-lg-2 my-3 btn-block " id="addBtn">Update</button>
          
          
              
             

          </form>
       
 
        
          </div>
<!-- 

** END EDIT PRODUCT FORM**

 -->


 <?php else: ?>
<div class="container-fluid" style="height:100vh; width:100%;">
  <div class="row mx-auto">
      <h1 class="display-2 text-light text-uppercase text-center">Page doesn't exist</h1>
      <a href="../" class="btn btn-primary rounded-0 text-center ">Back</a>
  </div>
</div>
        </div>
    </div>
    </div>
  <?php endif ?>
    




<?php require_once '../includes/footer.php' ?>