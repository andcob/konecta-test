<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
</li>
