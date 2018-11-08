<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                  <h2>No Rekening</h2>         
                  <table class="table table-striped table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No Rekening</th>
                        <th>Nama Pemegang</th>
                        <th>Bank</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; if($rekening): foreach($rekening as $rekenings): ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $rekenings->no_rekening ?></td>
                        <td><?php echo $rekenings->nama_pemegang ?></td>
                        <td><?php echo $rekenings->bank ?></td>
                        <td><a href="<?php echo site_url('rekening/edit/'.$rekenings->id)?>" class="btn btn-warning">edit</a></td>
                        <td><a href="<?php echo site_url('rekening/remove/'.$rekenings->id)?>" class="btn btn-danger">delete</a></td>
                      </tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                  </table>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->