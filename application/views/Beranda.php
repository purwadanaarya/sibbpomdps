  <div class="content-wrapper">
    <section class="content-header">
          <h1>
            <i class="fa fa-home"></i> Beranda
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
      <?php } elseif ($this->session->userdata('si_idrole')==0){ ?>
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
        <?php } elseif ($this->session->userdata('si_idrole')==0) { ?>
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
      <?php } elseif (($this->session->userdata('si_idrole')==4) || ($this->session->userdata('si_idrole')==2) || ($this->session->userdata('si_idrole')==3))  { ?>
          <!-- pangan -->
        <div class="col-sm-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Tahun : <?php echo $this->session->userdata('periode'); ?></h3>
              <h4><br></h4>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
          </div>  
        </div>
        <a href="<?php echo base_url('perusahaan') ?>">
        <div class="col-sm-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 style="color:white"><?php echo $sarana ?></h3>
              <h4><font color="#ffffff">Perusahaan</font></h4>
            </div>
            <div class="icon">
              <i class="fa fa-building-o"></i>
            </div>
          </div>
        </div>  
        </a>
        <div class="col-sm-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Pangan Olahan</h3>
              <h4><a href="<?php echo base_url('home/detail?id=1&status=Terbit') ?>"><font color="#ffffff">Terbit Rekomendasi : <b><?php echo $pangan_terbit ?></b></font></a></h4>
              <h4><a href="<?php echo base_url('home/detail?id=1&status=Belum Terbit') ?>"><font color="#ffffff">Belum Terbit Rekomendasi : <b><?php echo $pangan_belum ?></b></font></a></h4>
              <h4><a href="<?php echo base_url('home/detail?id=1&status=Tidak Terbit') ?>"><font color="#ffffff">Tidak Terbit Rekomendasi : <b><?php echo $pangan_tidak ?></b></font></a></h4>

            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>Kosmetik</font></h3>
              <h4><a href="<?php echo base_url('home/detail?id=2&status=Terbit') ?>"><font color="#ffffff">Aspek Pemenuhan CPKB Terbit : <b><?php echo $kosmetik_terbit ?></b></font></a></h4>
              <h4><a href="<?php echo base_url('home/detail?id=2&status=Belum Terbit') ?>"><font color="#ffffff">Aspek Pemenuhan CPKB Belum Terbit : <b><?php echo $kosmetik_belum ?></b></font></a></h4>
              <h4><a href="<?php echo base_url('home/detail?id=2&status=Tidak Terbit') ?>"><font color="#ffffff">Aspek Pemenuhan CPKB Tidak Terbit : <b><?php echo $kosmetik_tidak ?></b></font></a></h4>

            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
          </div>
        </div>  
        <div class="col-sm-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Obat Tradisional</h3>
              <h4><a href="<?php echo base_url('home/detail?id=3&status=Terbit') ?>"><font color="#ffffff">Aspek Pemenuhan CPOT Terbit : <b><?php echo $ot_terbit ?></b></font></a></h4>
              <h4><a href="<?php echo base_url('home/detail?id=3&status=Belum Terbit') ?>"><font color="#ffffff">Aspek Pemenuhan CPOT Belum Terbit : <b><?php echo $ot_belum ?></b></font></a></h4>
              <h4><a href="<?php echo base_url('home/detail?id=3&status=Tidak Terbit') ?>"><font color="#ffffff">Aspek Pemenuhan CPOT Tidak Terbit : <b><?php echo $ot_tidak ?></b></font></a></h4>

            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
          </div>
        </div>  
        <div class="col-sm-6">
          <div class="small-box bg-navy">
            <div class="inner">
              <h3 style="color:white">Obat</h3>
              <h4><a href="<?php echo base_url('home/detail?id=4&status=Terbit') ?>"><font color="#ffffff">Sertifikat CDOB Terbit : <b><?php echo $obat_terbit ?></b></font></a></h4>
              <h4><a href="<?php echo base_url('home/detail?id=4&status=Belum Terbit') ?>"><font color="#ffffff">Sertifikat CDOB Belum Terbit : <b><?php echo $obat_belum ?></b></font></a></h4>
              <h4><a href="<?php echo base_url('home/detail?id=4&status=Tidak Terbit') ?>"><font color="#ffffff">Sertifikat CDOB Tidak Terbit : <b><?php echo $obat_tidak ?></b></font></a></h4>

            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
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
<script type="text/javascript">
  var url = "http://192.168.88.55/bbpomdenpasar/"; // url tujuan
    var count = 180; // dalam detik
    function countDown() {
      if (count > 0) {
          count--;
          var waktu = count + 1;                    
          setTimeout("countDown()", 1000);
      } else {
          window.location.href = url;
      }
    }
</script>
<script src="<?php echo base_url('assets/Styling/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#judul').text('SI KONSER');
    $('#btn_beranda').addClass('active');
    countDown();
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
