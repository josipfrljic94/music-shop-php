<?php 

// include connection
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '../ecommerce-procedural/conn/connection.php');

function readAll(){
    global $pdo;
$sql="SELECT * FROM products";
$sth= $pdo->query($sql);
$sth->execute();
 $result = $sth->fetchAll(PDO::FETCH_ASSOC);
return $result;
}

function addProduct($name,$price,$desc,$category,$brand,$image){
    global $pdo;
    $sql="INSERT INTO products(name,price,description,category_id,brand,image)";
    $sql.="VALUES (:name,:price,:description,:category_id,:brand,:image)";
    $sth= $pdo->prepare($sql);
    $sth->bindValue(":name",$name);
    $sth->bindValue(":price",$price);
    $sth->bindValue(":description",$desc);
    $sth->bindValue(":category_id",$category);
    $sth->bindValue(":brand",$brand);
    $sth->bindValue(":image",$image);
    $Execute=$sth->execute();
}


function readProductquery($id){
    global $pdo;
    $sql="SELECT * FROM products WHERE id=$id";
    $sth= $pdo->query($sql);
    $sth->execute();
    $result = $sth->fetch();
    if($result){
        return $result;
    }else{
        return false;
    }
}


function updateProductquery($id,$name,$price,$desc,$category,$brand,$image){
   
    global $pdo;
   
    $sql= " UPDATE  products SET name=:name, price=:price, description=:description, category_id=:category, brand=:brand,image=:image
    WHERE id=:id ";
    $sth= $pdo->prepare($sql);
    $sth->bindValue(":id",$id);
    $sth->bindValue(":name",$name);
    $sth->bindValue(":price",$price);
    $sth->bindValue(":description",$desc);
    $sth->bindValue(":category",$category);
    $sth->bindValue(":brand",$brand);
    $sth->bindValue(":image",$image);
    $result=$sth->execute();
    if($result){
        return true;
    }else{
        return false;
    }
 
}

function deleteProductquery($id){
    global $pdo;
$sql="DELETE FROM products WHERE id='$id'";
$sth=$pdo->prepare($sql);
$result=$sth->execute();
if($result){
    return true;
}else{
    return false;
}
}



?>


