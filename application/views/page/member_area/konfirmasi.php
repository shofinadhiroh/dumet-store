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
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <?php echo form_open()?>
                                    <div class="form-group">
                                        <label>Order ID</label>
                                        <input type="text" class="form-control" value="<?php echo $order_id ?>" name="order_id"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Rekening Tujuan</label>
                                        <select class="form-control" name="rekening_tujuan">
                                        <?php foreach($no_rek as $rek): ?>
                                            <option>Bank <?php echo $rek->bank?>: <?php echo $rek->no_rekening?> A/N <?php echo $rek->nama_pemegang?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Rekening Pengirim</label>
                                        <input type="text" class="form-control" name="rekening_member"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pemegang Rekening</label>
                                        <input type="text" class="form-control" name="nama_pemegang"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Nominal Yang Dikirim</label>
                                        <input type="text" class="form-control" name="nominal" placeholder="Sama persis dengan yang anda kirim. Contoh: 45500"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembayaran</label>
                                        <br>
                                        <select name="date">
                                            <?php for($d = 1; $d<=31; $d++): ?>
                                            <option value="<?php echo $d?>"><?php echo $d?></option>
                                            <?php endfor; ?>
                                        </select>
                                        <select name="month">
                                            <?php for($m = 1; $m<=12; $m++): ?>
                                            <option value="<?php echo $m?>"><?php echo month_name($m)?></option>
                                            <?php endfor; ?>
                                        </select>
                                        <select name="year">
                                            <?php for($y = date('Y'); $y>=(date('Y')-1); $y--): ?>
                                            <option value="<?php echo $y?>"><?php echo $y?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="konfirmasi_submit" value="Konfirmasi" class="form-control btn btn-success"/>
                                    </div>
                                    <?php echo form_close()?>
                                </div>
                            </div>
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