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
            <i class="fa fa-archive"></i> Kategori Produk
          </h1>
    </section>
    <!-- Main content -->

      <section class="content col-md-6">
      <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Kategori</h3> <button class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan" id='btn_tambah'><i class="fa fa-plus" style="margin-right:5px"></i>Create New Kategori</button>
      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table class="table table-responsive table-striped table-bordered table-hover text-left" >
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="">
            <?php $no=1; foreach ($kategori->result() as $key): ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $key->kategori ?></td>
                <td><?php echo $key->status ?></td>
                <td></td>
              </tr>
            <?php $no++; endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    </section>
    <section class="content col-md-6">
      <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Sub Kategori</h3> <button class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan" id='btn_tambah_sub'><i class="fa fa-plus" style="margin-right:5px"></i>Create New Sub</button>
      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table class="table table-responsive table-striped table-bordered table-hover text-left" >
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Sub Kategori</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="">
            <?php $no=1; foreach ($sub_kategori->result() as $key): ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $key->kategori ?></td>
                <td><?php echo $key->detail_kategori ?></td>
                <td><?php echo $key->status ?></td>
                <td></td>
              </tr>
            <?php $no++; endforeach ?>
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
                    <input type="password" class="form-control" name="nama" placeholder="Password" required>
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
    $('#btn_admin_kategori').addClass('active');
    $('.table').DataTable({
       aaSorting: [[0, 'asc']]
    });
  });
  $('#btn_tambah').click(function(event) {
    $('#header_modal').html('<i class="fa fa-plus" style="margin-right:5px"></i> Create New User');
    $('#form_add').attr('hidden', false);
    $('#modal_tambah').modal('show');
  });
  $('#btn_tambah_sub').click(function(event) {
    $('#header_modal').html('<i class="fa fa-plus" style="margin-right:5px"></i> Create New User');
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