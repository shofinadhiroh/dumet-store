<div id="page-wrapper">
            <div class="container-fluid">
            <?php echo form_open_multipart('products/edit/'.$products_detail->id, ['novalidate' => 'novalidate']) ?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Products</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Category Id</label>
                                                    <input type="text" class="form-control" name="category_id" value="<?php echo $products_detail->category_id?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Image 1</label>
                                                    <input type="file" name="image1" id="file" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name" value="<?php echo $products_detail->name?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Slug</label>
                                                    <input type="text" class="form-control" name="slug" value="<?php echo $products_detail->slug?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control" name="price" value="<?php echo $products_detail->price?>"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Color</label>
                                                    <input type="text" class="form-control" name="color" value="<?php echo $products_detail->color?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description"><?php echo $products_detail->description?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="update" value="Update" class="btn btn-success form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <?php echo form_close()?>
        </div>
        <!-- /#page-wrapper -->
    </div>