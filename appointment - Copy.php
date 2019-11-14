<?php
    include('common/html_head.php');
?>
  <body>
    
<?php
      include('common/nav.php');
?>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread">User profile</h1>
          </div>
        </div>
      </div>
    </div>
    
     <div class="modal-body">
            <form action="#">
              
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="reg-fname" class="text-black">Date set</label>
                    <input type="text" class="form-control" id="reg-fname">
                  </div>    
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="reg-lname" class="text-black">Appointment time</label>
                    <input type="number" class="form-control" id="reg-lname">
                  </div>
                </div>
             
              
              <div class="form-group">
                <label for="reg-contact" class="text-black">Appointment date</label>
                <input type="number" class="form-control" id="reg-contact">
              </div>
             
             
              
              <div class="form-group">
                <label for="reg-pwd" class="text-black">Password</label>
                <input type="password" class="form-control" id="reg-pwd">
              </div>
              <div class="form-group">
                <label for="register-conpwd" class="text-black">Confirm Password</label>
                <input type="password" class="form-control" id="register-conpwd">
              </div>
              <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary">
              </div>
            </form>
          </div>
          
          
          
          <?php
      include('common/footer.php');
?>
          
        

		