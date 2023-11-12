<!DOCTYPE html>

<html>
    <head>
        <title>Cara Menambah Baris Baru pada Table Menggunakan Javascript </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<body>
        
        Nama Lengkap: <input type="text" name="nama" id="nama" /><br/><br/>
        Paket Kursus: <input type="text" name="paket" id="paket" /><br/><br/>
        Waktu Kursus:  <input type="text" name="lama" id="lama" /><br/><br/>
        <button onclick="tambah();">Tambah Baris</button><br/><br/>

    <form>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama Murid</th>
                    <th>Paket Kursus</th>
                    <th>Waktu Kursus(Bulan)</th>
                </tr>
                <?php  for ($no = 1, $i=0, $a=11; $i+=1, $a-=1  ; $i>=10, $a>=11)
                {?>
                

                    <tr>
                        <td><?php echo "$no";?> </td>
                    </tr>
                
                <?php $no++; } ?>

                
            </table>
    </form>
       
        	
 <script>
            
            function tambah()
            {
                // untuk ambil nilai pada input
                var nama = document.getElementById('nama').value;
                 var paket = document.getElementById('paket').value;
                  var lama = document.getElementById('lama').value;
                  
                  
                  // 0 = baris awal pada tabel
                  var table = document.getElementsByTagName('table')[0];
                  
                  // tambah baris kosong pada tabel
                  // 0 = dihitung dari atas 
                  // table.rows.length = menambahkan pada akhir baris
                  // table.rows.length/2 = menambahkan data pada baris tengah tabel , urutan baris ke 2 
                  var newRow = table.insertRow(table.rows.length/2);
                  
                  // tambah cell pada baris baru
                  var cell1 = newRow.insertCell(0);
                  var cell2 = newRow.insertCell(1);
                  var cell3 = newRow.insertCell(2);
                  
                  // tambah nilai ke dalam cell
                  cell1.innerHTML = nama;
                  cell2.innerHTML = paket;
                  cell3.innerHTML = lama;
            }
            
        </script>
 
    </body>
 
</html>
Jika sudah sahabat b

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggabungan IF else dan Array</title>
    <style>
    .Data{
        width: 100%;
        height: 50px;
        background-color: orange;
        margin-top: 20px;
        margin-bottom: 50px;
    }
    .Data p{
        font-weight: bold;
        font-size:16pt;
        padding-top: 15px;
        margin-left:50px;
    }
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 50%;
        margin-left: 25%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: white;
        color: black;
    }
</style> 

</head>
<body>
    <div class="Data">
        <p>Daftar Nilai</p>
    </div>
    <table id="customers">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php
        $json_data = file_get_contents('data.json');
        $data = json_decode($json_data, true);
        foreach ($data as $key => $value) { ?>
            <tr>
                <!-- no -->
                <td><?= ($key + 1) ?></td>
                <td><?= $value['nama']; ?></td>
                <td><?= $value['tanggal_lahir']; ?></td>
                <td><?php echo date("Y") - date("Y", strtotime($value['tanggal_lahir'])); ?></td>
                <td><?= $value['alamat']; ?></td>
                <td><?= $value['kelas']; ?></td>
                <td><?= $value['nilai']; ?></td>
                <td><?php
                    if ($value['nilai'] >= 90 && $value['nilai'] <= 100) {
                        echo "A";
                    } else if ($value['nilai'] >= 80 && $value['nilai'] < 90) {
                        echo "B";
                    } else if ($value['nilai'] >= 70 && $value['nilai'] < 80) {
                        echo "C";
                    } else {
                        echo "D";
                    }
                    ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
