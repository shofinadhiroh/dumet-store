<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url() ?>">Dumet Store</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo site_url('cart')?>"><?php echo $this->cart->total_items()?><i class="fa fa-shopping-cart"></i></a></li>
                            <?php if($this->session->userdata('is_login')): ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('nama') ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('member_area')?>">Member Area</a></li>
                                    <li><a href="<?php echo site_url('home/logout')?>">Log Out</a></li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li>
                                <a href="<?php echo site_url('account')?>">Login</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /.container -->
    </nav>