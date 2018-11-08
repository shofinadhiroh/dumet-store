    <!-- Page Content -->
    <article class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h3>Checkout</h3>
                    <hr/>
                    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                        <a href="#" class="btn btn-default" role="button">Akun Member <i class="fa fa-angle-double-right"></i></a>
                        <a href="#" class="btn btn-default" role="button">Tarif Pengiriman <i class="fa fa-angle-double-right"></i></a>
                        <a href="#" class="btn btn-default active" role="button">Ringkasan Belanja <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <h4>Data Member</h4>
                            <div class="panel panel-default">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama Depan:</td>
                                            <td><?php echo $member->nama_depan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Belakang:</td>
                                            <td><?php echo $member->nama_belakang ?></td>
                                        </tr>
                                        <tr>
                                            <td>Telp:</td>
                                            <td><?php echo $member->telepon ?></td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi:</td>
                                            <td><?php echo $member->provinsi ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kota:</td>
                                            <td><?php echo $member->kota ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kode Pos:</td>
                                            <td><?php echo $member->kode_pos ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Pengiriman:</td>
                                            <td><?php echo $member->alamat ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h4>Ringkasan Pesanan</h4>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Produk</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($order as $item): ?>
                                            <tr>
                                                <td>
                                                    <h3 class="no-margin"><a href=""><?php echo $item['name']?></a></h3>
                                                    <p class="no-margin">Color: <?php echo $item['options']['color']?></p>
                                                    <p class="no-margin">Qty: <?php echo $item['qty']?></p>
                                                    <p class="no-margin">Harga: <?php echo rupiah($item['price'])?></p>
                                                </td>
                                                <td>
                                                    <h5 class="no-margin"><?php echo rupiah($item['subtotal'])?></h5>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <th>Tarif Pegiriman</th>
                                                <th><?php echo rupiah($this->session->userdata['tarif_akhir'])?></th>
                                            </tr>
                                            <tr>
                                                <th><h3 class="no-margin">Total Biaya</h3></th>
                                                <th><h3 class="no-margin"><?php echo rupiah($this->cart->total())?></h3></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <input type="button" onclick="window.location.href='<?php echo site_url('ringkasan/order_submit')?>'" class="form-control btn btn-primary" value="Finish Order"/>
                                    </div>
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
