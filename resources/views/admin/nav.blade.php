<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{ route('admin.page') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
    @can('users.index')
    <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
    @endcan

    <li><a href="{{ route('front.inicio') }}" target="_blanck"><i class="fa fa-users"></i> <span>Web</span></a></li>

    @can('roles.index')
    <li><a href="{{ route('roles.index') }}"><i class="fa fa-lock"></i> <span>Roles</span></a></li>
    @endcan

    @can('permissions.index')
    <li><a href="{{ route('permissions.index') }}"><i class="fa fa-lock"></i> <span>Permisos</span></a></li>
    @endcan

    <li class="treeview">
        <a href="#"><i class="fa fa-bars"></i> <span>Admin</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        @can('products.index')
        <li><a href="{{ route('products.index') }}"><i class="fa fa-eye"></i>Productos</a></li>
        @endcan
        @can('tags.index')
        <li><a href="{{ route('tags.index') }}"><i class="fa fa-eye"></i>Tags</a></li>
        @endcan

        @can('categories.index')
        <li><a href="{{ route('categories.index') }}"><i class="fa fa-eye"></i>Categorias</a></li>
        @endcan

        @can('posts.index')
        <li><a href="{{ route('posts.index') }}"><i class="fa fa-eye"></i>Post</a></li>
        @endcan

        <li><a href="{{ route('ponentes.index') }}"><i class="fa fa-eye"></i>Ponente</a></li>
        <li><a href="{{ route('bloqueunos.index') }}"><i class="fa fa-eye"></i>Bloque uno</a></li>


        </ul>
    </li>

    <li class="treeview">
        <a href="#"><i class="fa fa-bars"></i> <span>Web</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

        <li><a href="{{ route('bloqueunos.index') }}"><i class="fa fa-eye"></i>Bloque uno</a></li>
        <li><a href="{{ route('sliders.index') }}"><i class="fa fa-eye"></i>Slider</a></li>
        <li><a href="{{ route('oraciones.index') }}"><i class="fa fa-eye"></i>Oraciones</a></li>


        </ul>
    </li>


</ul>
