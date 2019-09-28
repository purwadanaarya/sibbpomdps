  <div class="content-wrapper">
    <section class="content-header">
          <h1>
            <i class="fa fa-dashboard"></i> Beranda
          </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php if($this->session->userdata('si_idrole')==1){ ?>
        <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $alluser ?></h3>

              <p>User</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $allkategori ?></h3>

              <p>Kategori Produk</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $allsub ?></h3>

              <p>Sub Produk</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $allkonsultasi ?></h3>

              <p>Jenis Konsultasi</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } elseif ($this->session->userdata('si_idrole')==2){ ?>
        <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $konsultasi_pangan ?></h3>

              <p>Jumlah Pangan Olahan</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="<?php echo base_url('struktural/detail/pangan') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $konsultasi_kosmetik ?></h3>

              <p>Jumlah Kosmetik</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="<?php echo base_url('struktural/detail/kosmetik') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $konsultasi_obattradisional ?></h3>

              <p>Jumlah Obat Tradisional</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="<?php echo base_url('struktural/detail/ot') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $konsultasi_pbf ?></h3>

              <p>Jumlah PBF</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="<?php echo base_url('struktural/detail/pbf') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } elseif ($this->session->userdata('si_idrole')==3) { ?>
        <div class="col-sm-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jumlah_konsultasi ?></h3>

              <p>Jumlah Konsultasi</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="<?php echo base_url('infokom/konsultasi') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>  
        <div class="col-sm-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jumlah_sarana ?></h3>

              <p>Jumlah Perusahaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="<?php echo base_url('infokom/konsultasi') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>      
        <?php } elseif ($this->session->userdata('si_idrole')==4) { ?>
        <div class="col-sm-4">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jumlah_capa ?></h3>

              <p>Jumlah CAPA</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>  
        <div class="col-sm-4">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jumlah_tmk ?></h3>

              <p>Jumlah TMK</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>   
        <div class="col-sm-4">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jumlah_mk ?></h3>

              <p>Jumlah MK</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>        
        <?php } ?>
          <!-- small box -->
          
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
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/Styling/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#judul').text('SI KONSER');
    $('#btn_beranda').addClass('active');
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
