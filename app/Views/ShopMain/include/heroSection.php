<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <?php if($heroSection === 'Shop'):?>
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            <?php else:?>
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <?php switch($heroSection){
                            case 'Home': 
                                echo '<h1>
                                    Modern Interior 
                                    <span clsas="d-block">Design Studio</span>
                                </h1>';
                                break;
                            case 'About':
                                echo '<h1>About Us</h1>';
                                break;
                            case 'Services':
                                echo '<h1>Services</h1>';
                                break;
                            case 'Contact':
                                echo '<h1>Contact Us</h1>';
                                break;
                        }?>
                        
                        
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/couch.png" class="img-fluid">
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
<!-- End Hero Section -->