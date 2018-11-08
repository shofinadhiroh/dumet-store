<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <?php echo form_open()?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" type="text" class="form-control" value="<?php echo $admin_detail->nama?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" type="text" class="form-control" value="<?php echo $admin_detail->password?>"/>
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
                <?php echo form_close()?>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>