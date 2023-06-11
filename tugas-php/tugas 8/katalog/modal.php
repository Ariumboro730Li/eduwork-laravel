
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
            <label for="id" class="col-form-label">ID Katalog</label>
            <input type="text" class="form-control" id="id" name="id_katalog" placeholder="Masukkan ID Penerbit" required>
          </div>
         <div class="form-group">
            <label for="nama" class="col-form-label">Nama Pengarang</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Penerbit" required>
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
            $id = $_POST['id_katalog'];
            $nama = $_POST['nama'];
            include_once("../connect.php");

            $result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id', '$nama');");
            
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
            <div class="text-white bg-danger text-center"><?= $hasil_data['id_katalog'] ?> - <?= $hasil_data['nama'] ?></div>
          
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

        $result = mysqli_query($mysqli, "DELETE FROM katalog WHERE id_katalog='$id'");
            
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
            <label for="id" class="col-form-label">ID Katalog</label>
            <input type="text" class="form-control" id="id" name="ubah_id" placeholder="Masukkan ID Penerbit" value="<?= $hasil_data['id_katalog'];?>" readonly required>
          </div>
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama Katalog</label>
            <input type="text" class="form-control" id="nama" name="ubah_nama" placeholder="Masukkan Nama Penerbit" value="<?= $hasil_data['nama']?>" required>
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
          
            
            include_once("../connect.php");

            $result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$ubah_nama'  WHERE id_katalog = '$id'");
            
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