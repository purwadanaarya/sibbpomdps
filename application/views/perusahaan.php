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
            <i class="fa fa-building-o"></i> Perusahaan
          </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <!-- <h3 class="box-title">Users</h3> <button class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan" id='btn_tambah'><i class="fa fa-plus" style="margin-right:5px"></i>Create New</button> -->
        <h3 class="box-title">Data Perusahaan</h3>
        <?php if($this->session->userdata('si_idrole')==2){ ?>
        <?php } else { ?>
        <a href="<?php echo base_url('perusahaan/tambah_perusahaan') ?>"><button class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan"><i class="fa fa-plus" style="margin-right:5px"></i>Tambah Data</button></a>
        <?php } ?>
      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table class="table table-responsive table-striped table-bordered table-hover text-left" >
          <thead>
            <tr>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Email</th>
              <th>Jenis Perusahaan</th>
              <th>Detail Jenis Perusahaan</th>
              <?php if($this->session->userdata('si_idrole')==2){ ?>
              <?php } else { ?>
              <th width="10%">Action</th>
              <?php } ?>
            </tr>
          </thead>
          <tbody class="">
            <?php foreach ($sarana->result() as $key): ?>
              <tr>
                <td><?php echo $key->nama_sarana ?></td>
                <td><?php echo $key->alamat_sarana ?>, <?php echo $key->kabupaten ?></td>
                <td><?php echo $key->tlp_sarana ?></td>
                <td><?php echo $key->email ?></td>
                <td><?php echo $key->jenis_sarana ?></td>
                <td><?php echo $key->detail_jenis_sarana ?></td>
                <?php if($this->session->userdata('si_idrole')==2){ ?>
                <?php } else { ?>
                <td><a href="<?php echo base_url('perusahaan/edit/').$key->id_sarana ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a><a href="<?php echo base_url('perusahaan/delete/').$key->id_sarana ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i></a></td>
                <?php } ?>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('Footer'); ?>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/Styling/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/Styling/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Styling/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Styling/plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Styling/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#judul').text('SI KONSER');
    $('#btn_perusahaan').addClass('active');
    $('.table').DataTable({
       aaSorting: [[0, 'desc']]
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
