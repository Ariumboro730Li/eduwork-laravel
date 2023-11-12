<?php 
$array =array(
    array(
        'nama' => "Melati",
        'umur' => 29,
        'kelas'=> "Laravel"
    ),
    array(
        'nama' => "Angrek",
        'umur' => 20,
        'kelas'=> "UX/IU Desainer", 
    ),
    array(
        'nama' => "Desi",
        'umur' => 30,
        'kelas' => "Marketing",
    ),
);

    foreach ($array as $key => $value){
        echo "Nama : ",$value['nama'];
        echo "<br>";
        echo "Umur : ",$value['umur'];
        echo "<br>";
        echo "Kelas : ",$value['kelas'];
        echo "<br><br>";
    }
    echo "<br>";
    

?>