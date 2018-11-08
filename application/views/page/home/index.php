<!-- Page Content -->
    <article class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2 class="no-margin">&nbsp;</h2>
                    <div class="row carousel-holder">
                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="slide-image" src="<?php echo base_url() ?>images/banner1.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="slide-image" src="<?php echo base_url() ?>images/banner2.jpg" alt="">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php if($products): foreach($products as $product): ?>
                    <div class="row text-center">
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo base_url() ?>images/<?php echo $product->image1 ?>" alt="">
                                <div class="caption">
                                    <h4><?php echo $product->name ?></h4>
                                    <h5>Rp <?php echo number_format($product->price, 0, ',', '.') ?></h5>
                                    <a href="<?php echo site_url('product/detail/'.$product->id.'/'.$product->slug) ?>" class="btn btn-default">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /.container -->
    </article>

    
