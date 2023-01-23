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
    
  <!-- Modal Fade Add Customer Customer Form -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="color:black;">
        <h5 class="modal-title fs-5" id="exampleModalLabel" >New Customers Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
 <div class="modal-body" style="color:black;">

  
  <div class="mb-3">
    <label for="completeName" class="form-label">Name</label>
    <input type="text" class="form-control" id="completeName" aria-describedby="emailHelp" placeholder="Enter your name"  requireds> 
    <span id="addcustomernameerror" style="color: red; font-size: 16pt;"></span>
  </div>
  <div class="mb-3">
    <label for="completeEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="completeEmail" aria-describedby="emailHelp" placeholder="Enter your email" > 
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <span id="addcustomeremailerror" style="color: red; font-size: 16pt;"></span>
  </div>
  <div class="mb-3">
    <label for="completeContact" class="form-label">Contact #</label>
    <input type="text" class="form-control" id="completeContact" aria-describedby="emailHelp" placeholder="Enter your contact number" >
    <span id="addcustomercontacterror" style="color: red; font-size: 16pt;"></span>
  </div>
  <div class="mb-3">
    <label for="completeAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="completeAddress" aria-describedby="emailHelp" placeholder="Enter your Address" >
    <span id="addcustomeraddresserror" style="color: red; font-size: 16pt;"></span>
  </div>
  <div class="mb-3">
    <label for="completeDate" class="form-label">Date</label>
    <input type="date" class="form-control" id="completeDate" aria-describedby="emailHelp" placeholder="Enter your birthdate"> 
    <span id="addcustomerdateerror" style="color: red; font-size: 16pt;"></span>
  </div>
</div>
<!-- Modal Footer -->
<div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="adduser()">sumbit</button>
        <button type="button" class="btn btn-danger"
        onclick="clearuser()" data-bs-dismiss="modal">close</button>
        
      </div>    
      </div>                                
    </div>
  </div>

  <!-- Update button -->

    <!-- Modal Fade Upadte-->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="color:black;">
        <h5 class="modal-title fs-5" id="exampleModalLabel" >Update Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
 <div class="modal-body" style="color:black;">


  <div class="mb-3">
    <label for="updateName" class="form-label">Name</label>
    <input type="text" class="form-control" id="updateName" aria-describedby="emailHelp" placeholder="Enter your name"> 
  </div>
  <div class="mb-3">
    <label for="updateEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="updateEmail" aria-describedby="emailHelp" placeholder="Enter your email" > 
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="updateContact" class="form-label">Contact #</label>
    <input type="text" class="form-control" id="updateContact" aria-describedby="emailHelp" placeholder="Enter your contact number" > 
  </div>
  <div class="mb-3">
    <label for="updateAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="updateAddress" aria-describedby="emailHelp" placeholder="Enter your Address" > 
  </div>
  <div class="mb-3">
    <label for="updateDate" class="form-label">Date</label>
    <input type="date" class="form-control" id="updateDate" aria-describedby="emailHelp" placeholder="Enter your birthdate"> 
  </div>
</div>
<!-- Modal Footer -->
<div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="updateDetails()">Update</button>  
        <button type="button" class="btn btn-danger"data-bs-dismiss="modal">close</button>
        <input type="hidden" id="hiddendata">
      </div>    
      </div>                                
    </div>
  </div>


  <!-- Modal Delete -->
  <div class="modal fade " id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="color:black;">
        <h5 class="modal-title fs-5" id="exampleModalLabel" >Are you sure??</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
 <div class="modal-body" style="color:black;">


 <span id="deletemessage" style="color:red;">hi</span>
</div>
<!-- Modal Footer -->
<div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="deleteModal()">Yes</button>  
        <button type="button" class="btn btn-danger"data-bs-dismiss="modal">No</button>
       
      </div>    
      </div>                                
    </div>
  </div>

    

  <div class="container-fluid px-4">
    <h2 class="mt-4">CUSTOMERS LIST</h2>
   
  

       <!-- Add Customer button Modal -->
<button type="button" id="btncustomer" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#completeModal">
  Add New Customers

</button>
<div id="displayDataTable" class="px-1 my-3" style="color:white;"></div>
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

<
      