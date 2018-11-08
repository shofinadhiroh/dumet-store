<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                  <h2>Admin</h2>         
                  <table class="table table-striped table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; if($admin): foreach($admin as $admins): ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $admins->nama ?></td>
                        <td><?php echo $admins->password ?></td>
                        <td><a href="<?php echo site_url('admin/edit/'.$admins->id)?>" class="btn btn-warning">edit</a></td>
                        <td><a href="<?php echo site_url('admin/remove/'.$admins->id)?>" class="btn btn-danger">delete</a></td>
                      </tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                  </table>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->