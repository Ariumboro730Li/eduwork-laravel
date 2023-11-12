<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" contents="Niagahoster">
    <title><?php echo "Belajar Bangun Rauang PHP" ?></title>
</head>
<body>
    <?php
    $nama = "Dahlia Purba";
    $tgl = 17;
    $bulan= "Agustus";
    $tahun = 1995;
       echo "Nama saya $nama <br><br>";
       echo "Tanggal Lahir saya $tgl-$bulan-$tahun <br><br>";
       echo "saya sedang belajar PHP<br>";
       echo "<p>Belajar PHP hingga jadi master</p>";
       echo "<hr><br><br>";    

       //Belajar Bangun Ruang

        echo "<b>Rumus Kubus</b><br><br>";
        $l=6;
        $s=5;

        $L= $l *($s * $s);
        echo" Luas = 6 x (s x s)<br><br>";
        echo "Luas = $l *($s * $s) = $L<br><br>";

        $V= $s * $s * $s ;
        echo "Volume = s x s x s<br><br>";
        echo "Volume = $s * $s * $s = $V";
        echo "<hr><br><br>";

        echo"<b>Rumus Balok</b><br><br>";
        $h=2;
        $l=10;
        $p=15;
        $t=20;

        $L= $h * (($p * $l) + ($l * $t) + ($p*$t));
        echo"Luas = 2 x (pl + lt + pt)<br><br>";
        echo "Luas= $h * (($p * $l) + ($l * $t) + ($p * $t)) = $L <br><br>";
        
        $V= $p * $l * $t;
        echo "Volume = Panjang x Lebar x Tinggi <br><br>";
        echo "Volume = $p * $l * $t = $V<br>";
        echo "<hr><br><br>";

        echo"<b>Rumus Kerucut</b><br><br>";
        $phi=3.16;
        $r=6;
        $s=7;
        $t=8;
        $v=1/3;
        
        $L = ($phi * ($r*$r)) + ($phi * $r * $s);
        echo "Luas = (phi x r^2) + (phi x r x s )<br><br>";
        echo "Luas = ($phi * ($r*$r)) + ($phi * $r * $s) = $L<br><br>";
        
        $V = $v * $phi * $r * $r * $t;
        echo"Volume = 1/3 x Phi x r x r x t <br><br>";
        echo " Volume = $v * $phi * $r * $r * $t = $V <br>";
        echo "<hr><br><br>";


        echo "<b>Rumus Tabung </b><br><br>";
        $l=2;
        $la=20;
        $ka=30;
        $t=15;
        $phi=3.16;
        $r=7;

        $L= ($l * $la) + ( $ka * $t);
        echo "Luas = (2 x Luas Alas) + (Keliling Alas x Tinggi)<br><br>";
        echo "Luas = ($l * $la) + ( $ka * $t)= $L<br><br>";

        $V=$phi * $r * $r *$t;
        echo "Volume = Phi x r x r x t <br><br>";
        echo" Volume = $phi * $r * $r *$t = $V <br>";
        echo "<hr><br><br>";

        echo "<b>Rumus Bola</b><br><br>";
        $phi=3.16;
        $r=8;
        $l=4;
        $v=4/3;

        $L= $l * $phi * $r * $r;
        echo "Luas = 4 x Phi x r x r <br><br>";
        echo "Luas = $l * $phi * $r * $r = $L <br><br>";

        $V= $v * $phi * $r * $r * $r;
        echo "Luas = 4/3 x Phi x r x r x r <br><br>";
        echo "Luas = $v * $phi * $r * $r * $r= $V <br><br>";

    ?>

</body>