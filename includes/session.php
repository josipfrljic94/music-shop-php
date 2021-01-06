<?php 
session_start();

function ErrorMas(){
    if(isset($_SESSION["errormassage"])){
         $Output="<div class=\"alert alert-danger alert-dismissible fade rounded-0 show col-lg-8 offset-lg-2 my-2\" role='alert' >".htmlentities($_SESSION["errormassage"]) . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";        
         $_SESSION["errormassage"]=null;
         return $Output;
     }
  
    }
 

 function SuccesMas(){
 if(isset($_SESSION["succesmassage"])){
    $Output="<div class=\"alert alert-success alert-dismissible rounded-0 fade show col-lg-8 offset-lg-2 my-2\" role='alert' >".htmlentities($_SESSION["succesmassage"]) . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";         
      $_SESSION["succesmassage"]=null;
      return $Output;
 }
 
 }

 function CustomerName(){
  if(isset($_SESSION["customername"])){
     $Output= "<h6> <span class=\"badge bg-danger text-uppercase rounded-0 \">".htmlentities($_SESSION["customername"]) . " <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='#fafafa' class='bi bi-person-x-fill' viewBox='0 0 16 16'>
      <path fill-rule='evenodd' d='M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z'/>
    </svg>". "</span>   </h6>";         
      
       return $Output;
     
  }
  
  }

  function AdminName(){
   if(isset($_SESSION["adminname"])){
      $Output= "<h6> <span class=\"badge bg-danger text-uppercase rounded-0 \">".htmlentities($_SESSION["adminname"]) . " <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='#fafafa' class='bi bi-person-x-fill' viewBox='0 0 16 16'>
       <path fill-rule='evenodd' d='M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z'/>
     </svg>". "</span>   </h6>";         
       
        return $Output;
      
   }
   
   }
 

?>