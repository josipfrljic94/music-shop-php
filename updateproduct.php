<?php require_once 'includes/header.php' ;?>
<?php require_once 'includes/session.php'; ?>
<?php require_once 'readproducts/readproduct.php'; ?>


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
// GET ID 
$id= $_GET['id']; 
 $product=readProduct($id); ?>
 <div class="container-fluid bg-dark p-0" style="border-top:3px solid #555555; ">

 <div class="row p-0   mx-auto " style="border-bottom:3px solid #007bff;">
        <div class="col-lg-8 mx-auto  p-0  pt-2 m-0 " style="min-height:10vh;">
            <h1 class="text-dark text-center font-weight-bolder display-4 text-white  text-uppercase">
          
            Update Product
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
            <form action="readproducts/readproduct.php?uid=<?php echo $product['id'] ?>" method="POST"  enctype="multipart/form-data">
            <!-- <input type="hidden"  class="form-control" id="id" aria-describedby="name"  value="<?php echo $product['id'] ?>" > -->
              
              <div class="mb-1">
                <label for="name" class="form-label">Name</label>
                <input type="text"  class="form-control" id="name" aria-describedby="name" name="uname" value="<?php echo $product['name'] ?>" required>
              
              </div>

              <div class="mb-1">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control"  placeholder="value is in euro" aria-label="Dollar amount (with dot and two decimal places)" id="price" name="uprice" value="<?php echo $product['price'] ?>" required >
                
              </div>

              <div class="mb-1">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control"  id="description" name="udescription" value="<?php echo $product['description'] ?>" required>
              </div>

            
              <div class="mb-1">
                <label for="description" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" id="category" name="ucategory" >
                  <option selected value="1">Guitars</option>
                  <option value="2">Piano</option>
                  <option value="3">Drums</option>
              </select>
              </div>

              <div class="mb-1">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="ubrand" value="<?php echo $product['brand'] ?>" required>
              </div>
                     
            <div class="form-group mt-3">
                  <div class="custom-file ">
                  <input type='file' name='image' value=""><br><br> 
                  <img src="upload/<?php echo $product['image']?>" style="width:100px;height:100">
                 
                  </div>
            </div>

            <button type="submit"  class="btn btn-primary rounded-0 col-lg-8 offset-lg-2 my-3 btn-block " id="addBtn">Add Product</button>
          
          
              
             

          </form>
          </div>
<!-- 

** END EDIT PRODUCT FORM**

 -->

 <?php else: ?>
 <h1 class="display-4 bg-danger rounded-0  text-center text-uppercase text-light">Something went wrong</h1>
        </div>
    </div>
 </div>
  <?php endif ?>
    




<?php require_once 'includes/footer.php' ?>