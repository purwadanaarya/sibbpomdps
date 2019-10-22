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
            <i class="fa fa-list"></i> Konsultasi Baru
          </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <!-- <h3 class="box-title">Users</h3> <button class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan" id='btn_tambah'><i class="fa fa-plus" style="margin-right:5px"></i>Create New</button> -->
        <h3 class="box-title">Data Konsultasi</h3> <button class="pull-right btn btn-success" id="btn_tambah" type="button"><i class="fa fa-plus" style="margin-right:5px"></i> Perusahaan Baru</button> 
      </div>
      <div class="box-body" style="overflow-x:auto;" width="100%">
        <form action="<?php echo base_url('infokom/konsultasi/new_konsultasi') ?>" method="post">
          <div class="col-md-12">
            <div class="form-group">
              <label>Tanggal Konsultasi</label>
              <input class="form-control" placeholder="Tangggal" type="date" name="tgl">
            </div>
            <div class="form-group">
              <label>Jam</label>
              <input class="form-control" placeholder="Tangggal" type="time" name="jam">
            </div>
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
              <label>Jenis Konsultasi</label>
              <select name="konsultasi" required="" class="form-control">
                <option value="">- Pilih Jenis Konsultasi -</option>
                <?php foreach ($jenis_konsultasi->result() as $key): ?>
                  <option value="<?php echo $key->id_jeniskonsultasi ?>"><?php echo $key->jeniskonsultasi ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label>Kategori Produk</label>
              <select required="" name="kategori" class="form-control" id="kategori_produk">
                <option value="">- Pilih Kategori Produk -</option>
                <?php foreach ($kategori->result() as $key): ?>
                  <option value="<?php echo $key->id_kategori ?>"><?php echo "$key->kategori" ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label>Detail Kategori Produk</label>
              <select required="" name="detail_kategori" class="form-control" id="detail_kategori_produk">
                <option value="">- Pilih Kategori Produk -</option>
                
              </select>
            </div>
            <div class="form-group">
              <label>Deskripsi Produk</label>
              <input class="form-control" type="text" name="detail_produk" placeholder="Deskripsi Produk" required="">
            </div>
            <div class="form-group">
              <label>Status Berkas</label>
              <select class="form-control" required="" name="status">
                <option value="">- Pilih Status Berkas -</option>
                <option value="Konsultasi">Konsultasi</option>
                <option value="PSB">Permohonan PSB</option>
              </select>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block"><i class="fa fa-paper-plane-o"></i> Submit</button>
            </div>
          </div>
        </form>
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
  <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header" style="background-color: #367fa9;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 id="header_modal" class="modal-title" style="color:white"><i class="fa fa-plus" style="margin-right:5px"></i>Perusahaan Baru</h4>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="" id="form_add">
            <form method="post" action="<?php echo base_url('infokom/konsultasi/new_sarana') ?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" class="form-control" name="nama_sarana" placeholder="Nama Perusahaan" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea rows="3" class="form-control" placeholder="Alamat" name="alamat" required=""></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Kabupaten</label>
                    <select  class="form-control" name="kabupaten" required="">
                      <option value="">- Pilih Kabupaten -</option>
                      <?php foreach ($kabupaten->result() as $key): ?>
                        <option value="<?php echo $key->id_kabupaten ?>"><?php echo $key->kabupaten ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" class="form-control" name="tlp" placeholder="Telepon" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Perusahaan</label>
                    <select name="jenis_sarana" class="form-control" required="" id="id_jenis_sarana">
                      <option value="">- Pilih Jenis Perusahaan -</option>
                      <?php foreach ($jenis_sarana as $key): ?>
                        <option value="<?php echo $key->id_jenis_sarana ?>"><?php echo $key->jenis_sarana ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Detail Jenis Perusahaan</label>
                    <select name="detail_jenis_sarana" class="form-control" required="" id="id_detail_jenis_sarana">
                      <option value="">- Pilih Detail Jenis Perusahaan -
                    </select>
                  </div>
                </div>                
              </div>
              <button class="btn btn-primary btn-block" type="submit" name="button"><i class="fa fa-paper-plane-o"></i>   Kirim</button>
            </form>
          </div>
        </div>
        <!--Footer-->
      </div>
      <!--/.Content-->
    </div>
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
    $('#btn_konsultasi').addClass('active');
    $('.table').DataTable({
       aaSorting: [[0, 'asc']]
    });
  });
  $('#btn_tambah').click(function(event) {
    $('#header_modal').html('<i class="fa fa-plus" style="margin-right:5px"></i> Perusahaan Baru');
    $('#form_add').attr('hidden', false);
    $('#modal_tambah').modal('show');
  });

  $('#id_jenis_sarana').change(function(){
    var id_jenis_sarana = $('#id_jenis_sarana').val();
    $.ajax({
        dataType : 'JSON',
        url: '<?php echo base_url('infokom/konsultasi/ajax_get_detail_jenis_sarana') ?>',
        type: 'post',
        data: {
          id_jenis_sarana: id_jenis_sarana
        },
        success: function (data) {
          console.log(data);
          $('.pilihan').remove();
          for (var i = 0; i < data.length; i++) {
            console.log('hehe');
            $('#id_detail_jenis_sarana').append("<option class='pilihan' value='"+data[i].id_detail_jenis_sarana+"'>"+data[i].detail_jenis_sarana+"</option>");
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
          $('.pilihan').remove();
          for (var i = 0; i < data.length; i++) {
            console.log('hehe');
            $('#detail_kategori_produk').append("<option class='pilihan' value='"+data[i].id_detail_kategori+"'>"+data[i].detail_kategori+"</option>");
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
