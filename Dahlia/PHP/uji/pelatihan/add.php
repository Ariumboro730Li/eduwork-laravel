<?php
include ("connect_anggota.php");
if(isset($_POST['submit']))
{
    $id_anggota=$_POST['id_anggota'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $label=$_POST['sex'];
    $tlp=$_POST['tlp'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $tanggal=$_POST['tgl_entry'];
    $jabatan=$_POST['role'];

    $result = mysqli_query($conn, "INSERT INTO anggota(id_anggota, nama , username, password, sex, tlp, alamat, email, tgl_entry, role) 
    VALUES ('$id_anggota', '$nama', '$username', '$password', '$label', '$tlp', '$alamat', '$email', '$tanggal', '$jabatan')");

    header("location:index.php");
}
?>

<!-- 

include ("connect_anggota.php");

 $id_anggotaa = $name = $usernamee = $labela = $tlpn = $alamata = $emailErr = $tanggall = $jabatann = "";
 $id_anggota =$nama  = $username  = $label = $tlp = $alamat = $email = $tanggal = $jabatan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["id_anggota"])) {
    $id_anggotaa = "Id Anggota is required";
  } else {
    $id_anggota = test_input($_POST["id_anggota"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z][a-zA-Z0-9_]*$/",$id_anggota)) 
     {
      $id_anggotaa = "Only letters and white space allowed"; 
    }
  }

 if (empty($_POST["nama"])) 
  {
    $name = "Nama tidak boleh kosong";
  } 
  else 
  {
    $nama = test_input($_POST["nama"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
    {
    $name = "Inputan Hanya boleh huruf dan spasi"; 
    }
  }


if (empty($_POST["username"])) {
    $usernamee = "Username tak boleh kosong";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) 
     {
      $usernamee = "Hanya huruf dan angka"; 
    }
}

  //  if (empty($_POST['password'])) {
  //   $passwordd = "Tidak boleh kosong";
  // } else {
  //   $password = test_input($_POST['password']);
  //   // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
  //   if (!preg_match("/^[a-zA-Z0-9]*$/",$password))
  //    {
  //     $passwordd = "kosong"; 
  //   }
  // }


 if (empty($_POST["sex"])) 
    {
        $labela = "Gender is required";
    } 
else 
    {
        $label = test_input($_POST["sex"]);
    }


  if (empty($_POST["telp"])) 
  {
    $telpn = "Telp tidak boleh kosong";
  } 
  else 
  {
    $telp = test_input($_POST["telp"]);
 
    if(!is_numeric($telp)) 
    {
      $tlpn = 'Nomor HP hanya boleh angka';
    }
  }


 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
 

  if (empty($_POST["role"])) 
  {
    $jabatann = "Jabatan tidak boleh kosong";
  } 
  else 
  {
    $jabatan = test_input($_POST["role"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$jabatan)) 
    {
      $jabatann = "Inputan Hanya boleh huruf dan spasi"; 
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?> -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-2">
        <form method="post">
            <div class="mb-3">
                <label >ID Anggota</label>
                <input type="text" name="id_anggota" class="form-control" id="id_anggota" placeholder="id_anggota" required = "Tidak Boleh Kosong">
            </div>
            <div class="mb-3">
                <label >Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" required>
            </div>
            <div class="mb-3">
                <label >Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
            </div>
            <div class="mb-3">
                <label >Password</label>
                <input type="text" name="password" class="form-control" id="password" placeholder="password" required/>
            </div>
            <div class="mb-3">
                <label >Jenis Kelamin</label>
                <input type="text" name="sex" class="form-control" id="sex" placeholder="sex" required>
            </div>
            <div class="mb-3">
                <label >Telepon</label>
                <input type="text" name="tlp" class="form-control " id="tlp" placeholder="tlp" required>
            </div>
            <div class="mb-3">
                <label >Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat" required>
            </div>
            <div class="mb-3">
                <label >Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="email" required>
            </div>
            <div class="mb-3">
                <label >Tanggal</label>
                <input type="text" name="tgl_entry" class="form-control" id="tgl_entry" placeholder="tgl_entry" required/>
            </div>
            <div class="mb-3">
                <label >Jabatan</label>
                <input type="text" name="role" class="form-control" id ="role" placeholder ="role" required>
            </div>
            <br><br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    </body>
</html>