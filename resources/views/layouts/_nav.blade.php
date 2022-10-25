<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('melody/images/faces/Lunaion.png')}}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        Bienvenido
                    </p>
                    {{-- <p class="designation">
                        Super Admin
                    </p> --}}
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
            <a class="nav-link" data-toggle="collapse" href="#page-general" aria-expanded="false" aria-controls="page-general">
                <i class="fas fa-cogs menu-icon"></i>
                <span class="menu-title">General</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-general">
                <ul class="nav flex-column sub-menu">
                    @can('categories.index')
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="{{route('categories.index')}}">Categorías</a>
                        </li> 
                    @endcan
                    
                    @can('cities.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cities.index')}}">Ciudades</a>
                        </li>
                    @endcan
                    
                    @can('marks.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('marks.index')}}">Marcas</a>
                        </li>
                    @endcan
                        
                    @can('modelos.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('modelos.index')}}">Modelos</a>
                        </li> 
                    @endcan
                    
                    @can('operations.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('operations.index')}}">Operaciones</a>
                        </li>
                    @endcan
                    
                    @can('parts.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('parts.index')}}">Partes</a>
                        </li>
                    @endcan
                    
                    @can('providers.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('providers.index')}}">Proveedores</a>
                        </li>
                    @endcan
                    
                    @can('roles.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('roles.index')}}">Roles</a>
                        </li> 
                    @endcan
                    
                    @can('sedes.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sedes.index')}}">Sedes</a>
                        </li> 
                    @endcan
                    
                    @can('types.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('types.index')}}">Tipos</a>
                        </li> 
                    @endcan
                    
                    @can('users.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">Usuarios</a>
                        </li>
                    @endcan
                     
                </ul>
            </div>
        </li> 

        @can('warranties.index')
        <li class="nav-item">
            <a class="nav-link" href="{{route('warranties.index')}}">
                <i class="fa fa-inbox menu-icon"></i>
                <span class="menu-title">Garantías</span>
            </a>
        </li>
        @endcan

        @can('#')
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-users menu-icon"></i>
                    <span class="menu-title">Gestión de usuarios</span>
                </a>
            </li>  
        @endcan
        

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-reports" aria-expanded="false"
                aria-controls="page-reports">
                <i class="fas fa-tasks menu-icon"></i>
                <span class="menu-title">Reportes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-reports">
                <ul class="nav flex-column sub-menu">
                    @can('reports.day')
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="{{route('reports.day')}}">Reporte garantía por día</a>
                        </li>
                    @endcan
                    
                    @can('reports.date')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('reports.date')}}">Reportes garantía por fecha</a>
                        </li> 
                    @endcan
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