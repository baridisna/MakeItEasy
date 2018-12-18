<!-- Content Wrapper. Contains page content --> 
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pembeli <small>_</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Data Profil</a></li>
      <li class="active">Pembeli</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-danger">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>assets/img/avatar2.png" alt="User profile picture">

            <h4 class="text-center text-primary">ID <?= $profil->id ?></h4>
            <input type="text" name="pembeliID" id="pembeliID" value="<?= $profil->id ?>" hidden>
            <h3 class="profile-username text-center"><?= $profil->nama ?></h3>
            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Saldo <span class="pull-right text-success"><?= $profil->saldo ?></span> </b>
              </li>
              <li class="list-group-item">
                <b>No Telp/HP</b> <p class="pull-right"><?= $profil->no_telp ?></p>
              </li>
              <li class="list-group-item">
                <b>No Rekening</b> <p class="pull-right"><?= $profil->no_rek ?></p>
              </li>
              <li class="list-group-item">
                <b>Alamat</b>
                <p class="text-right"><?= $profil->alamat ?></p>
              </li>
              <li class="list-group-item">
                <button id="editButton" href="#" class="btn btn-default btn-block" data-toggle="modal" data-target="#editPembeli"><i class="fa fa-edit"></i><b>Edit Profil</b></button> 
              </li>
            </ul>

            <a href="<?php echo base_url();?>Transaksi/transborong" class="btn btn-danger btn-block"><i class="fa fa-cart-plus"></i>  <b> Input Transaksi</b></a> 
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="box" style="border: 2px solid #f2dede;">
        <div class="box-header">
          <h3 class="box-title">Riwayat Transaksi</h3>
          <div class="box-tools">
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class="bg-danger">
                  <th style="text-align: center; line-height: 50px" rowspan="2">#</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Tanggal</th>
                  <th style="text-align: center;" colspan="3">Berat</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Harga</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Jumlah Uang</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Transferan </th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Saldo</th>
                </tr>
                <tr class="bg-danger">
                  <th>Colly </th>
                  <th>Kode </th>
                  <th>Bersih </th>
                </tr>
              </thead>
              <tbody>

                <?php $no=1; foreach ($tb_transaksi as $key): ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $key->tanggal ?></td>
                  <td><?= $key->colly ?></td>
                  <td><?= $key->kode ?></td>
                  <td><?= $key->bersih ?></td>
                  <td><?php if (!is_null($key->harga)) { echo "Rp".
                    number_format($key->harga,0,',','.');
                    }?></td>
                  <td><?php if (!is_null($key->harga)) { echo "Rp".
                    number_format($key->harga * $key->bersih,0,',','.');
                    }?></td>
                  <td><?php if (!is_null($key->transferan)) { echo "Rp".
                    number_format($key->transferan,0,',','.');
                    }?></td>
                  <td><?php echo "Rp".number_format($key->saldo,0,',','.') ?></td>
                </tr>
                <?php $no++; endforeach ?>

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Update Resume
              <span class="label label-success pull-right">95%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Laravel Integration
              <span class="label label-warning pull-right">50%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Back End Framework
              <span class="label label-primary pull-right">68%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Some information about this general settings option
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Allow mail redirect
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Other sets of options are available
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Expose author name in posts
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Allow the user to show his name in blog posts
          </p>
        </div>
        <!-- /.form-group -->

        <h3 class="control-sidebar-heading">Chat Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Show me as online
            <input type="checkbox" class="pull-right" checked>
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Turn off notifications
            <input type="checkbox" class="pull-right">
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Delete chat history
            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- Modal edit Pembeli -->
<div class="modal fade modal-default" id="editPembeli">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ubah Profil Pembeli Mitra</h4>
      </div>

        <div class="modal-body">
          <div class="row" style="padding-bottom: 5px">
            <div class="col-md-4">
              <label>ID :</label>
            </div>
            <div class="col-md-8">
              <input type="text" name="id_pembeli" id="id_pembeli" class="form-control" readonly required>
            </div>
          </div>

          <div class="row" style="padding-bottom: 5px">
            <div class="col-md-4">
              <label>Nama Pembeli :</label>
            </div>
            <div class="col-md-8">
              <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control">
            </div>
          </div>

          <div class="row" style="padding-bottom: 5px">
            <div class="col-md-4">
              <label>Alamat:</label>
            </div>
            <div class="col-md-8">
              <input type="text" name="alamat" id="alamat" class="form-control ">
            </div>
          </div>

          <div class="row" style="padding-bottom: 5px">
            <div class="col-md-4">
              <label>No HP :</label>
            </div>
            <div class="col-md-8">
              <input type="number" name="no_telp" id="no_telp" class="form-control">
            </div>
          </div>
          
          <div class="row" style="padding-bottom: 5px">
            <div class="col-md-4">
              <label>Rekening :</label>
            </div>
            <div class="col-md-8">
              <input type="text" name="no_rek" id="no_rek" class="form-control">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="simpanButton">Simpan Perubahan</button>
        </div>
        <!-- /.modal-footer -->
    </div>
  </div>
</div>
<!-- END Modal edit Petani -->


<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url();?>/assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/js/demo.js"></script>

<script>
  $(document).ready(function(){
    $('#example1').DataTable()

    $('#editButton').click(function(){
      var id = $('#pembeliID').val();

      $.ajax({
        url:"<?php echo base_url();?>DataProfil/edit_profil_pembeli",
        method:"POST",
        data:
          {id: id},
        dataType: "json",
        success: function(data){
          $('#id_pembeli').val(data.id);
          $('#nama_pembeli').val(data.nama);
          $('#alamat').val(data.alamat);
          $('#no_telp').val(data.no_telp);
          $('#no_rek').val(data.no_rek);
        },
        error: function(data){
          alert('Terjadi Kesalahan');
        }
      })
    });

    $('#simpanButton').click(function(){
      var id_pembeli = $('#id_pembeli').val()
      var nama_pembeli = $('#nama_pembeli').val()
      var alamat = $('#alamat').val()
      var no_telp = $('#no_telp').val()
      var no_rek = $('#no_rek').val()

      $.ajax({
        url:"<?php echo base_url();?>DataProfil/update_profil_pembeli",
        method:"POST",
        data: {
          id: id_pembeli,
          nama: nama_pembeli,
          alamat: alamat,
          no_telp: no_telp,
          no_rek: no_rek
        },
        success: function() {
          if (!alert('Data berhasil diubah')) {location.reload(true)}
        },
        error: function() {
          alert('Gagal merubah data')
        }
      })

    })

  })

</script>

</body>
</html>