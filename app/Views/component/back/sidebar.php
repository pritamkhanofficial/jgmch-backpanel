 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title" key="t-menu">Menu</li>
                 <li>
                     <a href="<?=base_url('back-panel/dashboard')?>" class="waves-effect">
                         <i class="bx bx-home-circle"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="fas fa-cogs"></i>
                         <span key="t-master">Master</span>
                     </a>
                     <ul class="sub-menu mm-collapse" aria-expanded="false">
                         <li><a href="<?=base_url('back-panel/department')?>" key="t-default">Department</a></li>
                         <li><a href="<?=base_url('back-panel/designation')?>" key="t-default">Designation</a></li>
                         <li><a href="<?=base_url('back-panel/committee')?>" key="t-default">Committee</a></li>
                         <li><a href="<?=base_url('back-panel/page')?>" key="t-default">Page</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/about-hospital')?>" class="waves-effect">
                         <i class=" fas fa-info-circle "></i>
                         <span>About Hospital</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/slider')?>" class="waves-effect">
                         <i class="fas fa-sliders-h "></i>
                         <span>Slider</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/documents')?>" class="waves-effect">
                         <i class=" far fa-clipboard"></i>
                         <span>Documents</span>
                     </a>
                 </li>

                 <li>
                     <a href="<?=base_url('back-panel/gallery')?>" class="waves-effect">
                         <i class="fa fa-film"></i>
                         <span>Gallery</span>
                     </a>
                 </li>

                 <li>
                     <a href="<?=base_url('back-panel/hospital-head')?>" class="waves-effect">
                         <i class="fa fa-id-badge"></i>
                         <span>Hospital Head</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/staff')?>" class="waves-effect">
                         <i class="fas fa-hospital-user"></i>
                         <span>Staff</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/content-management')?>" class="waves-effect">
                         <i class="fas fa-tasks"></i>
                         <span>Content Management</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('back-panel/logout')?>" class="waves-effect">
                         <i class="bx bx-power-off"></i>
                         <span>Logout</span>
                     </a>
                 </li>
             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->