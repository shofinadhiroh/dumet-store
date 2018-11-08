<!-- Page Content -->
    <article class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h3>Member Area</h3>
                    <hr/>
                    <div class="row">
                        <div class="col-md-8">
                        <?php if($this->session->flashdata('remove_success')):?>
                            <p class="alert alert-success"><?php echo $this->session->flashdata('remove_wishlist')?>Product berhasil dihapus dari wishlist</p>
                        <?php endif; ?>
                        <?php if(! empty($wishlist)): ?>
                            <div class="row text-center">
                            
                            <?php foreach($wishlist as $list): ?>
                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url()?>images/<?php echo $list->image1?>" alt="">
                                        <div class="caption">
                                            <h4>(<a href="<?php echo site_url('member_area/remove_wishlist/'.$list->wishlist_id)?>">X</a>)<?php echo $list->name?></h4>
                                            <h5><?php echo rupiah($list->price)?></h5>
                                            <a href="<?php echo site_url('product/detail/'.$list->id.'/'.$list->slug)?>" class="btn btn-default">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                            </div>
                            
                            <?php else: ?>
                                <p>Wishlist kosong</p>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-4">
                            <?php $this->load->view('component/member_area_nav')?>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /.container -->
    </article>