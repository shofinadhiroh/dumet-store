<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                  <h2>Order</h2>
                  <?php echo form_open('member/update')?>         
                  <table class="table table-striped table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        
                        <th>Email</th>
                        <th>Alamat</th>
                        
                        <th>Telepon</th>
                        
                        
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Decline</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; if($member): foreach($member as $members): ?>
                    <?php if($members->status==0): ?>
                      <tr class="danger">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $members->nama_depan ?></td>
                        <td><?php echo $members->nama_belakang ?></td>
                        
                        <td><?php echo $members->email ?></td>
                        <td><?php echo $members->alamat ?></td>
                        
                        <td><?php echo $members->telepon ?></td>
                        
                        
                        <td><?php echo $members->status ?></td>
                        <td><a href="<?php echo site_url('member/approve/'.$members->id)?>" class="btn btn-warning">approve</a></td>
                        <td><a href="<?php echo site_url('member/decline/'.$members->id)?>" class="btn btn-danger">decline</a></td>
                      </tr>
                      <?php else: ?>
                      <tr class="success">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $members->nama_depan ?></td>
                        <td><?php echo $members->nama_belakang ?></td>
                        
                        <td><?php echo $members->email ?></td>
                        <td><?php echo $members->alamat ?></td>
                        
                        <td><?php echo $members->telepon ?></td>
                        
                        
                        <td><?php echo $members->status ?></td>
                        <td><a href="<?php echo site_url('member/approve/'.$members->id)?>" class="btn btn-warning">approve</a></td>
                        <td><a href="<?php echo site_url('member/decline/'.$members->id)?>" class="btn btn-danger">decline</a></td>
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