<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                  <h2>Products</h2>         
                  <table class="table table-striped table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Category Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; if($products): foreach($products as $product): ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $product->category_id ?></td>
                        <td><?php echo $product->name ?></td>
                        <td><?php echo $product->slug ?></td>
                        <td><?php echo $product->description ?></td>
                        <td><?php echo $product->image1 ?></td>
                        <td><?php echo $product->image2 ?></td>
                        <td>Rp <?php echo number_format($product->price, 0, ',', '.') ?></td>
                        <td><?php echo $product->color ?></td>
                        <td><a href="<?php echo site_url('products/edit/'.$product->id)?>" class="btn btn-warning">edit</a></td>
                        <td><a href="<?php echo site_url('products/remove/'.$product->id)?>" class="btn btn-danger">delete</a></td>
                      </tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                  </table>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>