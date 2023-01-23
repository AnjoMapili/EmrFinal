<?php
include "Connections/dbconnect.php";
?>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet" />

<div class="grid-container"> 
<?php
        include "templates/header.php";
        include "templates/sidebar.php";
    ?>     

        <!-- Main -->    
    <main class="main-container">
 <?php
      include "templates/dropdownlist.php";
      ?>
    <div class="container-fluid px-4">
    <h2 class="mt-4">PRODUCT LIST</h2>
   
  <!-- Modal Fade Add Product Form -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="color:black;">
        <h5 class="modal-title fs-5" id="exampleModalLabel" >Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
 <div class="modal-body" style="color:black;">

  
  <div class="mb-3">
    <label for="productName" class="form-label">Name</label>
    <input type="text" class="form-control" id="productName" aria-describedby="emailHelp" placeholder="Enter your name" " requireds> 
  </div>
  <div class="mb-3">
    <label for="productQuantity" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="productQuantity" aria-describedby="emailHelp" placeholder="Enter your quantity" " requireds> 
  </div>
  <div class="mb-3">
    <label for="productPrice1" class="form-label">Price (150g)</label>
    <input type="text" class="form-control" id="productPrice1" aria-describedby="emailHelp" placeholder="Enter your price" " requireds> 
  </div>
  <div class="mb-3">
    <label for="productPrice2" class="form-label">Price (250g)</label>
    <input type="text" class="form-control" id="productPrice2" aria-describedby="emailHelp" placeholder="Enter your price" " requireds> 
  </div>
  <div class="mb-3">
    <label for="productPrice3" class="form-label">Price (500g)</label>
    <input type="text" class="form-control" id="productPrice3" aria-describedby="emailHelp" placeholder="Enter your price" " requireds> 
  </div>
  <div class="mb-3">
    <label for="productPrice4" class="form-label">Price (1000g)</label>
    <input type="text" class="form-control" id="productPrice4" aria-describedby="emailHelp" placeholder="Enter your price" " requireds> 
  </div>

 
</div>
<!-- Modal Footer -->
<div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="addproductuser()">sumbit</button>
        <button type="button" class="btn btn-danger"data-bs-dismiss="modal">close</button>
        
      </div>    
      </div>                                
    </div>
  </div>

       <!-- Add Customer button Modal -->
<button type="button" id="btncustomer" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#productModal">
  Add Products

</button>
</button>
<div id="displayProductDataTable" class="px-1 my-3" style="color:white;"></div>
</div>
            
    </main>
        <!-- End Main -->
</div>
<script
   src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" >
  </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    ></script>
<?php
    include "templates/footer.php";
?>
      