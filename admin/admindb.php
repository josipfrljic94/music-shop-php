<?php // include connection
 require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '../ecommerce-procedural/conn/connection.php'); ?>


<!--FUNCTION READ ALL ADMINS -->
<?php  

    function readAdminsdb(){
        global $pdo;
        $sql="SELECT * FROM admins";
        $sth= $pdo->query($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            return $result;
        }else{
            return false;}
        }
?>


<!-- FUNCTION ADD CUSTOMER -->
<?php 
    function addAdmindb($fname,$lname,$email,$password){
        global $pdo;
        $sql="INSERT INTO admins(f_name,l_name,email,password)";
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
function CheckAdminExistdb($email){
    global $pdo;
    $sql="SELECT email FROM admins WHERE email=:email";
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
  function findAdmin($email){
    global $pdo;
    $sql="SELECT * FROM admins WHERE email=:email";
    $sth=$pdo->prepare($sql);
    $sth->bindValue(":email",$email);
    $sth->execute();
    $result= $sth->rowcount();

    if($result==1){
     return $sth->fetch();
    }else{
        return false;}
    }

    // ADMIN UPDATE SELECT ALL ONE BY ID
    function readAdmindb($id){
        global $pdo;
        $sql="SELECT * FROM admins WHERE id=$id";
        $sth= $pdo->query($sql);
        $sth->execute();
        $result = $sth->fetch();
       if($result){
        return $result;
       }else{
           return false;
       }

    }
    // FUNCTION UPDATE ADMIN
    function updateAdmindb($id,$fname,$lname,$email){

        global $pdo;
        $sql="UPDATE admins SET f_name=:fname , l_name=:lname, email=:email WHERE id=:id";
        $sth= $pdo->prepare($sql);
        $sth->bindValue(':id',$id);
        $sth->bindValue(':fname',$fname);
        $sth->bindValue(':lname',$lname);
        $sth->bindValue(':email',$email);
        $result=$sth->execute();
        if($result){
            return true;
        }else{
            return false;
        }
    }

    // FUNCTION DELETE ADMIN

    function deleteAdmindb($id){

    global $pdo;
    $sql="DELETE FROM admins WHERE id='$id'";
    $sth=$pdo->prepare($sql);
    $result=$sth->execute();
    if($result){
        return true;
    }else{
        return false;}
    }

  



?>