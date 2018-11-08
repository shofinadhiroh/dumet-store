    <!-- Page Content -->
    <article class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h3>Finish Order</h3>
                    <hr/>
                    <p class="alert alert-info">
                        Terima kasih, pesanan anda akan kami proses setelah pembayaran.
                    </p>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Info Pembayaran:</h4>
                            <h5 class="no-margin">Bank BCA</h5>
                            <h5 class="no-margin">No Rek: 11110393 A/N DUMET Store</h5>
                            <h5 class="no-margin">Bank Mandiri</h5>
                            <h5 class="no-margin">No Rek: 11112222 A/N DUMET Store</h5>
                            <a href="<?php echo site_url('member/konfirmasi'.$order->kode)?>" class="btn btn-success btn-xs">Konfirmasi Pembayaran</a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Pesanan Anda:</h4>
                            <h5 class="no-margin">ID: #<?php echo $order->kode?></h5>
                            <h5 class="no-margin">Tanggal: <?php echo ind_date($order->tanggal)?></h5>
                            <h5 class="no-margin">Total: Rp <?php echo rupiah($order->total_harga)?></h5>
                            <a href="<?php echo site_url('member/order_detail'.$order->kode)?>" class="btn btn-success btn-xs">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /.container -->
    </article>