<footer class="container-fluid">
        <div class="container">
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <p>Copyright &copy; Dumet Store 2015</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#provinsi').change(function(){
                var provinsi_id = $(this).val();
                //alert(provinsi_id);
                
                $.ajax({
                    type: 'POST', //method
                    url: '<?php echo site_url('account/get_kota'); ?>', //action
                    data: {prov_id: provinsi_id}, //name
                    success: function(response) { //response
                        $('#kota').html(response);
                    }
                });
            });
            $('#provinsi_tujuan').change(function(){
                var provinsi_id = $(this).val();
                //alert(provinsi_id);
                
                $.ajax({
                    type: 'POST', //method
                    url: '<?php echo site_url('tarif/get_kota'); ?>', //action
                    data: {prov_id: provinsi_id}, //name
                    success: function(response) { //response
                        $('#kota_tujuan').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>