<?= $this->extend('admin/layouts/adminmain'); ?>



<?= $this->section('breadcrumbs_links') ?>
<li class="breadcrumb-item active"></li>
<?= $this->endSection('breadcrumbs_links') ?>

<?= $this->section('contents') ?>
<div class="row m-2 showkeyfeaturesdiv ">
    <div class="card  col-12">
        <div class="card-header">
            <h4 class="box-title m-b-0">User Details</h4>
        </div>
        <div class="card-body">
            

            <div class="message mb-3"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          <!-- ---------------------- -->
                          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label for="user_name">First Name:</label>
            <input type="text" class="form-control" placeholder="First Name" name="firstname"value="<?php echo isset($FormData['firstname']) ? $FormData['firstname'] : ''; ?>">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="user_lname">Last Name:</label>
            <input type="text" class="form-control" placeholder="Last Name" name="lastname"value="<?php echo isset($FormData['lastname']) ? $FormData['lastname'] : ''; ?>">



        </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label for="email">Email:</label>
            <input type="text" class="form-control" placeholder="Email" name="email"value="<?php echo isset($FormData['email']) ? $FormData['email'] : ''; ?>">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="pass">Contact:</label>
            <input type="text" class="form-control" placeholder="contact" name="contact"value="<?php echo isset($FormData['contact']) ? $FormData['contact'] : ''; ?>">



        </div>
        </div>
    </div> <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label for="email">Address:</label>
            <input type="text" class="form-control" placeholder="Address" name="address"value="<?php echo isset($FormData['address']) ? $FormData['address'] : ''; ?>">
        </div>
        </div>
    </div>



                          <!-- ------------------------- -->
                                
                        </div>
                    </div>

                </div>
              
            </div>
        </div>
    </div>
</div>
   
    

    
<?= $this->endSection('contents') ?>