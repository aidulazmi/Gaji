 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Jabatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Jabatan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Jabatan</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('c_admin/update_data_jabatan')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_jabatan ?>" id="exampleInputEmail1" placeholder="id_jabatan" name="id_jabatan" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" class="form-control" value="<?php echo $u->jabatan ?>" id="exampleInputEmail1" placeholder="Jabatan" name="jabatan" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" class="form-control" value="<?php echo $u->keterangan ?>" id="exampleInputEmail1" placeholder="Masukkan Keterangan" name="keterangan" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
               <?php } ?>
            </div>
            <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </section>