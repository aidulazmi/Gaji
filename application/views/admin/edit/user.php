 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Ubah Data User</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('c_admin/update_data_user')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_user ?>" id="exampleInputEmail1" placeholder="id_user" name="id_user" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Username" value="<?php echo $u->username ?>" name="username" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Lengkap" value="<?php echo $u->nama_lengkap ?>" name="nama_lengkap" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email" value="<?php echo $u->email ?>" name="email" required>
                  </div>
                  <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control" name="id_jabatan" id="id_jabatan">
                          <option value="<?php echo $u->id_jabatan ?>" selected><?php echo $u->id_jabatan ?></option>
                          <option value="<?php echo $u->id_jabatan ?>">Silahkan Isi Jabatan</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_jabatan."'>".$row->jabatan . $row->id_jabatan."</option>";
                              }
                            ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bagian</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Bagian" value="<?php echo $u->bagian ?>" name="bagian" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Alamat" value="<?php echo $u->alamat ?>" name="alamat" required>
                  </div>
                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jk" id="jk">
                          <option value="<?php echo $u->jk ?>" selected><?php echo $u->jk ?></option>
                          <option value="<?php echo $u->jk ?>">Silahkan Pilih Bulan</option>
                          <option value="l">Laki-Laki(L)</option>
                          <option value="p">Perempuan(P)</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama" id="jk">
                          <option value="<?php echo $u->agama ?>" selected><?php echo $u->agama ?></option>
                          <option value="<?php echo $u->agama ?>">Silahkan Pilih Agama</option>
                          <option value="i">Islam (I)</option>
                          <option value="p">Kristen Protestan (P)</option>
                          <option value="k">Kristen Katholik (K)</option>
                          <option value="h">Hindu (H)</option>
                          <option value="b">Budha (B)</option>
                        </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">No HP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No HP" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?php echo $u->hp ?>"  name="hp" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Password" value="<?php echo $u->password ?>" name="password" required>
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