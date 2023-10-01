<?php include 'include/head.php'?>
<body>
    <?php include 'include/nav.php'?>
    <!-- single product -->
	<div class="single-product mt-5 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="product-item">
						<img class="img-fluid" src="<?=base_url('/uploads/'.$selectedProduct['image'])?>" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h2 class="product-title fw-bold"><?=$selectedProduct['furnitureName']?></h2>
						<p class="product-pricing fs-4 fw-bold">₱<?=$selectedProduct['furniturePrice']?></p>
						<p><?=$selectedProduct['furnitureDescription']?></p>
						<div class="single-product-form">
							<form action="">
                                <div class="input-group g-3">
                                    <div class="col-3">
                                        <input type="number" class="form-control px-3" placeholder="Quantity" aria-label="Quantity">
                                    </div>
                                </div>
							</form>
							<a href="#" class="btn btn-secondary mt-4 mb-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->
    <?php include 'include/footer.php'?>
    <?php include 'include/bottom.php'?>
</body>
</html>