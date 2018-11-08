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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama Depan:</td><td><?php echo $member->nama_depan?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Belakang:</td><td><?php echo $member->nama_belakang?></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td><td><?php echo $member->email?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin:</td><td><?php echo $member->jenis_kelamin == 1 ?'Laki-laki' : 'Perempuan'?></td>
                                        </tr>
                                        <tr>
                                            <td>Telp:</td><td><?php echo $member->telepon?></td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi:</td><td><?php echo $member->nama_provinsi?></td>
                                        </tr>
                                        <tr>
                                            <td>Kota:</td><td><?php echo $member->nama_kota?></td>
                                        </tr>
                                        <tr>
                                            <td>Kode Pos:</td><td><?php echo $member->kode_pos?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Pengiriman:</td><td><?php echo $member->alamat?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><a href="<?php echo site_url('member_area/edit_profile/'.$member->id)?>" class="btn btn-success btn-xs">Edit Profile</a></td>
                                        </tr>
                                    </tbody>
                                </table>
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
