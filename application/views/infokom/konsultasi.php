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
            <i class="fa fa-list"></i> Manajemen Konsultasi
          </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <!-- <h3 class="box-title">Users</h3> <button class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan" id='btn_tambah'><i class="fa fa-plus" style="margin-right:5px"></i>Create New</button> -->
        <?php
          if($this->session->userdata('si_idrole')==3){
            $disabled = "";
          } else {
            $disabled = "disabled";
          }
        ?>
        <h3 class="box-title">Data Konsultasi</h3>
        <a href="<?php echo base_url('infokom/konsultasi/baru') ?>"><button <?php echo $disabled ?> class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan"><i class="fa fa-plus" style="margin-right:5px"></i>Konsultasi Baru</button></a>
      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table class="table table-responsive table-striped table-bordered table-hover text-left" >
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Nama Konsumen</th>
              <th>Nama & Alamat</th>
              <th>No Tlp</th>
              <th>Jenis Produk</th>
              <th>Jenis Konsultasi</th>
              <th>Status</th>
              <?php if($this->session->userdata('si_idrole')==3){
                echo "<th>Action</th>";
              } ?>
            </tr>
          </thead>
          <tbody class="">
            <?php foreach ($konsultasi->result() as $key): ?>
              <tr>
                <td><?php echo $key->tgl_konsultasi ?></td>
                <td><?php echo $key->nama_konsumen ?></td>
                <td><?php echo "$key->nama_sarana - $key->alamat_sarana" ?></td>
                <td><?php echo $key->tlp_sarana ?></td>
                <td><?php echo "$key->kategori, $key->detail_kategori - $key->detail_produk" ?></td>
                <td><?php echo $key->jeniskonsultasi ?></td>
                <td><?php echo $key->status ?></td>
                <?php if($this->session->userdata('si_idrole')==3){ ?>
                <td width="10%"><center><a href="" data-toggle="modal" data-target="#modal_edit<?php echo $key->id_data;?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a> <?=anchor("infokom/konsultasi/delete".$key->id_data,"<button class='btn btn-danger'><i class='fa fa-trash'></i></button",array('onclick' => "return confirm('Konsultasi $key->tgl_konsultasi atas nama $key->nama_konsumen akan dihapus. Apa anda yakin?')"))?></center></td>
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
          <h4 id="header_modal" class="modal-title" style="color:white"><i class="fa fa-plus" style="margin-right:5px"></i>Create New User</h4>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="" id="form_add">
            <form method="post" action="<?php echo base_url('admin/user/add') ?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="nama" placeholder="Full Name" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Role</label>
                    <select required="" name="id_role" class="form-control">
                      <option value="">- Select Role -</option>

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
<script src="<?php echo base_url('assets/Styling/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#judul').text('SI KONSER');
    $('#btn_konsultasi').addClass('active');
    $('.table').DataTable({
       aaSorting: [[0, 'desc']]
    });
  });
  $('#btn_tambah').click(function(event) {
    $('#header_modal').html('<i class="fa fa-plus" style="margin-right:5px"></i> New Konsultasi');
    $('#form_add').attr('hidden', false);
    $('#modal_tambah').modal('show');
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
