  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Gaji</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/jabatan')?>">Home</a></li>
              <li class="breadcrumb-item active">Gaji</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fas fa-file-import"> </i>   
                    Tambah Data Gaji</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Gaji Dasar</th>
                    <th>Kerja</th>
                    <th>Bulan</th>
                    <th>tahun</th>
                    <th>Potongan</th>
                    <th>Total Gaji</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach($user as $u){ echo ''; $i++; ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $u->nama_lengkap ?></td>
                    <td>Rp. <?php echo number_format($u->gdasar, 0, ".", ".") ?></td>
                    <td><?php echo $u->hkerja ?> Hari</td>
                    <td>
                       <?php
                      $x =$u->bulan;
                      if ($x == '1' ) 
                          echo 'Januari';
                        elseif($x == '2' ){
                           echo 'Februari';
                        }elseif($x == '3' ){
                           echo 'Maret';
                        }elseif($x == '4' ){
                           echo 'April';
                        }elseif($x == '5' ){
                           echo 'Mei';
                        }elseif($x == '6' ){
                           echo 'Juni';
                        }elseif($x == '7' ){
                           echo 'Juli';
                        }elseif($x == '8' ){
                           echo 'Agustus';
                        }elseif($x == '9' ){
                           echo 'September';
                        }elseif($x == '10' ){
                           echo 'Oktober';
                        }elseif($x == '11' ){
                           echo 'November';
                        }elseif($x == '12' ){
                           echo 'Desember';
                        }
                        else
                        {
                          echo '<span class="badge badge-danger">Belum Ada Bulan</span>';
                        }
                      ?></td>
                    <td><?php echo $u->tahun ?></td>
                    <td>Rp. <?php echo number_format($u->potong, 0, ".", ".") ?></td>
                    <td>Rp. <?php 
                    $gd = $u->gdasar;
                    $td = $u->tdasar;
                    $tk = $u->tkemahalan;
                    $tt = $u->totransport;
                    $tp = $u->toprestasi;
                    $tj = $u->tjabatan;
                    $to = $u->toluar;
                    $p = $u->potong;
                    $total = $gd + $td + $tk + $tt + $tp + $tj + $to - $p;
                    echo number_format($total, 0, ".", ".")?></td>
                    <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="<?php echo site_url('C_admin/edit_gaji/'.$u->id_gaji);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_admin/hapus_gaji/'.$u->id_gaji);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                      </a>
                      <a class="btn btn-success btn-sm" href="<?php echo site_url('C_admin/cetak_gaji/'.$u->id_gaji);?>" target="_blank">
                              <i class="fas fa-print">
                      </i>
                              Cetak
                      </a>

                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Gaji Dasar</th>
                    <th>Kerja</th>
                    <th>Bulan</th>
                    <th>tahun</th>
                    <th>Potongan</th>
                    <th>Total Gaji</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


        <!-- Tambah Kategori -->
        <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Gaji</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('C_admin/simpan_gaji')?>" method="POST">
                <div class="card-body">
				<div class="form-group">
                        <label>Nama Lengkap</label>
                        <select class="form-control" name="id_user" id="id_user">
                          <option value="" selected>Silahkan Isi Nama lengkap</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_user."'>".$row->nama_lengkap."</option>";
                              }
                            ?>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Gaji Dasar(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Gaji Dasar" name="gdasar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Dasar(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Tunjangan Dasasr" name="tdasar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Kemahalan(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Tunjangan Kemahalan" name="tkemahalan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lama Kerja</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="hl" placeholder="Masukkan Hari Kerja" name="hkerja" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunajangan Transport(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="ttransport" placeholder="Masukkan Tunjangan Transport" name="ttransport" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Tunajangan Transport(Rp.)</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="totalt" placeholder="Total Tunjangan Transport" name="totransport" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunajangan Prestasi(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="tp" placeholder="Masukkan Tunjangan Prestasi" name="tprestasi" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Tunajangan Prestasi(Rp.)</label>
                    <input type="text" class="form-control" onkeyup="sum2();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="totalp" placeholder="Masukkan total Tunjangan Prestasi" name="toprestasi" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunajangan Jabatan(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Tunjangan Jabatan" name="tjabatan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Luar Kota</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="jl" placeholder="Masukkan Jumlah Luar Kota" name="hluar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Luar Kota(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="jl2" placeholder="Tunjangan Luar Kota" name="tluar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Tunjangan Luar Kota(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" onkeyup="sum3();" id="tj" placeholder="tluar" name="toluar" readonly required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Potongan Gaji(Rp.)</label>
                    <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Potongan" name="potong" required>
                  </div>
                    <div class="form-group">
                        <label>Bulan</label>
                        <select class="form-control" name="bulan" id="bulan">
                          <option value="1" selected>Silahkan Pilih Bulan</option>
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
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Tahun" name="tahun" required>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
              <button type="Submit" name="Simpan" class="btn btn-outline-light">Simpan</button>
            </div>

            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->


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