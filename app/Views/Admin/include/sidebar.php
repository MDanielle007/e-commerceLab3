<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Furni    Admin</span>
        </a>
        
        <ul class="sidebar-nav">

            <li class="sidebar-item <?php if($activePage === 'Dashboard') echo 'active'?>">
                <a class="sidebar-link" href="/dashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item <?php if($activePage === 'Profile') echo 'active'?>">
                <a class="sidebar-link" href="/adminProfile">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-item <?php if($activePage === 'Sign Up') echo 'active'?>">
                <a class="sidebar-link" href="/adminRegister">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
                </a>
            </li>

            <li class="sidebar-item <?php if($activePage === 'Products') echo 'active'?>">
                <a class="sidebar-link" href="/products">
                    <i class="align-middle me-2" data-feather="truck"></i> <span class="align-middle">Products</span></i>
                </a>
            </li>
        </ul>
    </div>
</nav>