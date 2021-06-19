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
                Data Gaji Perbulan Dan Pertahun
              </button>
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
<!--                     <th>Action</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach($user as $u){ echo ''; $i++; ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $u->nama_lengkap ?></td>
                    <td>Rp. <?php echo $u->gdasar ?></td>
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
                    <td>Rp. <?php echo $u->potong ?></td>
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
                    echo $total ?></td>
                    <!-- <td>
                      <a class="btn btn-info btn-sm" href="<?php echo site_url('C_karyawan/cetak_gaji/'.$u->id_gaji);?>">
                              <i class="fas fa-print">
                              </i>
                              Print
                      </a>
                    </td> -->
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
                    <!-- <th>Action</th> -->
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