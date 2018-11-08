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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Depan</label>
                                                <input type="text" class="form-control" name="nama_depan" value="<?php echo $member->nama_depan?>"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nama Belakang</label>
                                                <input type="text" class="form-control" name="nama_belakang" value="<?php echo $member->nama_belakang?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="radio" value="0" name="jenis_kelamin" <?php if($member->jenis_kelamin == 0)?> checked=""/>
                                                <label>Perempuan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" value="1" name="jenis_kelamin"<?php if($member->jenis_kelamin == 1)?> checked=""/>
                                                <label>Laki-laki</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $member->email?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsi">
                                        <?php foreach($provinsi as $prov): ?>
                                        <?php
                                            if($prov->id == $member->provinsi)
                                            {
                                                $selected = 'selected=""';
                                            }
                                            else
                                            {
                                                $selected = '';
                                            }
                                        ?>
                                            <option <?php echo $selected ?> value="<?php echo $prov->id?>"><?php echo $prov->nama_provinsi?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <select class="form-control" name="kota">
                                        <?php foreach($kota as $kot): ?>
                                        <?php
                                            if($kot->id == $member->kota)
                                            {
                                                $selected = 'selected=""';
                                            }
                                            else
                                            {
                                                $selected = '';
                                            }
                                        ?>
                                            <option <?php echo $selected ?> value="<?php echo $kot->id?>"><?php echo $kot->nama_kota?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" class="form-control" name="kode_pos" value="<?php echo $member->kode_pos?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Telp.</label>
                                        <input type="text" class="form-control" name="telepon" value="<?php echo $member->telepon?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Pengiriman</label>
                                        <textarea class="form-control" name="alamat"><?php echo $member->alamat?></textarea>
                                    </div>
                                </div>
                            </div>
                            <h4>Account:</h4>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Password Baru</label>
                                        <input type="text" class="form-control" name="new_password"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Konfirmasi Password</label>
                                        <input type="text" class="form-control" name="confirm_password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit"value="Update" class="btn btn-success form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit"value="Cancel" class="btn btn-warning form-control"/>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close()?>
                        </div>
                        <div class="col-md-4">
                            <?php $this->load->view('component/member_area_nav')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /.container -->
    </article>
