<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header d-flex justify-content-between">
                <h2 class="fw-bold mb-0">Furnitures</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#saveProductModal">
                    Add New Product
                </button>
            </div>
            <table class="table table-hover my-0 text-center">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Furniture Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product):?>
                        <tr style="height: 200px">
                            <td>
                                <img style="width: 200px;" src="<?=base_url('/uploads/'.$product['image']);?>" alt="<?=$product['furnitureName']?>" srcset="">
                            </td>
                            <td class="fw-bold"><?=$product['furnitureName']?></td>
                            <td style="width: 400px;"><?=$product['furnitureDescription']?></td>
                            <td>₱<?=$product['furniturePrice']?></td>
                            <td><?=$product['stockQuantity']?></td>
                            <td>
                                <a href="/editProd/<?=$product['furnitureID']?>" class="btn btn-primary">Edit</a>
                                <a href="/deleteProd/<?=$product['furnitureID']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
