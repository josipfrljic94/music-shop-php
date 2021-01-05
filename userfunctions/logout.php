<?php require_once('../includes/session.php'); ?>

<?php 
       $_SESSION['customerid']=null;
       $_SESSION['customername']=null;
      $_SESSION['customeremail']=null;
    session_destroy();
    $_SESSION["succesmassage"]="you are seccesfully logout";
    header("Location: ../loginpanel.php");

?>