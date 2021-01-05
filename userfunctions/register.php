<!-- INCLUDE USER DB FUCNTION -->
<?php   require_once 'userdb.php'; ?>

<!-- include session -->
<?php require_once '../includes/session.php' ?>

<?php 
    if (isset($_POST['fname'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

        // CHECK INPUT
        if(empty($_POST['fname']) && strlen($_POST['fname'])<3){
            $_SESSION["errormassage"] = "First name must be longer than 3";
            header("Location:../registerpanel.php");
        }
        elseif(empty($lname) && strlen($lname)<3){
            $_SESSION["errormassage"] = "Last name must be longer than 3";
            header("Location:../registerpanel.php");
        }
        elseif(empty($email) && strlen($email)<10){
            $_SESSION["errormassage"] = "Email must be longer than 10";
            header("Location:../registerpanel.php");
        }
        elseif(empty($password) && strlen($password)<5){
            $_SESSION["errormassage"] = "Password must be longer than 5";
            header("Location:../registerpanel.php");
        }
        elseif(strcmp($password,$cpassword)!==0 || strcmp( $password,$cpassword)===NULL){
            $_SESSION["errormassage"] = "Password is not same";   
            header("Location:../registerpanel.php");
        }
        elseif (CheckUserExist($email)) {
            $_SESSION["errormassage"] = "User aleready exist";
            header("Location:../registerpanel.php");
        }
        // IF EVERYTHING IS OK WITH INPUT
        else{
            // hash password
            $hpassword = password_hash($password, PASSWORD_DEFAULT);
            if(addUserdb($fname,$lname,$email,$hpassword)){
                $_SESSION["succesmassage"]="You successfully register";
                header("Location:../registerpanel.php");


            }else{
                $_SESSION["errormassage"] = "Something goes wrong";
                header("Location:../registerpanel.php");

            }
        }
       
    }


    // END CUSTOMER REGISTER 

  


?>