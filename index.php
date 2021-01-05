<?php 

require_once 'includes/header.php';
require_once 'readproducts/readproduct.php';
ProductsCustomer()
?>

<!-- carousel css -->

<style>

    .carousel-caption h5{
        text-transform:uppercase;
        font-size:2.6rem;
    }
    .carousel-caption p{
        font-size:1.5rem;
    }
    
</style>

<!-- end carousel css -->


<div class="container-fluid p-0 px-lg-5 pt-4 m-0" >
    <div class="row m-0 mx-auto">
        <div class="col-lg-8  mx-auto" style="min-height:50vh;">
        <div class="row">
            <div class="col-lg-12  mx-auto p-0" style="height:50vh;">


                  <!-- carousel -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade p-0 m-0" data-bs-ride="carousel">
  <div class="carousel-inner p-0 m-0">
    <div class="carousel-item active p-0  m-0">
      <img src="images/bg1.jpg" class="d-block w-100" style="height:50vh;" alt="...">
      <div class="carousel-caption d-md-block text-uppercase">
        <h5 class="text-danger">First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item p-0">
      <img src="images/bg2.jpg" class="d-block w-100 " style="height:50vh;" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/bg3.jpg" class="d-block w-100" style="height:50vh;" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
    <!--end carousel  -->
            
            
            </div>
        </div>

        <style>
.nav-link{
   color:#fafafa;
   text-transform:uppercase;
   font-weight:600;
}
.nav-link:hover{
color:#fafafa;
border:none;

}

.nav-link.active{
    background:#0a0a0a;
    color:#fafafa;
    margin-bottom:4px;
}
.nav-link.active:hover{
color:#0a0a0a;
}

</style>


     <div class="row mt-3">
     <div class="col-lg-12 p-0" style="min-height:60vh;">
     <nav style="background:#1b1b1b;" >
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:50px;" >
            <a class="nav-link active rounded-0" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-link rounded-0" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
            <a class="nav-link rounded-0" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
        </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <!-- card-group -->
        <div class=" card-group" >

  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  


 

</div>
<!-- card-group end -->
        </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
             <!-- card-group -->
        <div class="card-group">

<div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

</div>
<!-- card-group end -->
        
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                 <!-- card-group -->
        <div class="card-group " >

<div class="card ">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<div class="card c">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<div class="card ">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

</div>
<!-- card-group end -->
        
        </div>
        </div>

     </div>
     </div>
       
     
        
        </div>
       

        <div class="col-lg-3 bg-dark mx-auto" style="min-height:90vh;"></div>

    </div>

   

</div>

<div class="container-fluid px-lg-5  p-0 pt-4">
    <div class="row p-0 m-0">
            <div class="col-lg-12 px-2 m-0 text-center text-uppercase display-6 text-white " style="min-height:25vh;  background: rgba(10, 10, 10, 0.8)"   >
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat aliquam voluptatum dignissimos numquam sed autem, ratione dolorum natus libero eligendi.
            </div>
    </div>

</div>





<?php require_once 'includes/footer.php'; ?>