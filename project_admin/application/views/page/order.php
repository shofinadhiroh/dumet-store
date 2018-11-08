<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                  <h2>Order</h2>
                  <?php echo form_open('order/update')?>         
                  <table class="table table-striped table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Member</th>
                        <th>Total Produk</th>
                        <th>Total Barang</th>
                        <th>Total Harga</th>
                        <th>Id Tarif Pengiriman</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Decline</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; if($order): foreach($order as $orders): ?>
                    <?php if($orders->status==0): ?>
                      <tr class="danger">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $orders->kode ?></td>
                        <td><?php echo $orders->nama_depan ?></td>
                        <td><?php echo $orders->total_product ?></td>
                        <td><?php echo $orders->total_qty ?></td>
                        <td>Rp <?php echo number_format($orders->total_harga, 0, ',', '.') ?></td>
                        <td><?php echo $orders->tarif_pengiriman_id ?></td>
                        <td><?php echo $orders->tanggal ?></td>
                        <td><?php echo $orders->status ?></td>
                        <td><a href="<?php echo site_url('order/approve/'.$orders->id)?>" class="btn btn-warning">approve</a></td>
                        <td><a href="<?php echo site_url('order/decline/'.$orders->id)?>" class="btn btn-danger">decline</a></td>
                      </tr>
                      <?php else: ?>
                      <tr class="success">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $orders->kode ?></td>
                        <td><?php echo $orders->nama_depan ?></td>
                        <td><?php echo $orders->total_product ?></td>
                        <td><?php echo $orders->total_qty ?></td>
                        <td>Rp <?php echo number_format($orders->total_harga, 0, ',', '.') ?></td>
                        <td><?php echo $orders->tarif_pengiriman_id ?></td>
                        <td><?php echo $orders->tanggal ?></td>
                        <td><?php echo $orders->status ?></td>
                        <td><a href="<?php echo site_url('order/approve/'.$orders->id)?>" class="btn btn-warning">approve</a></td>
                        <td><a href="<?php echo site_url('order/decline/'.$orders->id)?>" class="btn btn-danger">decline</a></td>
                      </tr>
                      <?php endif; ?>
                    <?php endforeach; endif; ?>
                    </tbody>
                  </table>
                  <?php echo form_close() ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>