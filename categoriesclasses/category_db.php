<?php
 // include connection
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '../ecommerce-procedural/conn/connection.php'); ?>

<?php 




  // function read all categories
 function readCategoriesdb(){
  global $pdo;
   $sql="SELECT * FROM categories";
   $sth=$pdo->prepare($sql);
  $sth->execute();
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);

   if($result){
    return $result;
  }else{
        return 0;
  }

 }

    // function add categories
   function addCategorydb($name){
      global $pdo;
      $sql="INSERT INTO categories (name)";
      $sql.="VALUES (:name)";
      $sth= $pdo->prepare($sql);
      $sth->bindValue(":name",$name);
      $result=$sth->execute();

      if($result){
        return true;
      }else{
        return false;
      }
     }


    //  FUNCTION GET CATEGORY BY ID FOR UPDATE
     function getcategorydb($id){
       global $pdo;
       $sql="SELECT * FROM categories WHERE id=:id";
       $sth=$pdo->prepare($sql);
       $sth->bindValue(":id",$id);
       $sth->execute();
       $result=$sth->fetch();
       if($result){
        return $result;
       }else{
         return false;
       }
      
      
     }


    //  function update category
    function updateCategorydb($id,$name){
      global $pdo;
      $sql= "UPDATE categories SET name=:name WHERE id=:id";
      $sth=$pdo->prepare($sql);
      $sth->bindValue(":name",$name);
      $sth->bindValue(":id",$id);
      $result=$sth->execute();

      if($result){
        return true;
      }else{
        return false;
      }
    }

    // functiion delete category
    function deleteCategorydb($id){
      global $pdo;
      $sql="DELETE FROM categories WHERE id=:id";
      $sth=$pdo->prepare($sql);
      $sth->bindValue(":id",$id);
      $result=$sth->execute();

      if($result){
        return true;
      }else{
        return false;
      }
      

    }

  
 

?>