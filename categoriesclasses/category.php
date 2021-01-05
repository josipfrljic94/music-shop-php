<?php require_once 'category_db.php'; ?>

<!-- include session -->
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '../ecommerce-procedural/includes/session.php'); ?>
 
  

<?php
    // FUNCTION READ  ALL CATEGORIES
    function readCategories(){ 

        $categories=readCategoriesdb();
            if ($categories==false || empty(readCategoriesdb()) ):?>
             <h3 class="text-light">No category</h3>
            <?php else: 
             foreach($categories as $row): ?>
              
              <!-- FOR EACH CATEGORY -->

        <tr>
        <th scope="row" ><p class="my-5"><?php echo $row['id'] ?></p></th>
        <td> <p class="my-5"  ><?php echo  $row['name'] ?></p></td>
        <td> <p class="my-5"><?php  echo $row['created_at'] ?></p></td>
        <td>
        <div class="row px-1 my-3">
       
        <a href="categoryupdate.php?id=<?php echo $row['id']?>" class=" btn btn-block btn-outline-warning rounded-0 text-light updateBtn" id="<?php echo $product['id']  ?>" style="background:#222222">Edit</a>
        <a href="categoriesclasses/category.php?did=<?php echo $row['id']?>" class="btn btn-block btn-outline-danger rounded-0 text-light "  id="<?php echo $product['id'] ?>" style="background:#222222">Delete</a>
        </div>
        </td>

        </tr> 
              <!-- END FOREACH CATEGORY -->
              <?php endforeach ?>
            <?php endif ?>
            <!-- end bracket of function -->
            <?php  } ?>
           
      
         
              

<?php  

    

    // function handle add category
    if ( isset($_POST['cname']) ){
        $name= $_POST['cname'];
       
       if(addCategorydb($name)){
        $_SESSION["succesmassage"]="Category is successfuly upload";
        header('Location:../categorymanager.php');
       }else{
        return $_SESSION["errormassage"]="Something went wrong";
        header('Location:../categorymanager.php');
       }
      
     
       }
       

        // function handle update category
    if (isset($_GET['cud'])&& isset($_POST['uname'])){
        $name= $_POST['uname'];
        $id=$_GET['cud'];
        if(updateCategorydb($id,$name)){
            $_SESSION["succesmassage"]="Category is successfuly updated";
            header('Location:../categorymanager.php');
        }else{
            return $_SESSION["errormassage"]="Something went wrong";
            header('Location:../categorymanager.php');
           }
    }
    

    // function handle delete category
    if(isset($_GET['did'])){
        $id=$_GET['did'];
        if (deleteCategorydb($id)){
            $_SESSION["succesmassage"]="Category is successfuly deleted";
            header('Location:../categorymanager.php');
        }else{
            return $_SESSION["errormassage"]="Something went wrong";
            header('Location:../categorymanager.php');
           }
    }

  



?>