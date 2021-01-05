
<!-- include session -->
<?php require_once 'includes/session.php' ?>

<!-- include header -->
<?php require_once 'includes/header.php' ?>






<!-- include category class -->
<?php require_once 'categoriesclasses/category.php';



  

?>


<div class="container-fluid p-0 bg-dark">
<div class="row p-0   mx-auto " style="border-bottom:3px solid;">
        <div class="col-lg-8 mx-auto  p-0  pt-2 m-0 " style="min-height:10vh;">
            <h1 class="text-dark text-center font-weight-bolder display-4 text-white  text-uppercase">
          
            Category Manager
           

            </h1>
    <!-- 
      Add product
     -->

    <div class="row mx-auto bg-dark px-3">
      <button class="col-lg-8 offset-lg-2 btn btn-block border-0 rounded-0 btn-primary text-uppercase font-weight-bold" data-bs-toggle="modal" data-bs-target="#addcmodal">Add category</button>
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

<div class="modal fade " id="addcmodal" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
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
            <form action="categoriesclasses/category.php" method="POST" >
              <div class="mb-1">
                <label for="name" class="form-label">Category name</label>
                <input type="text"  class="form-control" id="name" aria-describedby="name" name="cname" required>
              
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
        <th scope="col">Created_at</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
      <tbody id="products-table" >

          <!-- FUNCTION READ ALL -->
         <?php  readCategories() ?>
         
      </tbody >
  </table>


<!-- 
  end table
 -->
              
          
        </div>
    </div>
    

<?php require_once 'includes/footer.php' ?>