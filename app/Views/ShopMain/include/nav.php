<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

<div class="container">
    <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item 
            <?php if ($activePage === 'Home') echo 'active'; ?>">
                <a class="nav-link" href="/">Home</a>
            </li>
            
            <li class="nav-item 
            <?php if ($activePage === 'Shop') echo 'active'; ?>">
                <a class="nav-link" href="/shop">Shop</a>
            </li>

            <li class="nav-item 
            <?php if ($activePage === 'About') echo 'active'; ?>">
                <a class="nav-link" href="/about">About us</a>
            </li>
                
            <li class="nav-item 
            <?php if ($activePage === 'Services') echo 'active'; ?>">
                <a class="nav-link" href="/services">Services</a>
            </li>
            
            <li class="nav-item 
            <?php if ($activePage === 'Contact') echo 'active'; ?>">
                <a class="nav-link" href="/contact">Contact us</a>
            </li>
        </ul>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li>
                <div class="dropdown">
                    <a class="nav-link" href="#" class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="/images/user.svg"></a>
                    <ul class="dropdown-menu">
                        <?php if(session()->get('isLoggedIn')): ?>
                            <li><a class="dropdown-item" href="/">My Profile</a></li>
                            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                        <?php else: ?>
                            <li><a class="dropdown-item" href="/login">Log In</a></li>
                            <li><a class="dropdown-item" href="/signup">Sign Up</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </li>
            <li><a class="nav-link" href="/cart"><img src="/images/cart.svg"></a></li>
        </ul>
    </div>
</div>
    
</nav>
<!-- End Header/Navigation -->