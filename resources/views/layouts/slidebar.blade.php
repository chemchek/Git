<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
          <li class="nav-header">PROGRAMS</li>
          <li class="nav-item">
            <a href="{{route('programs.index')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                All Meeting
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('programs.index')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Local Meeting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('programs.index')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                International Meeting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('quotes.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>QUOTES</p>
            </a>
          </li>
          <li class="nav-header">PROFILES</li>
          <li class="nav-item">
            <a href="{{route('leaders.index')}}" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Leaders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('participants.index')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Participants</p>
            </a>
          </li>
          <li class="nav-header">SETTING</li>
          <li class="nav-item">
            <a href="{{route('quotetypes.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Quote Type</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('meetingtypes.index')}}" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Meeting Type 
              </p>
            </a>
            
          </li>
          <li class="nav-header">USER</li>
          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">User Manager</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('roles.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>User Role</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>System Setting</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>