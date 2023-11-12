<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Belajar PHP" ?></title>
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
            echo "<hr> <br>";


            //Mencari Rumus Bangun Datar

            echo "<b>Rumus Persegi</b><br><br>";
            $s = 5;
            $c =$s*$s;
            echo "Luas = s x s <br> <br>";
            echo "Luas  = $s * $s = $c<br><br>";
            $K=$s+$s+$s+$s;
            echo "Keliling = 4 x s <br><br>";
            echo "Keliling $s + $s + $s + $s = $K<br>";
            echo "<hr><br><br>";

            echo "<b>Rumus Persegi Panjang</b><br><br>";
            $p=10;
            $l=4;
            $k=2;
            $L=$p * $l;
            echo "Luas = Panjang x Lebar<br><br>";
            echo "Luas =$p * $l = $L<br><br>";
            $K=$k * ($p+$l);
            echo "Keliling = 2 x (Panjang + Lebar)<br><br>";
            echo " Keliling = $k * ($p + $l) = $K<br>";
            echo "<hr><br><br>";

            echo"<b>Rumus Segitiga</b><br><br>";
            $l=0.5;
            $a=4;
            $b=6;
            $t=20;
            $c=15;
            $L=$l*$a*$t;
            echo "Luas = 1/2 x a x t<br><br>";
            echo "Luas = $l* $a * $t= $L<br><br>";
            $K=$a+$b+$c;
            echo "Keliling = a + b + c<br><br>";
            echo "Keliling = $a+ $b+ $c = $L<br>";
            echo "<hr><br><br>";

            echo"<b>Rumus Belah Ketupat</b><br><br>";
            $l=0.5;  
            $d1=6;
            $d2=8;
            $s=10;
            $k=4;
            $L=$l * $d1 * $d2;
            echo "Luas = 1/2 x d1 x d2<br><br>";
            echo " Luas = $l * $d1 * $d2 = $L<br><br>";
            $K=$s*$k;
            echo"Keliling = S x 4<br><br>";
            echo"Keliling =$s * $k= $K<br>"; 
            echo"<hr><br><br>";
            
            echo"<b>Rumus Jajar Genjang</b><br><br>";
            $a=5;
            $t=8;
            $b=9;
            $k=2;
            $L=$a*$t;
            echo "Luas = Alas x Tinggi<br><br>";
            echo "Luas = $a * $t = $L <br><br>";
            echo "Keliling = 2 x (a+b)<br><br>";
            $K= $k * ($a + $b);
            echo "Keliling =  $k * ($a + $b) = $K<br>";
            echo"<hr><br><br>";
            
        ?>
    </body>
</html>