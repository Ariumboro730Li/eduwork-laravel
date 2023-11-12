<?php


        $contoh = file_get_contents('contoh.json');
        $data = json_decode($contoh, true);
        
        foreach ($data as $key => $a){
            echo "nama : ".$a['nama'],"Kelas: ".$a['kelas'],"Tanggal Lahir : ". $a['tanggl_lahir'],"Nilai : ".$a['nilai'];
            echo "<br>";
        }


?>
