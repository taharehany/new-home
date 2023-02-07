<header>
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="logo p-0"><a class="navbar-brand" href="{{ route('dashboard') }}"><img class="img-fluid" src="{{ asset('admin/images/logo.png') }}" alt="" /></a></div>
      <div class="navbar-collapse">
         <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" aria-current="page" href="{{ route('dashboard') }}"><i class="fas fa-home"></i>Dashboard</a></li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>projects
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('projects.index') }}">Show</a></li>
                  <li><a class="dropdown-item" href="{{ route('projects.create') }}">Add</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>cities
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('cities.index') }}">Show</a></li>
                  <li><a class="dropdown-item" href="{{ route('cities.create') }}">Add</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>types
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('types.index') }}">Show</a></li>
                  <li><a class="dropdown-item" href="{{ route('types.create') }}">Add</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>website settings
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('settings.edit') }}">Edit</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
   <!-- <div class="logout"><a class="btn hvr-sweep-to-top" href="signin.html">logout</a></div> -->
</header>
