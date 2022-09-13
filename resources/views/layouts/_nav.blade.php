<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('melody/images/faces/Lunaion.png')}}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        Bienvenido Javier
                    </p>
                    <p class="designation">
                        Super Admin
                    </p>
                </div>
            </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-general" aria-expanded="false"
                aria-controls="page-general">
                <i class="fas fa-sitemap menu-icon"></i>
                <span class="menu-title">General</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-general">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{route('categories.index')}}">Categorías</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cities.index')}}">Ciudades</a>
                    </li>
                    
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{route('business.index')}}">Empresa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('printers.index')}}">Impresora</a>
                    </li> 
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('marks.index')}}">Marcas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('modelos.index')}}">Modelos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('modelos.index')}}">Operaciones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('parts.index')}}">Partes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('providers.index')}}">Proveedores</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('roles.index')}}">Roles</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('providers.index')}}">Sedes</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}">Usuarios</a>
                    </li> 
                    
                </ul>
            </div>
        </li> 

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-inbox menu-icon"></i>
                <span class="menu-title">Garantías</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-reports" aria-expanded="false"
                aria-controls="page-reports">
                <i class="fas fa-tasks menu-icon"></i>
                <span class="menu-title">Reportes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-reports">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{route('reports.day')}}">Reportes por día</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reports.date')}}">Reportes por fecha</a>
                    </li> 
                </ul>
            </div>
        </li> 

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-info-circle menu-icon"></i>
                <span class="menu-title">Acerca de...</span>
            </a>
        </li>

    </ul>
</nav>