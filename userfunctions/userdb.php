<?php // include connection
 require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '../ecommerce-procedural/conn/connection.php'); ?>


<!-- FUNCTION ADD CUSTOMER -->
<?php 
    function addUserdb($fname,$lname,$email,$password){
        global $pdo;
        $sql="INSERT INTO customers(f_name,l_name,email,password)";
        $sql.="VALUES (:fname,:lname,:email,:password)";
        $sth= $pdo->prepare($sql);
        $sth->bindValue(":fname",$fname);
        $sth->bindValue(":lname",$lname);
        $sth->bindValue(":email",$email);
        $sth->bindValue(":password",$password);
        $result=$sth->execute();
        if($result){
            return true;
        }else{
            return false;
        }

    }

// FUNCTION CHECK USER EXIST
function CheckUserExist($email){
    global $pdo;
    $sql="SELECT email FROM customers WHERE email=:email";
    $sth=$pdo->prepare($sql);
    $sth->bindValue(":email",$email);
    $sth->execute();
    $Result= $sth->rowcount();

    if($Result>=1){
      return true;
    }
    else{
      return false;
    }
  }
// LOGIN CHECK IS USER EXIST WITH EMAIL AND PASSWORD
  function findUser($email){
    global $pdo;
    $sql="SELECT * FROM customers WHERE email=:email";
    $sth=$pdo->prepare($sql);
    $sth->bindValue(":email",$email);
    $sth->execute();
    $result= $sth->rowcount();

    if($result==1){
     return $sth->fetch();
    }else{
        return false;}
    }


?>