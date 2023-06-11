
<!-- modal tambah data -->

<div class="modal fade roman" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="exampleModalLabel">
        <i class="fas fa-fw fa-plus-circle text-white"></i>
        Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <form  action="" method="post">
          <div class="form-group">
            <label for="id" class="col-form-label">ID Penerbit</label>
            <input type="text" class="form-control" id="id" name="id_penerbit" placeholder="Masukkan ID Penerbit" required>
          </div>
         <div class="form-group">
            <label for="nama" class="col-form-label">Nama Penerbit</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Penerbit" required>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Tahun" required>
          </div>
          <div class="form-group">
            <label for="telp" class="col-form-label">No.Telp</label>
            <input type="tel" class="form-control" id="telp" name="telp" placeholder="Masukkan Nomor Telp" required>
          </div>
          <div class="form-group">
            <label for="alamat" class="col-form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required></textarea>
          </div>   
        </div>
        <div class="modal-footer bg-info">
            <div class="row">
            <button type="submit" name="submit" class="btn btn-primary mr-2"><i class="fas fa-fw fa-paper-plane"></i> Simpan</button>
            <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><i class="fas fa-fw fa-reply"></i> Close</button>
            </div>
        </div>
      </form>
      </div>
    </div>
  </div>
<?php 
    if(isset($_POST['submit'])) {
            $id = $_POST['id_penerbit'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];
            include_once("../connect.php");

            $result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id', '$nama', '$email', '$telp', '$alamat');");
            
            if($result==true){
               echo "
               <script>
               alert('Data Berhasil Di Simpan');
               document.location='index.php';
               </script>
               ";
            }else{
                 echo "
               <script>
               alert('Data Gagal Di Simpan');
               document.location='index.php';
               </script>
               ";
            }
        
        }


?>
<!-- akhir modal tambah data -->





<!-- modal hapus data -->

<div class="modal fade roman" id="Modalhapus<?= $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="exampleModalLabel">
        <i class="fas fa-fw fa-trash-alt text-white"></i>
        Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body ">
          <h5 class="text-center"> Apakah Ingin Menghapus Data Ini ?</h5>
            <div class="text-white bg-danger text-center"><?= $hasil_data['id_penerbit'] ?> - <?= $hasil_data['nama_penerbit'] ?></div>
          
          <form action="" method="post">
            <input hidden type="text" name="id" value="<?= $id;?>" required>
                   
        </div>
        <div class="modal-footer bg-info ">
            <div class="row ">
            <button type="submit" name="hapus" class="btn btn-primary mr-2"><i class="fas fa-fw fa-paper-plane"></i> Hapus</button>
            <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><i class="fas fa-fw fa-reply"></i> Close</button>
            </div>
        </div>
       </form> 
      </div>
    </div>
  </div>

<?php 
    if(isset($_POST['hapus'])) {
            $id = $_POST['id'];
            
            include_once("../connect.php");

        $result = mysqli_query($mysqli, "DELETE FROM penerbit WHERE id_penerbit='$id'");
            
            if($result==true){
               echo "
               <script>
               alert('Data Berhasil Di Hapus');
               document.location='index.php';
               </script>
               ";
            }else{
                 echo "
               <script>
               alert('Data Gagal Di Hapus');
               document.location='index.php';
               </script>
               ";
            }
        
        }


?>
<!--akhir modal hapus data -->

<!-- modal edit data -->


<div class="modal fade roman" id="Modaledit<?= $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="exampleModalLabel">
        <i class="fas fa-fw fa-pen-alt text-white"></i>
        Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form  action="" method="post">
          <div class="form-group">
            <label for="id" class="col-form-label">ID Penerbit</label>
            <input type="text" class="form-control" id="id" name="ubah_id" placeholder="Masukkan ID Penerbit" value="<?= $hasil_data['id_penerbit'];?>" readonly required>
          </div>
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama Penerbit</label>
            <input type="text" class="form-control" id="nama" name="ubah_nama" placeholder="Masukkan Nama Penerbit" value="<?= $hasil_data['nama_penerbit']?>" required>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="email" name="ubah_email" placeholder="Masukkan Email" value="<?= $hasil_data['email'];?>" required>
          </div>
          <div class="form-group">
            <label for="telp" class="col-form-label">No.Telp</label>
            <input type="tel" class="form-control" id="telp" name="ubah_telp" placeholder="Masukkan No.Telp" value="<?= $hasil_data['telp']?>" required>
          </div>

          <div class="form-group">
            <label for="alamat" class="col-form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="ubah_alamat" placeholder="Masukkan Alamat" required> <?= $hasil_data['alamat']?>
            </textarea>
          </div>   
        </div>
        <div class="modal-footer bg-info">
            <div class="row">
            <button type="submit" name="ubah" class="btn btn-primary mr-2"><i class="fas fa-fw fa-paper-plane"></i> Ubah</button>
            <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><i class="fas fa-fw fa-reply"></i> Close</button>
            </div>
        </div>
        <?php 
    if(isset($_POST['ubah'])) {
            $id = $_POST['ubah_id'];
            $ubah_nama = $_POST['ubah_nama'];
            $ubah_email = $_POST['ubah_email'];
            $ubah_telp = $_POST['ubah_telp'];
            $ubah_alamat = $_POST['ubah_alamat'];
            
            include_once("../connect.php");

            $result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$ubah_nama', email = '$ubah_email', telp = '$ubah_telp', alamat = '$ubah_alamat'  WHERE id_penerbit = '$id'");
            
            if($result==true){
               echo "
               <script>
               alert('Data Berhasil Di Ubah');
               document.location='index.php';
               </script>
               ";
            }else{
                 echo "
               <script>
               alert('Data Gagal Di Ubah');
               document.location='index.php';
               </script>
               ";
            }
        
        }


?>


      </form>
      </div>
    </div>
  </div>



<!-- akhir modal edit data -->