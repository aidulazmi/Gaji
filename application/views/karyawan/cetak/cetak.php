<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="<?=base_url();?>/asset/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PT. BOPI REDHA TEHNIK</title>
    <style>
      body {
        background-color: #e8e8e8;
      }
      .kartu {
        width: 800px;
        margin: 0 auto;
        margin-top: 70px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
    transition: all .3s;
      } 
      .foto {
        padding: 20px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
}
.biodata {
    margin-top: 30px;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: black;
  text-align: center;
}
    </style>
  </head>
  <body>
    <center>
  <h3 class="text-center text-success mt-3">Laporan Gaji <?php echo $this->session->userdata('nama_lengkap')?> PT. BOPI REDHA TEHNIK</h3>
</center>

<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <div class="foto">
        <img src="<?=base_url();?>/asset/loginu/images/logo.png" alt="" width="300" height="auto">
      </div>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <?php foreach($user2 as $u){ ?>
            <tr>
              <td width="25%" valign="top" class="textt">Nama Lengkap</td>
                <td width="2%">:</td>
                <td style="color: rgb(118, 157, 29); font-weight:bold"><?php echo $u->nama_lengkap ?></td>
            </tr>
          <tr>
              <td class="textt">Jenis Kelamin</td>
                <td>:</td>
                <td>
                       <?php
                      $x =$u->jk;
                      if ($x == 'l' ) 
                          echo 'Laki-Laki';
                        elseif($x == 'p' ){
                           echo 'Perempuan';
                        }
                        else
                        {
                          echo '<span class="badge badge-danger">Belum Ada Bulan</span>';
                        }
                      ?></td>
            </tr>
          <tr>
              <td class="textt">Alamat</td>
                <td>:</td>
                <td><?php echo $u->alamat ?></td>
            </tr>

            <tr>
              <td class="textt">No Hp</td>
                <td>:</td>
                <td><?php echo $u->hp ?></td>
            </tr>
            <tr>
              <td class="textt">Bulan</td>
                <td>:</td>
                <td><?php
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
                      ?>
                        
                      </td>
            </tr>
<tr>
              <td class="textt">Tahun</td>
                <td>:</td>
                <td><?php echo $u->tahun ?></td>
            </tr>

          <tr>
              <td class="textt">Gaji Dasar</td>
                <td>:</td>
                <td>Rp. <?php echo number_format($u->gdasar, 0, ".", ".") ?></td>
            </tr>
          <tr>
              <td valign="top" class="textt">Masuk</td>
                <td valign="top">:</td>
                <td><?php echo $u->hkerja ?> Hari</td>
            </tr>
            <tr>
              <td valign="top" class="textt">Total Transport</td>
                <td valign="top">:</td>
                <td>Rp. <?php echo number_format($u->totransport, 0, ".", ".") ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt">Total Presentasi</td>
                <td valign="top">:</td>
                <td>Rp. <?php echo number_format($u->toprestasi, 0, ".", ".") ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt">Luar Kota</td>
                <td valign="top">:</td>
                <td><?php echo $u->hluar ?> Hari</td>
            </tr>
            <tr>
              <td valign="top" class="textt">Total Luar</td>
                <td valign="top">:</td>
                <td>Rp. <?php echo number_format($u->toluar, 0, ".", ".") ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt">Potongan</td>
                <td valign="top">:</td>
                <td>Rp. <?php echo number_format($u->potong, 0, ".", ".")?></td>
            </tr>
            <tr>
              <td valign="top" class="textt">Total Gaji</td>
                <td valign="top">:</td>
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
                    echo "Rp.", number_format($total, 0, ".", ".") ?>
                      
                    </td>
            </tr>
            <tr>
            <td valign="top" class="textt"></td>
                <td valign="top">:</td>
                <td></td>
            </tr>

            <?php } ?>
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
</div>
    </div>

  </div>
  <p align="right"> Pekanbaru, <?php echo date('d M y');?> </p>
  <br>
  <br>
  <br>
  <br>
  <br>
  <p align="right"> H. Erizon Chan

<div class="footer">
  <hr>
  <p><b>Alamat :</b></p>
  <p>Jl. Pertanian B-18</p>
  <p>Kota Pekanbaru Riau - 28294</p>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    window.print();
  </script>
  </body>
</html>