 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Gaji</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Gaji</li>
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
                <h3 class="card-title">Ubah Data Gaji</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('c_admin/update_data_gaji')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_gaji ?>" id="exampleInputEmail1" placeholder="id_gaji" name="id_gaji" required>
                  </div>

                  <div class="form-group">
                        <label>Nama Lengkap</label>
                        <select class="form-control" name="id_user" id="id_user">
                          <option value="<?php echo $u->id_user ?>" selected><?php echo $u->id_gaji ?></option>
                          <option value="<?php echo $u->id_user ?>">Silahkan Isi Nama lengkap</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_user."'>".$row->nama_lengkap."</option>";
                              }
                            ?>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Gaji Dasar(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Gaji Dasar" value="<?php echo $u->gdasar ?>" name="gdasar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Dasar(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Tunjangan Dasasr" value="<?php echo $u->tdasar ?>" name="tdasar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Kemahalan(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Tunjangan Kemahalan" value="<?php echo $u->tkemahalan ?>" name="tkemahalan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lama Kerja</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="hl" placeholder="Masukkan Hari Kerja" value="<?php echo $u->hkerja ?>" name="hkerja" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunajangan Transport(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="ttransport" placeholder="Masukkan Tunjangan Transport" value="<?php echo $u->ttransport ?>" name="ttransport" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Tunajangan Transport(Rp.)</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="totalt" placeholder="Total Tunjangan Transport" value="<?php echo $u->totransport ?>" name="totransport" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunajangan Prestasi(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="tp" placeholder="Masukkan Tunjangan Prestasi" value="<?php echo $u->tprestasi ?>" name="tprestasi" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Tunajangan Prestasi(Rp.)</label>
                    <input type="text" class="form-control" onkeyup="sum2();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="totalp" placeholder="Masukkan total Tunjangan Prestasi" value="<?php echo $u->toprestasi ?>" name="toprestasi" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunajangan Jabatan(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Tunjangan Jabatan" value="<?php echo $u->tjabatan ?>" name="tjabatan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Luar Kota</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="jl" placeholder="Masukkan Jumlah Luar Kota" value="<?php echo $u->hluar ?>" name="hluar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Luar Kota(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="jl2" placeholder="Tunjangan Luar Kota" value="<?php echo $u->tluar ?>" name="tluar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Tunjangan Luar Kota(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" onkeyup="sum3();" id="tj" placeholder="tluar" value="<?php echo $u->toluar ?>" name="toluar" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Potongan Gaji(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Potongan" value="<?php echo $u->potong ?>" name="potong" required>
                  </div>
                    <div class="form-group">
                        <label>Bulan</label>
                        <select class="form-control" name="bulan" id="bulan">
                          <option value="<?php echo $u->bulan ?>" selected><?php echo $u->bulan ?></option>
                          <option value="<?php echo $u->bulan ?>">Silahkan Pilih Bulan</option>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Tahun" value="<?php echo $u->tahun ?>" name="tahun" required>
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


<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('hl').value;
      var txtSecondNumberValue = document.getElementById('ttransport').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('totalt').value = result;
      }
}

function sum2() {
      var txtFirstNumberValue = document.getElementById('hl').value;
      var txtSecondNumberValue = document.getElementById('tp').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('totalp').value = result;
      }
}
function sum3() {
      var txtFirstNumberValue = document.getElementById('jl').value;
      var txtSecondNumberValue = document.getElementById('jl2').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('tj').value = result;
      }
}
</script>