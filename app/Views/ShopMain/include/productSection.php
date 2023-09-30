<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">
            <?php if($activePage === 'Home' || $activePage === 'Services'):?>
            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
                <p><a href="/shop" class="btn">Explore</a></p>
            </div> 
            <!-- End Column 1 -->
            <?php endif;?>
            
            <?php foreach($products as $product):?>
            <!-- Start Column 2 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="<?=base_url('/uploads/'.$product['image']);?>" class="img-fluid product-thumbnail">
                    <h3 class="product-title"><?=$product['furnitureName']?></h3>
                    <strong class="product-price">₱<?=$product['furniturePrice']?></strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div> 
            <!-- End Column 2 -->
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- End Product Section -->