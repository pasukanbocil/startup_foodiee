<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Starup Foodiee</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">SF</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Food</li>
        <li class="dropdown {{ Request::is('dashboard/food') ? 'active' : '' }}">
            <a href="/dashboard/food" class="nav-link"><i class="fas fa-burger"></i>
                <span>Food</span></a>
        </li>
        <li class="menu-header">Category</li>
        <li class="dropdown">
            <a href="#" class="nav-link"><i class="fas fa-th-large"></i>
                <span>Category Food</span></a>
        </li>
    </ul>
</aside>
