<?php 
require_once "readproduct_db.php";
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '../ecommerce-procedural/conn/connection.php');

// SESSION INCLUDE
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '../ecommerce-procedural/includes/session.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '../ecommerce-procedural/includes/upload_image.php');

readAll();

// function show products

function ProductsCustomer(){
if(empty(readAll())): ?>
<h1>Products no founded</h1>

<?php 
else: ?>

<?php  
    $products=readAll();

//   var_dump($products);
 foreach($products as $product): ?>
  <div class="col-lg-3 mx-lg-auto col-md-4 col-sm-6  mx-sm-auto md-mx-1  p-0 border-0 shadow-sm p-1 mb-2 rounded-0 ">
    <div class="card rounded-0 w-100 " style="height:350px; border:none;">
  <img src="../images/<?php echo $product['image'] ?>" class="card-img-top  w-100" style="height:60%;" alt="<?php echo $product['name'] ?>">
  <div class="card-body mx-auto text-center col-lg-12" style="height:40%; border-top:0.5px solid #e1e1e1e1;">
    <h5 class="card-title"><?php echo $product['name'] ?></h5>
    <p class="card-text"><?php echo $product['price'] ?></p>
    <a href="detailproduct.php?id=<?php echo $product['id'] ?>" class="btn btn-primary rounded-0 btn-block col-lg-12  ">Details</a>
  </div>
</div>
</div>   

 <?php endforeach ?>
  
<?php endif ?>

<?php } ?>




<!-- FUNCTION PRODUCT IN DASHBOARD -->
<?php  
function ProductsAdmin(){

if(empty(readAll())): ?>
<h1>Products no founded</h1>

<?php else: ?>

<?php  
    $products=readAll();
 
 foreach($products as $product): ?>
      
        <tr>
        <th scope="row" ><p class="my-5"><?php echo $product['id'] ?></p></th>
        <td> <p class="my-5"  ><?php echo  $product['name'] ?></p></td>
        <td> <p class="my-5" ><?php echo  $product['price'] ?></p> </td>
        <td><p class="my-5" > <?php echo  $product['image'] ?></p> </td>
        <td> <p class="my-5"><?php  echo $product['brand'] ?></p></td>
        <td>
        <div class="row px-1 my-3">
       
        <a href="updateproduct.php?id=<?php echo $product['id']?>" class=" btn btn-block btn-outline-warning rounded-0 text-light updateBtn" id="<?php echo $product['id']  ?>" style="background:#222222">Edit</a>
        <a href="readproducts/readproduct.php?did=<?php echo $product['id']?>" class="btn btn-block btn-outline-danger rounded-0 text-light "  id="<?php echo $product['id'] ?>" style="background:#222222">Delete</a>
        </div>
        </td>
        </tr>
      

 <?php endforeach ?>
 

<?php endif ?>

<?php } ?>


<!-- 

    * ADD PRODUCT *
 -->
    
            <?php 

    
    if(isset($_POST['name']) && isset($_POST['submit'])){
        echo $_POST['name'];
        
        // input variable
        // VARIABLE
        $name=$_POST['name'];
        $price=$_POST['price'];
        $descripton=$_POST['description'];
        $category=$_POST['category'];
        $brand=$_POST['brand'];
        

        // 
        // image
        // 

        $image= $_FILES['image']['name'];
        $target_dir = "../images/";
        $target_file= $target_dir . basename( $_FILES['image']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . "." .$target_file;
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }



    
          // Check if image already exists
     if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

        // Allow certain image formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }



// FUNCTION ADD PRODUCT FROM READ PRODUCT_DB
    addProduct($name,$price,$descripton,$category,$brand,$image);


    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    

    //   ***
    // END ADD PRODUCT
    // ****
   

    }


        function readProduct($id){
            if(empty(readProductquery($id))){
                return  0;
            }else{ return readProductquery($id);}
            }          
  
  
  //  START  UPDATE PRODUCT FUNCTION



  if(isset($_GET['uid']) ){
    $id=$_GET['uid'];
    $name=$_POST['uname'];
    $price=$_POST['uprice'];
    $desc=$_POST['udescription'];
    $category=$_POST['ucategory'];
    $brand=$_POST['ubrand'];
    $image= $_FILES['image']['name'];
    $target= "../images/".basename( $_FILES['image']['name']);
          
   if(updateProductquery($id,$name,$price,$desc,$category,$brand,$image)){
    move_uploaded_file( $_FILES['image']['tmp_name'],$target);
    $_SESSION["succesmassage"]="You updated product"; 
    
    

    header('Location: ../productsmanager.php');
   }else{
    $_SESSION["errormassage"]="Something went wrong";
    header('Location: ../productsmanager.php');
   }
   
  }
// END UPDATE 



// DELETE PRODUCT FUNCTION
// ***
function deleteProduct($id){
    if( deleteProductquery($id)){
     return true ;
    }else{
    return  false;
    }
  
  }

// END DELETE PRODUCT
// ***

if(isset($_GET['did'])){

  // get id from request
  $id=($_GET['did']);

  
  // function with id variable 
  deleteProduct($id);
  if(deleteProduct($id)){
    $_SESSION["succesmassage"]="Product is successfuly deleted";
    header('Location: ../productsmanager.php');
  }else{
    $_SESSION["errormassage"]="Something went wrong";
    header('Location: ../productsmanager.php');
  }


}

// FUNCTION READ ONE PRODUCT
function readOneProduct($id){
  // check id exist
 if (isset($_GET['id'])){

$id=$_GET['id'];

    // IF RESULT EXIST
    if(readProductquery($id)){
      return readProductquery($id);
    }else{
      header('Location:../');
    }
}
}
?>

      

  
 

 




 




