<!-- Page Content -->
    <article class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h3>Checkout</h3>
                    <hr/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                        <a href="#" class="btn btn-default active" role="button">Akun Member <i class="fa fa-angle-double-right"></i></a>
                        <a href="#" class="btn btn-default" role="button">Tarif Pengiriman <i class="fa fa-angle-double-right"></i></a>
                        <a href="#" class="btn btn-default" role="button">Ringkasan Belanja <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <br/>
                    <?php if ($this->session->flashdata('failed')): ?>
                            <p class="alert alert-danger"><?php echo $this->session->flashdata('failed')?></p>
                        <?php endif;?>
                        <?php if (validation_errors()): ?>
                            <ul class="alert alert-danger">
                                <?php echo validation_errors('<li>','</li>')?>
                            </ul>
                        <?php endif;?>
                    <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <h4>Login</h4>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <?php echo form_open()?>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login" class="form-control btn btn-primary" value="Log In"/>
                                    </div>
                                    <hr />
                                    <div class="form-group">
                                        <a href="<?php echo site_url('account/register')?>" class="form-control btn btn-success">Register</a>
                                    </div>
                                    <?php form_close()?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /.container -->
    </article>