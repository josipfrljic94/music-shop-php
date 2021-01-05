<!-- INCLUDE USER DB FUCNTION -->
<?php   require_once 'userdb.php'; ?>

<!-- include session -->
<?php require_once '../includes/session.php' ?>


<!-- LOGIN ACTIONS -->
<?php 
if (isset($_POST['lemail']) ) {

    $email=$_POST['lemail'];
    $password=$_POST['password'];
    
    if(empty($email) || empty($password)){
        $_SESSION["errormassage"] = "All places must be filled";
    }
    else{
        // FIND USER IS ACTION FROM USERDB
       $FindedUser=findUser($email);

        //    check if user exist with same email
       if($FindedUser){
        //    check is password is right
           if (password_verify($password,$FindedUser['password'])) {
               // SET SESSIONS
                    $_SESSION["succesmassage"]="You successfully register";
                    $_SESSION['customerid']=$FindedUser['id'];
                    $_SESSION['customername']=$FindedUser['f_name'];
                    $_SESSION['customeremail']=$FindedUser['email'];
           } else {
            $_SESSION["errormassage"] ="Password doesn't match";
           }
           
      
       
        
        header("Location: ../loginpanel.php");


    //   IF USER DOESNT EXIST
       }else{
        $_SESSION["errormassage"] = "User doesn't exist";
        header("Location: ../loginpanel.php");
       }
    }
   
}
?>