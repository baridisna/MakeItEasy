
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Petani
        <small>_</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Data Profil</a></li>
        <li class="active">Petani</li>
      </ol>
    </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
    </div>

   
    



<!-- tabel -->
 <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">History Transaksi</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" style="font-size: 15px">
                <tr class="bg-gray">
                  <th style="text-align: center; line-height: 50px" rowspan="2">No</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Tanggal</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Nama</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Asal Daerah</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Jenis Cabai</th>
                  <th style="text-align: center;" colspan="3">Berat</th>
                  <th style="text-align: center; line-height: 50px" rowspan="2">Jumlah Uang</th>
                </tr>
                <tr class="bg-gray">
                  <th>Kotor </th>
                  <th>BS/ MTL </th>
                  <th>Bersih </th>
                </tr>

                <!-- <?php $no
                // =1; foreach ($tb_transaksi as $tb): ?> -->
                <tr>
                  <!-- <td><?= $no ?></td>
                  <td><?= $tb->tanggal ?></td>
                  <td><?= $tb->nama_petani ?></td>
                  <td><?= $tb->asal_daerah ?></td>
                  <td><?= $tb->kode_cabai ?></td>
                  <td><?= $tb->berat_kotor ?></td>
                  <td><?= $tb->berat_bs ?></td>
                  <td><?= $tb->berat_kotor - $tb->berat_bs ?></td>
                  <td><?= $tb->jumlah_uang ?></td> -->
                </tr>
                <!-- <?php $no
                // ++; endforeach ?> -->

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

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

<!-- Modal Input Setoran-->
<div id="inputSetoran" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Setoran</h4>
      </div>
      <form action="<?php echo base_url().'Transaksi/tambah_transaksi'; ?>" method="post">
      <div class="modal-body">

        <div class="row" style="padding-bottom: 5px">
          <div class="col-md-4">
            <label>Tanggal :</label>
          </div>
          <div class="col-md-8">
            <input type="text" name="tanggal" class="form-control input-tanggal datepicker">
          </div>
        </div>

        <div class="row" style="padding-bottom: 5px">
          <div class="col-md-4">
            <label>Nama Petani :</label>
          </div>
          <div class="col-md-8">
            <input type="text" name="nama_petani" class="form-control">
          </div>
        </div>

        <div class="row" style="padding-bottom: 5px">
          <div class="col-md-4">
            <label>Asal Daerah :</label>
          </div>
          <div class="col-md-8">
           <input type="text" name="asal_daerah" class="form-control">
          </div>
        </div>

        <div class="row" style="padding-bottom: 5px">
          <div class="col-md-4">
           <label>Jenis Cabai :</label>
          </div>
          <div class="col-md-8">
            <!-- <?php
                // $dd_cabai_attribute = 'class="form-control"';
                // echo form_dropdown('cabai', $dd_cabai, $cabai_selected, $dd_cabai_attribute);
                ?> -->
          </div>
        </div>
              
        <div class="col-md-12" style="text-align: center; padding-bottom: 5px; padding-top: 10px">      
          <b>Berat</b>
        </div>
        <div class="row">
            <div class="col-md-6">
              <label>Kotor</label>
              <input type="text" name="berat_kotor">kg
            </div>
            <div class="col-md-6">
              <label>BS</label>
              <input type="text" name="berat_bs">kg
            </div>
        </div>
      </div>

      <div class="modal-footer">
        <input type="submit" class="btn btn-info" value="Submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

    </form>
    </div>

  </div>
</div>
<!-- END Modal Input Setoran -->

<!-- Modal edit harga-->
<div id="editHarga" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Harga</h4>
      </div>

      <form action="<?php echo base_url().'Transaksi/edit_harga'; ?>" method="post">
        <div class="modal-body">
          <table class="table table-condensed no-margin">
            <thead>
              <tr>
                <th style="text-align: center; line-height: 50px" rowspan="2">No</th>
                <th style="text-align: center; line-height: 50px" rowspan="2">Kode</th>
                <th style="text-align: center; line-height: 50px" rowspan="2">Jenis</th>
                <th style="text-align: center;" colspan="2">Harga</th>
              </tr>
                <tr>
                  <th>BS/ MTL </th>
                  <th>Bersih </th>
                </tr>
            </thead>
            <tbody>
              
            <!-- <?php $no
            // =1; foreach ($tb_cabai as $tb): ?> -->
              <tr>
                <!-- <td><?= $no ?></td> -->
                <!-- <td><?= $tb->kode ?></td> -->
                <!-- <td><?= $tb->jenis ?></td> -->
                <!-- <input type="hidden" name="kode<?= $tb->kode ?>" value="<?= $tb->kode ?>">
                <td><input type="text" name="harga_bs<?= $tb->kode ?>" value="<?= $tb->harga_bs ?>"></td>
                <td><input type="text" name="harga_bersih<?= $tb->kode ?>" value="<?= $tb->harga_bersih ?>"></td> -->
              </tr>
              <<!-- ?php $no++; endforeach; ? -->>
            </tbody>
          </table>
        </div>

      <div class="modal-footer">
        <input type="submit" class="btn btn-info" value="Submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>
<!-- END Modal Edit Harga -->