<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <?php echo form_open()?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">No Rekening</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>No Rekening</label>
                                            <input name="no_rekening" type="text" class="form-control" value="<?php echo $rekening_detail->no_rekening?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pemegang</label>
                                            <input name="nama_pemegang" type="text" class="form-control" value="<?php echo $rekening_detail->nama_pemegang?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Bank</label>
                                            <input name="bank" type="text" class="form-control" value="<?php echo $rekening_detail->bank?>"/>
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