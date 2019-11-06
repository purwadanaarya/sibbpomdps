<div class="content-wrapper">
  <section class="content-header">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="callout callout-success lead">
      <h4>Success !</h4>
      <p><?php echo $this->session->flashdata('success')?></p>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('error')): ?>
    <div class="callout callout-danger lead">
      <h4>Failed !</h4>
      <p><?php echo $this->session->flashdata('error')?></p>
    </div>
  <?php endif; ?>
        <h1>
          <i class="fa fa-file"></i> Tambah Data Sertifikasi
        </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- START CUSTOM TABS -->
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active" style="width: 49%"><a href="#tab_1" data-toggle="tab"><b><center>Perusahaan Sudah Terdaftar</center></b></a></li>
              <li style="width:50%"><a href="#tab_2" data-toggle="tab"><b><center>Perusahaan Belum Terdaftar</center></b></a></li>  
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="row">
                  <form action="<?php echo base_url('sertifikasi/sertifikasi/tambah') ?>" method="post">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Konsumen</label>
                        <input class="form-control" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
                      </div>
                      <div class="form-group">
                        <label>Sarana</label>
                          <select id="select_barang" class="selectpicker form-control" data-live-search="true" name="sarana">
                            <option value="">- Pilih Sarana -</option>
                            <?php foreach ($sarana->result() as $key): ?>
                              <option value="<?php echo $key->id_sarana ?>"><?php echo "$key->nama_sarana - $key->alamat_sarana" ?></option>
                            <?php endforeach ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Kategori Produk</label>
                        <select required="" name="kategori" class="form-control" id="kategori_produk_1">
                          <option value="">- Pilih Kategori Produk -</option>
                          <?php foreach ($kategori->result() as $key): ?>
                            <option value="<?php echo $key->id_kategori ?>"><?php echo "$key->kategori" ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Detail Kategori Produk</label>
                        <select required="" name="detail_kategori" class="form-control" id="detail_kategori_produk_1">
                          <option value="">- Pilih Kategori Produk -</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <input class="form-control" type="text" name="detail_produk" placeholder="Deskripsi Produk" required="">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary btn-block"><i class="fa fa-paper-plane-o"></i> Next</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="row">
                  <form action="<?php echo base_url('sertifikasi/sertifikasi/baru_process') ?>" method="post">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nama Konsumen</label>
                        <input class="form-control" value="" placeholder="Nama Konsumen" type="text" name="nama_konsumen" required="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input class="form-control" value="" placeholder="Nama Perusahaan" type="text" name="nama_perusahaan" required="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Telepon Perusahaan</label>
                        <input class="form-control" value="" placeholder="Telepon Perusahaan" type="text" required="" name="telepon_perusahaan">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Alamat Perusahaan</label>
                        <input class="form-control" value="" placeholder="Alamat Perusahaan" type="text" required="" name="alamat_perusahaan">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Kabupaten Perusahaan</label>
                        <select class="form-control" required="" name="kabupaten">
                          <option value="">- Pilih Kabupaten -</option>
                          <?php foreach ($kabupaten->result() as $key): ?>
                            <option value="<?php echo $key->id_kabupaten ?>"><?php echo $key->kabupaten ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Email Perusahaan</label>
                        <input class="form-control" value="" required="" placeholder="Email Perusahaan" type="email" name="email_perusahaan">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Jenis Perusahaan</label>
                        <select class="form-control" name="jenis_sarana" id="jenis_sarana" required>
                          <option value="">- Pilih Jenis Perusahaan -</option>
                          <?php foreach ($jenis_sarana->result() as $key): ?>
                            <option value="<?php echo $key->id_jenis_sarana ?>"><?php echo $key->jenis_sarana ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Detail Jenis Perusahaan</label>
                        <select class="form-control" name="detail_jenis_sarana" id="detail_jenis_sarana" required>
                            <option value="">- Pilih Detail Jenis Perusahaan -</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Kategori Produk</label>
                        <select required="" name="kategori" class="form-control" id="kategori_produk">
                          <option value="">- Pilih Kategori Produk -</option>
                          <?php foreach ($kategori->result() as $key): ?>
                            <option value="<?php echo $key->id_kategori ?>"><?php echo "$key->kategori" ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Detail Kategori Produk</label>
                        <select required="" name="detail_kategori" class="form-control" id="detail_kategori_produk">
                          <option value="">- Pilih Detail Kategori Produk -</option>

                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <input class="form-control" value="" placeholder="Deskripsi Produk" type="text" required="" name="detail_produk">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <button class="btn btn-primary btn-block"><i class="fa fa-paper-plane-o"></i> Next</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
  </div>
  </section>
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('Footer'); ?>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/Styling/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/Styling/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Styling/plugins/dataTables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Styling/plugins/dataTables/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Styling/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.7/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#judul').text('SI KONSER');
  $('#btn_sertifikasi').addClass('active');
  $('.table').DataTable({
     aaSorting: [[0, 'asc']]
  });
});
$('#btn_tambah').click(function(event) {
  $('#header_modal').html('<i class="fa fa-plus" style="margin-right:5px"></i> Perusahaan Baru');
  $('#form_add').attr('hidden', false);
  $('#modal_tambah').modal('show');
});

$('#jenis_sarana').change(function(){
  var id_jenis_sarana = $('#jenis_sarana').val();
  $.ajax({
      dataType : 'JSON',
      url: '<?php echo base_url('infokom/konsultasi/ajax_get_detail_jenis_sarana') ?>',
      type: 'post',
      data: {
        id_jenis_sarana: id_jenis_sarana
      },
      success: function (data) {
        console.log(data);
        $('.pilihan_1').remove();
        for (var i = 0; i < data.length; i++) {
          console.log('hehe');
          $('#detail_jenis_sarana').append("<option class='pilihan_1' value='"+data[i].id_detail_jenis_sarana+"'>"+data[i].detail_jenis_sarana+"</option>");
        }
      }
    });
});
$('#kategori_produk_1').change(function(){
  var kategori_produk = $('#kategori_produk_1').val();
  $.ajax({
      dataType : 'JSON',
      url: '<?php echo base_url('infokom/konsultasi/ajax_get_detail_kategori') ?>',
      type: 'post',
      data: {
        id_kategori: kategori_produk
      },
      success: function (data) {
        console.log(data);
        $('.pilihan_2').remove();
        for (var i = 0; i < data.length; i++) {
          console.log('hehe');
          $('#detail_kategori_produk_1').append("<option class='pilihan_2' value='"+data[i].id_detail_kategori+"'>"+data[i].detail_kategori+"</option>");
        }
      }
    });
});
$('#kategori_produk').change(function(){
  var kategori_produk = $('#kategori_produk').val();
  $.ajax({
      dataType : 'JSON',
      url: '<?php echo base_url('infokom/konsultasi/ajax_get_detail_kategori') ?>',
      type: 'post',
      data: {
        id_kategori: kategori_produk
      },
      success: function (data) {
        console.log(data);
        $('.pilihan_2').remove();
        for (var i = 0; i < data.length; i++) {
          console.log('hehe');
          $('#detail_kategori_produk').append("<option class='pilihan_2' value='"+data[i].id_detail_kategori+"'>"+data[i].detail_kategori+"</option>");
        }
      }
    });
});

</script>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/Styling/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/Styling/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/Styling/dist/js/app.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/Styling/dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/Styling/dist/js/demo.js') ?>"></script>
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>

</body>
</html>
