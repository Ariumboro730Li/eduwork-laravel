<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <?php 
     $file = "data.json";
     $nilai = file_get_contents($file);
     $data = json_decode($nilai, true);
    ?>
    <div class="container-fluid bg-success text-white p-3">
      <h1 class="fw-bold text-center">Tugas Array</h1>
    </div>

    <div class="container-fluid mt-5">
        <div class="alert  bg-primary text-white" role="alert">
           Tampilan Daftar Nilai
        </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header bg-danger py-3 d-flex justify-content-between align-items-center">
              <h6 class="m-0 font-weight-bold text-white">
              Data Nilai</h6>
              <h6 class="m-0 font-weight-bold text-white">
              Jumlah Data :
              <span class="p-2 fw-bold"><?= count($data)?></span>
              </h6>
            </div>
          <div class="card-body ">
            <div class=" mb-3"></div>
            <div class="table-responsive">
            <table class="table table-bordered text-center table-striped">
                <thead>
                 <tr >
                    <th>No</th>      
                    <th>Nama</th>      
                    <th>Tanggal Lahir</th>      
                    <th>Umur</th>      
                    <th>Alamat</th>      
                    <th>Kelas</th>      
                    <th>Nilai</th>      
                    <th>Hasil</th>      
                 </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor=0;
                  foreach ($data as $tampil) {
                    $nomor++;
                    $lahir=new DateTime($tampil['tanggal_lahir']);
                    $today=new DateTime();
                    $nilai =$tampil['nilai'];

                        if ($nilai > 90) {
                            $grade = "A+";
                        } elseif($nilai > 80){
                            $grade = "A";
                        } elseif($nilai > 70){
                            $grade = "B+";
                        } elseif($nilai > 60){
                            $grade = "B";
                        } elseif($nilai > 50){
                            $grade = "C+";
                        } elseif($nilai > 40){
                            $grade = "C";
                        } elseif($nilai > 30){
                            $grade = "D";
                        } elseif($nilai > 20){
                            $grade = "E";
                        } else {
                            $grade = "F";
                        }
                  ?>
                  <tr>
                    <td><?= $nomor;?></td>
                    <td><?= $tampil['nama'];?></td>
                    <td><?= $tampil['tanggal_lahir'];?></td>
                    <td>
                      <?php 
                        $umur = $today->diff($lahir);
                        echo $umur->y; 
                        echo " Tahun"; 
                      ?>
                    </td>
                    <td><?= $tampil['alamat'];?></td>
                    <td><?= $tampil['kelas'];?></td>
                    <td><?= $tampil['nilai'];?></td>
                    <td><?= $grade ?></td>
                    
                  </tr>
<?php }?>                  
                </tbody>
            </table>
           </div>
         </div>
       </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>