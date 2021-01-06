<!-- INCLUDE ADMIN DATABASE FUNCTIONS -->
<?php require_once 'admindb.php' ?>
<!-- INCLUDE SESSIONS -->
<?php require_once '../includes/session.php' ?>

<?php 


// READ ALL ADMINS
 function readAdmins(){
$admins=readAdminsdb();
if(empty($admins)):?>
<h1>There is not admin</h1>

<?php 
else:
foreach($admins as $admin): ?>
<!-- list all admins -->
        <tr >
        <th scope="row" ><p class="my-5"><?php echo $admin['id'] ?></p></th>
        <td> <p class="my-5 text-left "  ><?php echo  $admin['f_name'] ?></p></td>
        <td> <p class="my-5 text-left " ><?php echo  $admin['l_name'] ?></p> </td>
        <td><p class="my-5 text-left" > <?php echo $admin['email'] ?></p> </td>
        <td>
        <div class="row w-75 p-0 m-0 my-3 ">
        <a href="updateadmin.php?id=<?php echo $admin['id']?>" class=" btn w-100 btn-outline-warning rounded-0 m-0 pr-1 text-light updateBtn" id="<?php echo $product['id']  ?>" style="background:#222222">Edit</a>
        <a href="adminactions.php?did=<?php echo $admin['id']?>" class="btn w-100 btn-outline-danger rounded-0 m-0  pr-1 text-light "  id="<?php echo $product['id'] ?>" style="background:#222222">Delete</a>
        </div>
        </td>
        </tr>
        
        <?php endforeach ?>
        <?php endif ?>
        <?php } ?>
<?php


// ***START ADMIN REGISTER 

if (isset($_POST['aname'])){

    $aname=$_POST['aname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
            // CHECK INPUT
            if(empty($aname) && strlen($aname)<3){
                $_SESSION["errormassage"] = "First name must be longer than 3";
                header("Location:adminmanager.php");
            }
            elseif(empty($lname) && strlen($lname)<3){
                $_SESSION["errormassage"] = "Last name must be longer than 3";
                header("Location:adminmanager.php");
            }
            elseif(empty($email) && strlen($email)<10){
                $_SESSION["errormassage"] = "Email must be longer than 10";
                header("Location:adminmanager.php");
            }
            elseif(empty($password) && strlen($password)<5){
                $_SESSION["errormassage"] = "Password must be longer than 5";
                header("Location:adminmanager.php");
            }
            elseif(strcmp($password,$cpassword)!==0 || strcmp( $password,$cpassword)===NULL){
                $_SESSION["errormassage"] = "Password is not same";   
                header("Location:adminmanager.php");
            }
            elseif (CheckAdminExistdb($email)) {
                $_SESSION["errormassage"] = "User aleready exist";
                header("Location:../registerpanel.php");  header("Location:adminmanager.php");
            }
          
            // IF EVERYTHING IS OK WITH INPUT
            else{
                // hash password
                $hpassword = password_hash($password, PASSWORD_DEFAULT);
                if(addAdmindb($aname,$lname,$email,$hpassword)){
                    $_SESSION["succesmassage"]="You successfully register";
                    header("Location:adminmanager.php");
    
    
                }else{
                    $_SESSION["errormassage"] = "Something goes wrong";
                    header("Location:adminmanager.php");
    
                }
            }
           
        }

        // END ADMIN REGISTRATION



    //   UPDATE ADMIN 
    if (isset($_POST['ufname']) && isset($_GET['uid']) ){

        $fname=$_POST['ufname'];
        $lname=$_POST['ulname'];
        $uemail=$_POST['uemail'];
        $email=$_POST['email'];
        $password=$_POST['password'];

       

            if( $FindedUser=findAdmin($email)){
                // check is password is right
                if (password_verify($password,$FindedUser['password'])){
                        if(updateAdmindb($id,$fname,$lname,$uemail)){

                            $_SESSION["succesmassage"]="You successfully update";
                            header("Location:adminmanager.php");
        
                        }else{
                            $_SESSION["errormassage"] = "Something goes wrong";
                            header("Location:adminmanager.php");
                        }
                }else{
                    $_SESSION["errormassage"] = "Wrong password";
                    header("Location:adminmanager.php");
                }
                }else{
                    $_SESSION["errormassage"] = "User doesn't exist";
                    header("Location:adminmanager.php");
                }
        
    }


    // DELETE ADMIN
    
    if (isset($_GET['did'])){
        $id=$_GET['did'];
        if(is_numeric($id)){
            if( deleteAdmindb($id)){
                    $_SESSION["succesmassage"]="You successfully delete admin";
                    header("Location:adminmanager.php");
            }else{
                    $_SESSION["errormassage"] = "Something went wrong";
                    header("Location:adminmanager.php");
            }
       }else{
        $_SESSION["errormassage"] = "User doesn't exist";
        header("Location:adminmanager.php");
       }
    }


    // <!-- LOGIN ACTIONS 
        // LOGIN ADMIN
    // 

    if (isset($_POST['lemail']) ) {
    
        $email=$_POST['lemail'];
        $password=$_POST['password'];
        
        if(empty($email) || empty($password)){
            $_SESSION["errormassage"] = "All places must be filled";
        }
        else{
            // FIND USER IS ACTION FROM USERDB
           $FindedAdmin=findAdmin($email);
    
            //    check if user exist with same email
           if($FindedAdmin){
            //    check is password is right
               if (password_verify($password,$FindedAdmin['password'])) {
                   // SET SESSIONS
                        $_SESSION["succesmassage"]="You successfully register";
                        $_SESSION['adminid']=$FindedAdmin['id'];
                        $_SESSION['adminname']=$FindedAdmin['f_name'];
                        $_SESSION['adminemail']=$FindedAdmin['email'];
                        header("Location:adminmanager.php");
               } else {
                $_SESSION["errormassage"] ="Password doesn't match";
                header("Location:adminlogin.php");
               }
               
          
           
            
            
    
    
        //   IF USER DOESNT EXIST
           }else{
            $_SESSION["errormassage"] = "Admin doesn't exist";
            header("Location:adminlogin.php");
           }
        }
       
    }


 ?>