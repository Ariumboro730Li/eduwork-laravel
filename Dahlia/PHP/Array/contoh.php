<!DOCTYPE html>
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