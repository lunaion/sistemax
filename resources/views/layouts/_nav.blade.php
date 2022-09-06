<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('melody/images/faces/Lunaion.png')}}" alt="image" />
                </div>
            </div>
        </li>

        {{--  @can('business.index' || 'printers.index' )  --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fas fa-cogs menu-icon"></i>
                <span class="menu-title">Configuración</span>
                <i class="menu-arrow"></i>
            </a>

                @can('products.index')
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="{{route('products.index')}}">Productos</a>
                </li> 
                @endcan
                @can('categories.index')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categories.index')}}">Categorias</a>
                </li> 
                @endcan
                @can('users.index')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.index')}}">Usuarios</a>
                </li> 
                @endcan
        </li> 
        {{--  @endcan  --}}

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="{{route('providers.index')}}" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fas fa-cogs menu-icon"></i>
                <span class="menu-title">Garantías</span>
            </a>
        </li>
    </ul>
</nav>