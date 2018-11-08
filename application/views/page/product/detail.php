    <!-- Page Content -->
    <article class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h3>Detail Product</h3>
                    <hr/>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-xs-6 col-md-12">
                                    <a href="#" class="thumbnail">
                                        <img src="<?php echo base_url()?>images/<?php echo $product->image2 ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h1><?php echo $product->name ?></h1>
                            <h3>Rp <?php echo number_format($product->price, 0, '.',',') ?></h3>
                            <p><?php echo $product->description ?></p>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <?php echo form_open('cart/add') ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Color</label>
                                            <?php if($product->color):?>
                                            <div class="form-group">
                                                <select name="color">
                                                <?php foreach($product->color as $color): ?>
                                                    <option value="<?php echo $color?>"><?php echo $color?></option>
                                                <?php endforeach;?>
                                                </select>
                                            </div>
                                            <?php else: ?>
                                                <p>Pilihan Warna Tidak Tersedia</p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Qty</label>
                                            <div class="form-group">
                                                <input type="number" name="qty" value="1" max="10" min="1"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $product->id?>" />
                                        <button type="submit" name="add_to_cart" class="btn btn-primary form-control">Add to Cart</button>
                                        <?php if($this->session->flashdata('success')) echo $this->session->flashdata('success')?>
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                        <button type="submit" name="add_to_wishlist" class="btn btn-success form-control">Add to Wishlist</button>
                                        <?php 
                                        if($this->session->flashdata('success_wishlist')) echo $this->session->flashdata('success_wishlist');
                                        if($this->session->flashdata('failed_wishlist')) echo $this->session->flashdata('failed_wishlist');
                                        ?>
                                    </div>
                                    <?php echo form_close()?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /.container -->
    </article>
