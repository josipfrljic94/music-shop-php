<!-- include header -->
<?php require_once 'includes/header.php' ?>
<!-- includes read product -->
<?php require_once 'readproducts/readproduct.php'; ?>

<!-- include session -->
<?php require_once 'includes/header.php' ?>


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
      <button class="col-lg-8 offset-lg-2 btn btn-block border-0 rounded-0 btn-primary text-uppercase font-weight-bold" data-bs-toggle="modal" data-bs-target="#addmodal">Add product</button>
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
            <form action="readproducts/readproduct.php" method="POST" enctype="multipart/form-data">
              <div class="mb-1">
                <label for="name" class="form-label">Name</label>
                <input type="text"  class="form-control" id="name" aria-describedby="name" name="name" required>
              
              </div>

              <div class="mb-1">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" placeholder="value is in euro" aria-label="Dollar amount (with dot and two decimal places)" id="price" name="price" required >
                
              </div>

              <div class="mb-1">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
              </div>

            
              <div class="mb-1">
                <label for="description" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category">
                  <option value="1">Guitars</option>
                  <option value="2">Piano</option>
                  <option value="3">Drums</option>
              </select>
              </div>

              <div class="mb-1">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
              </div>
             
              <div class="mb-1">
            <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
                    
            </div>
            <div class="modal-footer">
              
              <button type="submit"  class="btn btn-primary rounded-0 col-lg-12 btn-block " id="addBtn">Add Product</button>

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
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Brand</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
      <tbody id="products-table" >

          <?php  ProductsAdmin() ?>
      </tbody >
  </table>


<!-- 
  end table
 -->
              
          
        </div>
    </div>
    

<?php require_once 'includes/footer.php' ?>