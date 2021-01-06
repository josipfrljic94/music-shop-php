<?php require_once 'readproduct.php' ?>
<?php require_once '../includes/header.php' ?>
   
   <?php $id=$_GET['id'];
    $product=readOneProduct($id);
   ?>

   <style>
       @keyframes promo {
  0%   {transform:translate(-20%,0);}
  50% {transform:translate(0%,0);}
  75% {transform:translate(20%,0);}
  100% {transform:translate(0%,0);}
}
.promo{
    animation-name: promo;
  animation-duration: 6.5s;
  animation-timing-function: linear;
  animation-delay: 2s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  
}
   </style>
    <div class="container-fluid px-lg-5 pt-5">
        <div class="row  bg-dark mx-auto py-3">
            <div class="col-lg-10 " style="overflow:hidden;">
                <h6 class="text-left text-light mt-2 promo">You get 14 days right to return the product <div class="badge bg-danger" >PROMO PRICE 25% OFF</div> </h6>
            </div>
            <div class="col-lg-2 col-md-6 my-auto  text-center ">
                <a href="products.php" class="btn btn-secondary rounded-0 btn-block ">Back</a>
            </div>
        </div>

        <div class="row w-100 mx-auto pt-2">
        <div class="card mb-3 col-lg-12 w-100 border-0" >
            <div class="row g-0 m-0 mx-auto ">
                <div class="col-lg-6 shadow-sm mx-auto" style="height:80vh;background:#fafafa;">
                <img src="../images/<?php echo $product['image']?>" class="h-100 w-100" alt="<?php echo $product['image']?>">
                </div>
                <div class="col-lg-6 my-auto">
                <div class="card-body text-center">
                    <h4 class="card-title display-4 font-weight-bolder"><?php echo $product['name']?></h4>
                    <h6 class="card-text" style="font-size:1.3rem;"><?php echo $product['price'] ?><small class="text-muted">$</small></h6>
                    <h5 class="text-uppercase" style="font-size:1.8rem;"><?php echo $product['brand']?></h5>
                    <p class="card-text"><?php echo $product['description']?></p>
                    <div class="btn btn-block btn-secondary rounded-0 mt-2">Add to cart</div>
                    <div class="btn btn-block rounded-0 btn-outline-dark mt-2">go to cart</div>
                </div>
                </div>
            </div>
    </div>
        </div>
    </div>
    

<?php require_once '../includes/footer.php' ?>