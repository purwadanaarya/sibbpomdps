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
          <i class="fa fa-building"></i> Data Perusahaan
        </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="box box-solid box-primary">
    <div class="box-header with-border">
      <!-- <h3 class="box-title">Users</h3> <button class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan" id='btn_tambah'><i class="fa fa-plus" style="margin-right:5px"></i>Create New</button> -->
      <h3 class="box-title">Edit Data Perusahaan</h3>
    </div>
    <div class="box-body" style="overflow-x:auto;" width="100%">
        <?php foreach ($sarana->result() as $key): ?>
      <form action="<?php echo base_url('perusahaan/edit_process/').$key->id_sarana ?>" method="post">
          
        <div class="col-md-12">
          <div class="form-group">
            <label>Nama Perusahaan</label>
            <input class="form-control" value="<?php echo $key->nama_sarana ?>" placeholder="Nama Perusahaan" type="text" name="nama_perusahaan" required="">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Telepon Perusahaan</label>
            <input class="form-control" value="<?php echo $key->tlp_sarana ?>" placeholder="Telepon Perusahaan" type="number" required="" name="telepon_perusahaan">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Alamat Perusahaan</label>
            <textarea rows="3" class="form-control" value="" placeholder="Alamat Perusahaan" type="text" required="" name="alamat_perusahaan"><?php echo $key->alamat_sarana ?></textarea> 
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Kabupaten Perusahaan</label>
            <select class="form-control" required="" name="kabupaten">
              <option value="">- Pilih Kabupaten -</option>
              <?php foreach ($kabupaten->result() as $i): ?>
                <?php if ($key->id_kabupaten==$i->id_kabupaten){ ?>
                <option selected value="<?php echo $i->id_kabupaten ?>"><?php echo $i->kabupaten ?></option>  
                <?php } else { ?>
                <option value="<?php echo $i->id_kabupaten ?>"><?php echo $i->kabupaten ?></option>
                <?php } ?>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Email Perusahaan</label>
            <input class="form-control" value="<?php echo $key->email ?>" required="" placeholder="Email Perusahaan" type="email" name="email_perusahaan">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Jenis Perusahaan</label>
            <select class="form-control" name="jenis_sarana" id="jenis_sarana" required>
              <option value="">- Pilih Jenis Perusahaan -</option>
              <?php foreach ($jenis_sarana as $i): ?>
                <option value="<?php echo $i->id_jenis_sarana ?>"><?php echo $i->jenis_sarana ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Detail Jenis Perusahaan</label>
            <select class="form-control" name="detail_jenis_sarana" id="detail_jenis_sarana" required>
                <option value="">- Pilih Detail Jenis Perusahaan -</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <button class="btn btn-primary btn-block"><i class="fa fa-paper-plane-o"></i> Submit</button>
          </div>
        </div>
        <?php endforeach ?>
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
  $('#btn_perusahaan').addClass('active');
  $('.table').DataTable({
     aaSorting: [[0, 'asc']]
  });
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
