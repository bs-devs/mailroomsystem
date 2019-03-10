<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="nav-icon fa fa-home"></i>
                <p>Home</p>
            </a>
        </li>
        @auth
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fa fa-network-wired"></i>
                    <p>Network Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endauth
    </ul>
</nav>
<!-- /.sidebar-menu -->