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
            <i class="fa fa-list"></i> Data Sertifikasi
          </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Data Sertifikasi</h3>
      </div>
      <div class="box-body" style="overflow-x:auto;" width="100%">
        <?php
          foreach ($data->result_array() as $key) {
            $id_jenis_sarana=$key['id_jenis_sarana'];
            $id_data = $key['id_data'];
            $nama_konsumen = $key['nama_konsumen'];
            $nama_sarana = $key['nama_sarana'];
            $tlp_sarana = $key['tlp_sarana'];
            $alamat_sarana = $key['alamat_sarana'];
            $email = $key['email'];
            $jenis_sarana=$key['jenis_sarana'];
            $detail_jenis_sarana=$key['detail_jenis_sarana'];
            $kategori=$key['kategori'];
            $detail_kategori=$key['detail_kategori'];
            $detail_produk=$key['detail_produk'];
            $stat_dok = $key['status_dokumen'];
            ///////////////////////////////////////////
            $tgl_surat_terima=$key['tgl_surat_terima'];
            if($tgl_surat_terima==''){
              $tgl_surat_terima='';
            }
            $tindak_lanjut=$key['tindak_lanjut'];
            if($tindak_lanjut==''){
              $tindak_lanjut='';
            }
            $petugas1=$key['petugas_1'];
            if($petugas1==''){
              $petugas1='';
            }
            $petugas2=$key['petugas_2'];
            if($petugas2==''){
              $petugas2='';
            }
            $petugas3=$key['petugas_3'];
            if($petugas3==''){
              $petugas3='';
            }
            $petugas4=$key['petugas_4'];
            if($petugas4==''){
              $petugas4='';
            }
            $tgl_audit=$key['tanggal_audit'];
            if($tgl_audit==''){
              $tgl_audit='';
            }
            $tgl_audit_selesai=$key['tanggal_audit_selesai'];
            if($tgl_audit_selesai==''){
              $tgl_audit_selesai='';
            }
            $batas_waktu_perbaikan=$key['batas_waktu_perbaikan'];
            if($batas_waktu_perbaikan==''){
              $batas_waktu_perbaikan='';
            }
            $tgl_perbaikan=$key['tanggal_perbaikan'];
            if($tgl_perbaikan==''){
              $tgl_perbaikan='';
            }
            $keterangan=$key['keterangan'];
            if($keterangan==''){
              $keterangan='';
            }
            $terbit_rekomendasi=$key['terbit_rekomendasi'];
            if($terbit_rekomendasi==''){
              $terbit_rekomendasi='';
            }
            $timeline_audit=$key['timeline_audit'];
            if($timeline_audit==''){
              $timeline_audit='';
            }
            $timeline_rekomendasi=$key['timeline_rekomendasi'];
            if($timeline_rekomendasi==''){
              $timeline_rekomendasi='';
            }
          }
        ?>
        <form action="<?php echo base_url('sertifikasi/sertifikasi/edit_process') ?>" method="post">
          <div class="col-md-3">
            <div class="form-group">
              <label>Nama Perusahaan</label>
              <input readonly class="form-control" value="<?php echo $nama_sarana ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Telepon Perusahaan</label>
              <input readonly class="form-control" value="<?php echo $tlp_sarana ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Alamat Perusahaan</label>
              <input readonly class="form-control" value="<?php echo $alamat_sarana ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Email Perusahaan</label>
              <input readonly class="form-control" value="<?php echo $email ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Jenis Perusahaan</label>
              <input readonly class="form-control" value="<?php echo $jenis_sarana ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Detail Jenis Perusahaan</label>
              <input readonly class="form-control" value="<?php echo $detail_jenis_sarana ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Kategori Produk</label>
              <input readonly class="form-control" value="<?php echo $kategori ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Detail Kategori Produk</label>
              <input readonly class="form-control" value="<?php echo $detail_kategori ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Deskripsi Produk</label>
              <input readonly class="form-control" value="<?php echo $detail_produk ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>


          <!-- perdulikan dari sini -->
          <input type="hidden" value="<?php echo $id_data ?>" name="id_data">
          <div class="col-md-12">
            <div class="form-group">
              <label>Nama Konsumen</label>
              <input class="form-control" value="<?php echo $nama_konsumen ?>" placeholder="Nama Konsumen" type="text" name="nama_konsumen">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tanggal Surat Terima</label>
              <input class="form-control" value="<?php echo $tgl_surat_terima ?>" placeholder="Tanggal Surat Terima" type="date" name="tgl_surat_terima">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tanggal Audit Mulai</label>
              <input class="form-control" value="<?php echo $tgl_audit ?>" placeholder="Tanggal Audit" type="date" name="tgl_audit">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Timeline Audit</label>
              <select class="form-control" name="timeline_audit">
                <option value="">- Pilih Timeline Audit -</option>
                <option value="Tepat Waktu">Tepat Waktu</option>
                <option value="Tidak Tepat Waktu">Tidak Tepat Waktu</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Petugas 1</label>
              <select  class="selectpicker form-control" data-live-search="true" name="petugas1">
                <option value="">- Pilih Petugas -</option>
                <?php foreach ($petugas->result() as $key): ?>
                  <?php if($key->id_user==$petugas1){ ?>
                  <option selected value="<?php echo $key->id_user ?>"><?php echo $key->nama ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $key->id_user ?>"><?php echo $key->nama ?></option>
                  <?php } ?>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Petugas 2</label>
              <select class="selectpicker form-control" data-live-search="true" name="petugas2">
                <option value="">- Pilih Petugas -</option>
                <?php foreach ($petugas->result() as $key): ?>
                  <?php if($key->id_user==$petugas2){ ?>
                  <option selected value="<?php echo $key->id_user ?>"><?php echo $key->nama ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $key->id_user ?>"><?php echo $key->nama ?></option>
                  <?php } ?>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Petugas 3</label>
              <select class="selectpicker form-control" data-live-search="true" name="petugas3">
                <option value="">- Pilih Petugas -</option>
                <?php foreach ($petugas->result() as $key): ?>
                  <?php if($key->id_user==$petugas3){ ?>
                  <option selected value="<?php echo $key->id_user ?>"><?php echo $key->nama ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $key->id_user ?>"><?php echo $key->nama ?></option>
                  <?php } ?>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Petugas 4</label>
              <select class="selectpicker form-control" data-live-search="true" name="petugas4">
                <option value="">- Pilih Petugas -</option>
                <?php foreach ($petugas->result() as $key): ?>
                  <?php if($key->id_user==$petugas4){ ?>
                  <option selected value="<?php echo $key->id_user ?>"><?php echo $key->nama ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $key->id_user ?>"><?php echo $key->nama ?></option>
                  <?php } ?>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Tindak Lanjut</label>
              <input class="form-control" value="<?php echo $tindak_lanjut ?>" placeholder="Tindak Lanjut" type="text" name="tindak_lanjut">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Tanggal Audit Selesai</label>
              <input class="form-control" value="<?php echo $tgl_audit_selesai ?>" placeholder="Tanggal Audit" type="date" name="tgl_audit_selesai">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Batas Waktu Perbaikan</label>
              <input class="form-control" value="<?php echo $batas_waktu_perbaikan ?>" placeholder="Batas Waktu Perbaikan" type="date" name="batas_waktu_perbaikan">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Tanggal Perbaikan</label>
              <input class="form-control" value="<?php echo $tgl_perbaikan ?>" placeholder="Tanggal Perbaikan" type="date" name="tgl_perbaikan">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Keterangan</label>
              <textarea class="form-control" placeholder="Keterangan" rows="3" name="keterangan"><?php echo $keterangan ?></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Tanggal Terbit Rekomendasi</label>
              <input class="form-control" placeholder="" value="<?php echo $terbit_rekomendasi ?>" type="date" name="terbit_rekomendasi">
            </div>
          </div>
          <?php if ($id_jenis_sarana==1) {
              $keterangan = 'Rekomendasi';
          } elseif ($id_jenis_sarana==2) {
              $keterangan = 'Aspek Pemenuhan CPKB';
          } elseif ($id_jenis_sarana==3) {
              $keterangan = 'Aspek Pemenuhan CPOTB';
          } elseif ($id_jenis_sarana==4) {
              $keterangan = 'Aspek Pemenuhan CDOB';
          } ?>
          <div class="col-md-12">
            <div class="form-group">
              <label>Status PSB</label>
              <select required="" name="status_dokumen" class="form-control">
                <option value="">- Pilih Status PSB -</option>
                <?php if($stat_dok=='Belum Terbit'){ ?>
                <option selected="" value="Belum Terbit">Belum Terbit <?php echo $keterangan ?></option>
                <?php } else { ?>
                <option value="Belum Terbit">Belum Terbit <?php echo $keterangan ?></option>
                <?php } ?>
                <?php if($stat_dok=='Tidak Terbit'){ ?>
                <option selected="" value="Tidak Terbit">Tidak Terbit <?php echo $keterangan ?></option>
                <?php } else { ?>
                <option value="Tidak Terbit">Tidak Terbit <?php echo $keterangan ?></option>
                <?php } ?>
                <?php if($stat_dok=='Terbit'){ ?>
                <option selected="" value="Terbit">Terbit <?php echo $keterangan ?></option>
                <?php } else { ?>
                <option value="Terbit">Terbit <?php echo $keterangan ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Timeline Rekomendasi</label>
              <select class="form-control" name="timeline_rekomendasi">
                <option value="">- Pilih Timeline Rekomendasi -</option>
                <option value="Tepat Waktu">Tepat Waktu</option>
                <option value="Tidak Tepat Waktu">Tidak Tepat Waktu</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
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

  $('#id_jenis_sarana').change(function(){
    var id_jenis_sarana = $('#id_jenis_sarana').val();
    $.ajax({
        dataType : 'JSON',
        url: '<?php echo base_url('Infokom/Konsultasi/ajax_get_detail_jenis_sarana') ?>',
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
        url: '<?php echo base_url('Infokom/Konsultasi/ajax_get_detail_kategori') ?>',
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
