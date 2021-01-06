<?php require_once('../includes/session.php'); ?>

<?php 
       $_SESSION['adminid']=null;
       $_SESSION['adminname']=null;
      $_SESSION['adminemail']=null;
    session_destroy();
    $_SESSION["succesmassage"]="you are seccesfully logout";
    header("Location: ../admin/adminlogin.php");

?>