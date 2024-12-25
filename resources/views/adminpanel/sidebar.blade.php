<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="kt" class="brand-link">
        <img src="admin-panel/dist/img/Youexcel-logowhite.png" alt="AdminLTE Logo" class="w-75" style="opacity: .8">
        <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="kt" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gallery_cat') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Add Gallery Category
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery_img') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Add Gallery Image
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('add.course') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Add Regular Course Name
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('program.name') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Add Corporate Course Name
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('project.name') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Add Project Course Name
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="add-calendar" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Add Calendar
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                  <a href="add-course" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                    Add Courses
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="add-trainer" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                    Add Trainers
                    </p>
                  </a>
                </li> -->
                
                 <li class="nav-item">
                    <a href="view-navttc-form-data" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                           View NAVTCC Reg Form Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-Leadform" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Lead Form Data
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('view.project.form') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Project Form Data
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('corporate.leadform') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Corporate Lead Data
                        </p>
                    </a>
                </li>

                     <li class="nav-item">
                    <a href="add-brochure" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Add Brochure
                        </p>
                    </a>
                </li>
                
                 <li class="nav-item">
                    <a href="view-navttcform" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                         Summer of Code Lead Form Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-registered" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Registration Form Data
                        </p>
                    </a>
                </li>
                   <li class="nav-item">
                    <a href="{{ route('resources.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-window-maximize"></i>
                        <p>
                            Popup Option 
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-cfma-recorded" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            CFMA Recorded Form
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-free-reg-form-data" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Free Education Form
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="view-feedback" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Feedback Form Data
                        </p>
                    </a>
                </li>
                  <li class="nav-item">
                    <a href="view-Suppotform" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Support Form Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-careers" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Careers Form Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-Contactus" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Contact us Form Data
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="View-assests-table" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <!--<i class="fa-solid fa-layer-group"></i>-->
                        <p>
                            Assesment TNA 2025&nbsp;&nbsp;
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                
                                <li class="nav-item">
                    <a href="View-kamyabjawan-form" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Kamyab jawan Form
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="view-funnel" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Funnel Form Data
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="view-freedemo" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Book Appointment Form
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
