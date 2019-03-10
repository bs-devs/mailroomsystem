<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="./../img/logo.png" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name'), 'BDND' }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @include('inc.sidebar-user-panel')
        @include('inc.sidebar-menu')
    </div>
<!-- /.sidebar -->
</aside>