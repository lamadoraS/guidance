<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text text-center mx-3"><p>{{Auth::user()->role}}</p><sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://127.0.0.1:8000/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <ul class="nav">
    @if(auth()->check())
        @if(auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/admin">
                    <span class="material-symbols-outlined"></span>
                    <span>Admin</span>
                </a>
            </li>
            
        @endif

            @if(auth()->user()->role == 'admin' || auth()->user()->role == 'student')
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/offering">
                    <span class="material-symbols-outlined"></span>
                    <span>Offerings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/student">
                    <span class="material-symbols-outlined"></span>
                    <span>Student</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/counselor">
                    <span class="material-symbols-outlined"></span>
                    <span>Counselor</span>
                </a>
            </li>
            
            @endif
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/appointment">
                    <span class="material-symbols-outlined"></span>
                    <span>Appointments</span>
                </a>
            </li>
        @endif
  
    
</ul>


            

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           
        </ul>