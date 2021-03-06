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
            <i class="fa fa-file-o"></i> Manajemen Sertifikasi
          </h1>
    </section>
    <?php if($this->session->userdata('si_idrole')==4){
      $disabled='';
    } else {
      $disabled='disabled';
    } ?>
    <!-- Main content -->

    <section class="content">
      <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <!-- <h3 class="box-title">Users</h3> <button class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan" id='btn_tambah'><i class="fa fa-plus" style="margin-right:5px"></i>Create New</button> -->
        <h3 class="box-title">Data Sertifikasi</h3>

        	

			<a href="<?php echo base_url('sertifikasi/sertifikasi/baru') ?>">
        	<button <?php echo $disabled ?> class="pull-right btn btn-success" type="button" name="btn_tambah_kegiatan"><i class="fa fa-plus" style="margin-right:5px"></i>Tambah Data</button></a>

        	<button class="pull-right btn btn-info" type="button" name="btn_tambah_kegiatan" id='btn_cari'><i class="fa fa-search" style="margin-right:5px"></i>Cari</button>

      </div>
      <div class="box-body" style="overflow-x:auto;">
        <table id="tb_data" class="table table-responsive table-striped table-bordered table-hover text-left" >
          <thead>
            <tr>
            <?php if(isset($cari)){ ?>
            <?php	if($cari=='PSB'){ ?>
			  <th>Tanggal Surat Terima</th>
            <?php	}elseif ($cari=='Terbit') { ?>
              <th>Tanggal Terbit Rekomendasi</th>	
            <?php } } else { ?>
              <th>Tanggal Surat Terima</th>
            <?php } ?>
              <th>Nama Konsumen</th>
              <th>Nama & Alamat</th>
              <th>Jenis Produk</th>
              <th>Status</th>
              <th>Kesimpulan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="">
            <?php foreach ($sertifikasi->result() as $key): ?>
              <tr>
              	<?php if(isset($cari)){ ?>
	            <?php	if($cari=='PSB'){ ?>
				  <td><?php echo date("j F Y", strtotime($key->tgl_surat_terima)) ?></td>
	            <?php	}elseif ($cari=='Terbit') { ?>
	              <td><?php echo date("j F Y", strtotime($key->terbit_rekomendasi)) ?></td>
	            <?php } } else { ?>
	              <td><?php echo date("j F Y", strtotime($key->tgl_surat_terima)) ?></td>
	            <?php } ?>
                
                <td><?php echo $key->nama_konsumen ?></td>
                <td><?php echo "$key->nama_sarana - $key->alamat_sarana" ?></td>
                <td><?php echo "$key->kategori, $key->detail_kategori - $key->detail_produk" ?></td>
                <?php if($key->status_dokumen==''){ ?>
                <td>Permohonan PSB</td>
                <?php }elseif($key->status_dokumen=='Tidak Terbit'){ ?>
                <td><font style="color: red"><?php echo $key->status_dokumen ?></font></td>
                <?php } else { ?>
                <td><?php echo $key->status_dokumen ?></td>
                <?php } ?>
                <?php
                  if (($key->timeline_rekomendasi)&&($key->timeline_audit)) {
                    if (($key->timeline_rekomendasi=='Tepat Waktu')&&($key->timeline_audit=='Tepat Waktu')){
                      $timeline_kesimpulan = 'Tepat Waktu';
                    }
                    else{
                      $timeline_kesimpulan = 'Tidak Tepat Waktu';
                    }
                  }
                  else{
                    $timeline_kesimpulan = '';
                  }
                 ?>
                <td><?php echo $timeline_kesimpulan ?></td>
                <td width="14%">
                  <a href="" data-toggle="modal" data-target="#modal_edit<?php echo $key->id_data;?>"><button class="btn btn-success"><i class="fa fa-eye"></i></button></a>
                  <?php if($this->session->userdata('si_idrole')==4){ ?>
                  <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i></button>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="<?php base_url() ?>sertifikasi/edit/<?php echo $key->id_data ?>">Update Data</a></li>
                    <li class="divider"></li>
                    <li><a href="" data-toggle="modal" data-target="#modal_edit_kategori<?php echo $key->id_data;?>">Edit Kategori Produk</a></li>
                    <li><a href="<?php echo base_url('perusahaan/edit/').$key->id_sarana ?>">Edit Perusahaan</a></li>
                  </ul>
                  </div>
                  <?php } ?>
                </td>
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

    <div class="modal fade" id="modal_cari" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header" style="background-color: #367fa9;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 id="header_modal" class="modal-title" style="color:white"><i class="fa fa-search" style="margin-right:5px"></i>Cari</h4>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="" id="form_add">
            <form method="post" action="<?php echo base_url('sertifikasi/sertifikasi/cari') ?>">
              <div class="row">
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" class="form-control" name="tahun" value="<?php echo $this->session->userdata('periode'); ?>" required>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>Bulan</label>
                    <select class="form-control" required="" name="bulan">
                    	<option value="">- Pilih Bulan -</option>
                    	<option value="01">Januari</option>
                    	<option value="02">Februari</option>
                    	<option value="03">Maret</option>
                    	<option value="04">April</option>
                    	<option value="05">Mei</option>
                    	<option value="06">Juni</option>
                    	<option value="07">Juli</option>
                    	<option value="08">Agustus</option>
                    	<option value="09">September</option>
                    	<option value="10">Oktober</option>
                    	<option value="11">November</option>
                    	<option value="12">Desember</option>
                    </select>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>Jenis</label>
                    <select class="form-control" required="" name="jenis">
                    	<option value="">- Pilih Jenis -</option>
                    	<option value="PSB">Permohonan PSB</option>
                    	<option value="Terbit">Terbit Rekomendasi</option>
                    </select>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-search"></i>   Cari</button>
            </form>
          </div>
        </div>
        <!--Footer-->
      </div>
      <!--/.Content-->
    </div>
  </div>
  <?php
        foreach($sertifikasi->result() as $i):
            $id_user=$i->id_data;
            $username=$i->nama_sarana;
            $password=$i->nama_konsumen;
            $nama=$i->nama_konsumen;
            $id_role=$i->nama_konsumen;
            $petugasdetail1='';
            $petugasdetail2='';
            $petugasdetail3='';
            $petugasdetail4='';
        ?>
        <?php foreach ($petugas->result() as $key): ?>
        <?php  if($key->id_user==$i->petugas_1){
            $petugasdetail1=$key->nama;
          } elseif($key->id_user==$i->petugas_2){
            $petugasdetail2=$key->nama;
          } elseif($key->id_user==$i->petugas_3){
            $petugasdetail3=$key->nama;
          } elseif($key->id_user==$i->petugas_4){
            $petugasdetail4=$key->nama;
          } ?>
        <?php endforeach; ?>

  <div class="modal fade" id="modal_edit_kategori<?php echo $i->id_data;?>"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header" style="background-color: #367fa9;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 id="header_modal" class="modal-title" style="color:white">Edit Kategori Produk</h4>
        </div>
        <div class="modal-body">
          <div class="" id="form_add_kegiatan">
            <form method="post" action="<?php echo base_url('sertifikasi/sertifikasi/edit_kategori') ?>">
              <input type="hidden" class="form-control" name="id_data" placeholder="" value="<?php echo $i->id_data ?>" required>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Perusahaan</label>
                      <input class="form-control" type="text" readonly="" name="" value="<?php echo $i->nama_sarana ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" required id="kategori_produk" name="kategori">
                        <option value="">- Pilih Kategori Produk -</option>
                        <?php foreach ($kategori->result() as $key): ?>
                          <option value="<?php echo $key->id_kategori ?>"><?php echo $key->kategori ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Detail Kategori</label>
                      <select class="form-control" required id="detail_kategori_produk" name="detail_kategori">
                        <option value="">- Pilih Detail Kategori Produk -</option>

                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Detail Produk</label>
                      <input type="text" class="form-control" name="detail_produk" placeholder="Detail Produk" required value="<?php echo $i->detail_produk ?>">
                    </div>
                  </div>
                </div>
            <!--Footer-->
              <button class="btn btn-primary btn-block" type="submit" name="button"><i class="fa fa-paper-plane-o"></i>   Simpan</button>
            </form>
          </div>
        </div>
        <!--Footer-->
      </div>
      <!--/.Content-->
    </div>
  </div>
  <div class="modal fade" id="modal_edit<?php echo $id_user;?>"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header" style="background-color: #367fa9;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 id="header_modal" class="modal-title" style="color:white"><i class="fa fa-eye" style="margin-right:5px"></i>Detail Data</h4>
        </div>
        <div class="modal-body">
          <div class="" id="form_add_kegiatan">
            <div class="row">
              <div class="col-xs-12 table-responsive" id="form_add_kegiatan">
                <table id="tb_modal" class="table table-striped">
                  <tr>
                    <td colspan='3'><center><b>Detail Perusahaan</b></center></td>
                  </tr>
                  <tr>
                    <td width="30%">Nama</td>
                    <td>:</td>
                    <td><?php echo $i->nama_konsumen ?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $i->alamat_sarana ?></td>
                  </tr>
                  <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td><?php echo $i->tlp_sarana ?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $i->email ?></td>
                  </tr>
                  <tr>
                    <td>Jenis Perusahaan</td>
                    <td>:</td>
                    <td><?php echo $i->jenis_sarana ?></td>
                  </tr>
                  <tr>
                    <td>Detail Jenis Perusahaan</td>
                    <td>:</td>
                    <td><?php echo $i->detail_jenis_sarana ?></td>
                  </tr>
                  <tr>
                    <td colspan='3'><center><b>Detail Produk</b></center></td>
                  </tr>
                  <tr>
                    <td>Kategori Produk</td>
                    <td>:</td>
                    <td><?php echo $i->kategori ?></td>
                  </tr>
                  <tr>
                    <td>Detail Kategori</td>
                    <td>:</td>
                    <td><?php echo $i->detail_kategori ?></td>
                  </tr>
                  <tr>
                    <td>Detail Produk</td>
                    <td>:</td>
                    <td><?php echo $i->detail_produk ?></td>
                  </tr>
                  <tr>
                    <td colspan='3'><center><b>Detail Sertifikasi</b></center></td>
                  </tr>
                  <tr>
                    <td>Tanggal Surat Terima</td>
                    <td>:</td>
                    <td><?php echo $i->tgl_surat_terima ?></td>
                  </tr>
                  <tr>
                    <td>Tindak Lanjut</td>
                    <td>:</td>
                    <td><?php echo $i->tindak_lanjut ?></td>
                  </tr>
                  <tr>
                    <td>Petugas 1</td>
                    <td>:</td>
                    <td><?php echo $petugasdetail1 ?></td>
                  </tr>
                  <tr>
                    <td>Petugas 2</td>
                    <td>:</td>
                    <td><?php echo $petugasdetail2 ?></td>
                  </tr>
                  <tr>
                    <td>Petugas 3</td>
                    <td>:</td>
                    <td><?php echo $petugasdetail3 ?></td>
                  </tr>
                  <tr>
                    <td>Petugas 4</td>
                    <td>:</td>
                    <td><?php echo $petugasdetail4 ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Audit</td>
                    <td>:</td>
                    <td><?php echo $i->tanggal_audit.' - '.$i->tanggal_audit_selesai ?></td>
                  </tr>
                  <tr>
                    <td>Batas Waktu Perbaikan</td>
                    <td>:</td>
                    <td><?php echo $i->batas_waktu_perbaikan ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Perbaikan</td>
                    <td>:</td>
                    <td><?php echo $i->tanggal_perbaikan ?></td>
                  </tr>
                  <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><?php echo $i->keterangan ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Terbit Rekomendasi</td>
                    <td>:</td>
                    <td><?php echo $i->terbit_rekomendasi ?></td>
                  </tr>
                  <tr>
                    <td>Status Dokumen</td>
                    <td>:</td>
                    <td><?php echo $i->status_dokumen ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
        <!--Footer-->
      </div>
      <!--/.Content-->
    </div>
  </div>
  <?php endforeach;?>

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
<script src="<?php echo base_url('assets/Styling/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Styling/plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Styling/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#judul').text('SI KONSER');
    $('#btn_sertifikasi').addClass('active');
    $('#tb_data').DataTable({
       aaSorting: [[0, 'desc']]
    });
  });
  $('#btn_cari').click(function(event) {
    $('#form_add').attr('hidden', false);
    $('#modal_cari').modal('show');
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
        $('.pilihan_2').remove();
        for (var i = 0; i < data.length; i++) {
          console.log('hehe');
          $('#detail_kategori_produk').append("<option class='pilihan_2' value='"+data[i].id_detail_kategori+"'>"+data[i].detail_kategori+"</option>");
        }
      }
    });
});
  // $('#btn_tambah').click(function(event) {
  //   $('#header_modal').html('<i class="fa fa-plus" style="margin-right:5px"></i> New Konsultasi');
  //   $('#form_add').attr('hidden', false);
  //   $('#modal_tambah').modal('show');
  // });

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
