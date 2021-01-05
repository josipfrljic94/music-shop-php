<!-- INCLUDE HEADER -->
<?php require_once 'includes/header.php' ;?>

<!-- INCLUDE SESSION -->
<?php require_once 'includes/session.php'; ?>

<!-- INCLUDE BOOTH CATEGORY FILE -->
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/ecommerce-procedural/categoriesclasses/category_db.php'); ?>



<!-- style -->

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
  border:none;
  color:#fafafa;
}
</style>
<!-- style -->

<?php 
// CHECK AND GET ID 
if(isset($_GET['id'])){
  $id=$_GET['id'];

  // PUT  ID IN FUNCTION
 $category=getcategorydb($id);} ?>


 <div class="container-fluid bg-dark p-0" style="border-top:3px solid #555555; ">

 <div class="row p-0   mx-auto " style="border-bottom:3px solid #007bff;">
        <div class="col-lg-8 mx-auto  p-0  pt-2 m-0 " style="min-height:10vh;">
            <h1 class="text-dark text-center font-weight-bolder display-4 text-white  text-uppercase">
          
            Update Category
            </h1>
 
        </div>
 
</div>





    <div class="row mx-auto">
        <div class="col-lg-6 offset-lg-3">

        <!--IF LOOP FOR CHECK ID  -->

      <?php  if(isset($_GET['id']) && is_numeric(($_GET['id']))):?> 

      <?php $image=$_FILES['image']; ?>
           <!--
               START FORM
            -->
            <form action="categoriesclasses/category.php?cud=<?php echo $category['id'] ?>" method="POST"  >
           
              
              <div class="mb-1">
                <label for="name" class="form-label">Name</label>
                <input type="text"  class="form-control" id="name" aria-describedby="name" name="uname" value="<?php echo $category['name'] ?>" required>
              
              </div>

           

            <button type="submit"  class="btn btn-primary rounded-0 col-lg-8 offset-lg-2 my-3 btn-block " id="addBtn">Update Category</button>  
          </form>

          </div>
<!-- 

** END EDIT PRODUCT FORM**

 -->

 <?php else: ?>
 <?php header('Location:index.php') ?>
        </div>
    </div>

  <?php endif ?>
    




<?php require_once 'includes/footer.php' ?>