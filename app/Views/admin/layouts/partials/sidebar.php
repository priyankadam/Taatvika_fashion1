<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(route_to('admin.dashboard')); ?>" class="brand-link">
        <img src="<?= base_url() ?>assets/images/logo/png logo for web-01 (1).png" alt="AdminLTE Logo" class="brand-image  elevation-3" style="opacity: .8;">
        <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!--<div class="image">-->
            <!--    <img src=" <?= base_url() ?>assets/images/logo/png logo for web-01 (1).png" class="elevation-2" alt="User Image">-->
            <!--</div>-->
            <div class="info">
                <a href="#" class="d-block">User Login:<?= isset($_SESSION['adminloggedname']) ? ucfirst(session()->get('adminloggedname')) : 'Admin123' ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="<?php echo base_url();?>admin/dashboard" class="nav-link active">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                
                 <li class="nav-item menu-close">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-chart-pie"></i>
                        <p>
                            Product Master
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/List-Product" class="nav-link active">
                               <i class="fa fa-list" aria-hidden="true"></i>
                                <p>List of Products</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/Add-Mens-Product" class="nav-link active">
                                <i class="fa fa-circle nav-icon "></i>
                                <p>Add Mens Product</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin/Add-Womens-Product" class="nav-link active">
                                <i class="fa fa-circle nav-icon "></i>
                                <p>Add Womens Product</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                            <a href="<?php echo base_url(); ?>admin/Collection" class="nav-link active">
                                <i class="fa fa-circle nav-icon "></i>
                                <p>Add Collection</p>
                            </a>

                        </li>
                    </ul>
                     <ul class="nav nav-treeview">
                           <li class="nav-item">
                       
                                 <a href="<?php echo base_url();?>admin/accessories" class="nav-link active">
                                     <i class="fa fa-circle nav-icon "></i>
                                     <p>Add Accessories</p>
                                 </a>
                            
                           </li>
                    </ul>
                </li>
             
                     
                  
                     <li class="nav-item menu-close">
                         <a href="#" class="nav-link active">
                             <i class="nav-icon fa fa-chart-pie"></i>
                             <p>
                                 Front Page Master
                                 <i class="right fa fa-angle-left"></i>
                             </p>
                         </a>
                   
               <!--  <li class="nav-item">
                    <a href="#" class="nav-link  active" style="display: block;">
                        <i class="nav-icon fa fa-chart-pie"></i>
                        <p>
                            Masters
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a> -->
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                       
                                 <a href="<?php echo base_url();?>admin/banner" class="nav-link active">
                                     <i class="fa fa-circle nav-icon "></i>
                                     <p>Banner Slider</p>
                                 </a>
                            
                               
                           
                         </li>
                        <li class="nav-item">
                       
                                 <a href="<?php echo base_url();?>admin/create-box" class="nav-link active">
                                     <i class="fa fa-circle nav-icon "></i>
                                     <p>Box</p>
                                 </a>
                            
                               
                           
                         </li>
                          <li class="nav-item">
                             
                               <a href="<?php echo base_url();?>admin/megaBoxes" class="nav-link active">
                                   <i class="fa fa-circle nav-icon "></i>
                                   <p>Mega Box</p>
                               </a>
                               
                               
                               
                           </li>
                            <li class="nav-item">

                           <a href="<?php echo base_url();?>admin/miniBanner" class="nav-link active">
                               <i class="fa fa-circle nav-icon "></i>
                               <p>Mini Banner</p>
                           </a>



                       </li>


                        
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?php echo base_url();?>admin/userlist" class="nav-link active">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users List
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                      <li class="nav-item menu-open">
                    <a href="<?php echo base_url();?>admin/orders" class="nav-link active">
                    <i class="nav-icon fa fa-shopping-cart"></i>
                    <p>
                        Orders
                        <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?php echo base_url();?>admin/shippingPolicy" class="nav-link active">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                        Shipping Policy
                        <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                </a>
                </li>
                <li class="nav-item menu-open">

                <a href="<?php echo base_url();?>admin/paymentReport" class="nav-link active">
                   <i class="nav-icon fa fa-money"></i>
                    <p>
                     Payment Report
                     <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                </a>
                </li>
                 <li class="nav-item menu-open">

                  <a href="<?php echo base_url(); ?>admin/size_materialView" class="nav-link active">
                    <i class="nav-icon fa fa-folder"></i>
                    <p>
                     Size and Material Master
                     <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                  </a>
                </li>
                 <li class="nav-item menu-open">

                  <a href="<?php echo base_url(); ?>admin/fit_fabricView" class="nav-link active">
                    <i class="nav-icon fa fa-file-text"></i>
                    <p>
                     Fit and Fabric Master
                     <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                  </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>