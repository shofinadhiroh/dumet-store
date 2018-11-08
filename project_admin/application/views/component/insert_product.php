<div id="page-wrapper">
            <div class="container-fluid">
            <?php echo form_open_multipart('products', ['novalidate' => 'novalidate']) ?>
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
                                                    <input type="text" class="form-control" name="category_id"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Image 1</label>
                                                    <input type="file" name="image1" id="file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Slug</label>
                                                    <input type="text" class="form-control" name="slug"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control" name="price"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Color</label>
                                                    <input type="text" class="form-control" name="color"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="Submit" class="btn btn-success form-control"/>
                                        </div>
                                        
                                        <?php if (!empty($errors)) var_dump($errors) ?>
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