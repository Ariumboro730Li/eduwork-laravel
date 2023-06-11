
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
            <label for="isbn" class="col-form-label">No.ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Masukkan No ISBN" required>
          </div>
          <div class="form-group">
            <label for="judul" class="col-form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Nama Judul" required>
          </div>
          <div class="form-group">
            <label for="tahun" class="col-form-label">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun" required>
          </div>
          <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <select class="form-control" id="penerbit" name="penerbit" required>
            <option value="">--Pilih Penerbit--</option>
             <?php 
                while ($penerbit_data=mysqli_fetch_array($penerbit)){
                ?>
                <option value="<?php echo $penerbit_data['id_penerbit']; ?>"><?php echo$penerbit_data['nama_penerbit']; ?></option>
                <?php } ?>
            ?>
          </select>
          </div>
          <div class="form-group">
          <label for="pengarang">Pengarang</label>
          <select class="form-control" id="pengarang" name="pengarang" required>
            <option value="">--Pilih pengarang--</option>
             <?php 
                while ($pengarang_data=mysqli_fetch_array($pengarang)){
                ?>
                <option value="<?php echo $pengarang_data['id_pengarang']; ?>"><?php echo $pengarang_data['nama_pengarang']; ?></option>
                <?php } ?>
            ?>
          </select>
          </div>
          <div class="form-group">
          <label for="katalog">Katalog</label>
          <select class="form-control" id="katalog" name="katalog" required>
            <option value="">--Pilih katalog--</option>
             <?php 
                while ($katalog_data=mysqli_fetch_array($katalog)){
                ?>
                <option value="<?php echo $katalog_data['id_katalog']; ?>"><?php echo $katalog_data['nama']; ?></option>
                <?php } ?>
            ?>
          </select>
          </div>
          <div class="form-group">
            <label for="qty_stok" class="col-form-label">Qty Stok</label>
            <input type="number" class="form-control" id="qty_stok" name="qty_stok" placeholder="Masukkan Stok" required>
          </div>

          <div class="form-group">
            <label for="harga_pinjam" class="col-form-label">Harga Pinjam</label>
            <input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" placeholder="Masukkan Harga Pinjam" required>
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
            $isbn = $_POST['isbn'];
            $judul = $_POST['judul'];
            $tahun = $_POST['tahun'];
            $id_penerbit = $_POST['penerbit'];
            $id_pengarang = $_POST['pengarang'];
            $id_katalog = $_POST['katalog'];
            $qty_stok = $_POST['qty_stok'];
            $harga_pinjam = $_POST['harga_pinjam'];
            
            include_once("connect.php");

            $result = mysqli_query($mysqli, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
            
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
            <div class="text-white bg-danger text-center"><?= $buku_data['isbn'] ?> - <?= $buku_data['judul'] ?></div>
          
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
            $isbn = $_POST['id'];
            
            include_once("connect.php");

        $result = mysqli_query($mysqli, "DELETE FROM buku WHERE isbn='$isbn'");
            
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
            <label for="isbn" class="col-form-label">No.ISBN</label>
            <input type="text" class="form-control" id="isbn" name="ubah_isbn" placeholder="Masukkan No ISBN" value="<?= $buku_data['isbn'];?>" readonly required>
          </div>
          <div class="form-group">
            <label for="judul" class="col-form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="ubah_judul" placeholder="Masukkan Nama Judul" value="<?= $buku_data['judul']?>" required>
          </div>
          <div class="form-group">
            <label for="tahun" class="col-form-label">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="ubah_tahun" placeholder="Masukkan Tahun" value="<?= $buku_data['tahun'];?>" required>
          </div>
          <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <select class="form-control" id="penerbit" name="ubah_penerbit" required>
             <?php 
             $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
             while($penerbit_data = mysqli_fetch_array($penerbit)) { 
             $id_penerbit=$penerbit_data['id_penerbit'];    
                  echo "<option ".($buku_data['id_penerbit'] == $id_penerbit ? 'selected' : '')." value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
                }
              ?>
          </select>
          </div>
          <div class="form-group">
          <label for="pengarang">Pengarang</label>
          <select class="form-control" id="pengarang" name="ubah_pengarang" required>
             <?php 
              $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
             while($pengarang_data = mysqli_fetch_array($pengarang)) { 
             $id_pengarang=$pengarang_data['id_pengarang'];        
                  echo "<option ".($buku_data['id_pengarang'] == $id_pengarang ? 'selected' : '')." value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
               }   
            ?>
          </select>
          </div>
          <div class="form-group">
          <label for="katalog">Katalog</label>
          <select class="form-control" id="katalog" name="ubah_katalog" required>
             <?php 
               $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
                while($katalog_data = mysqli_fetch_array($katalog)) { 
                  $id_katalog=$katalog_data['id_katalog'];
                  echo "<option ".($buku_data['id_katalog'] == $id_katalog ? 'selected' : '')." value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
                }
            ?>
          </select>
          </div>
          <div class="form-group">
            <label for="qty_stok" class="col-form-label">Qty Stok</label>
            <input type="number" class="form-control" id="qty_stok" name="ubah_qty_stok" placeholder="Masukkan Stok" value="<?= $buku_data['qty_stok']?>" required>
          </div>

          <div class="form-group">
            <label for="harga_pinjam" class="col-form-label">Harga Pinjam</label>
            <input type="number" class="form-control" id="harga_pinjam" name="ubah_harga_pinjam" placeholder="Masukkan Harga Pinjam" value="<?= $buku_data['harga_pinjam']?>" required>
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
            $isbn = $_POST['ubah_isbn'];
            $ubah_judul = $_POST['ubah_judul'];
            $ubah_tahun = $_POST['ubah_tahun'];
            $ubah_id_penerbit = $_POST['ubah_penerbit'];
            $ubah_id_pengarang = $_POST['ubah_pengarang'];
            $ubah_id_katalog = $_POST['ubah_katalog'];
            $ubah_qty_stok = $_POST['ubah_qty_stok'];
            $ubah_harga_pinjam = $_POST['ubah_harga_pinjam'];
            
            include_once("connect.php");

            $result = mysqli_query($mysqli, "UPDATE buku SET judul = '$ubah_judul', tahun = '$ubah_tahun', id_penerbit = '$ubah_id_penerbit', id_pengarang = '$ubah_id_pengarang', id_katalog = '$ubah_id_katalog', qty_stok = '$ubah_qty_stok', harga_pinjam = '$ubah_harga_pinjam' WHERE isbn = '$isbn'");
            
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