<?php
function tampilkan_data($data)
{
    echo "<b>Nama saya $data </b><br><br>";
}
tampilkan_data('Dahlia Purba');
?>




<?php
    function Persegi($s=5)
    {
        echo " <center><b>Rumus Bangun Datar</b></center> <br><br>";

        echo "<b>Rumus Persegi</b><br><br>";
        $c =$s*$s;
        echo "Luas = s x s <br><br>";
        echo "Luas  = $s * $s = $c<br><br>";
        
        $K=$s+$s+$s+$s;
        echo "Keliling = 4 x s <br><br>";
        echo "Keliling $s + $s + $s + $s = $K<br>";
        echo "<hr><br><br>";
    }
    Persegi();
?>
<?php
    function Persegi_Panjang($p,$l,$k)
    {
        echo "<b>Rumus Persegi Panjang</b><br><br>";

            $L=$p * $l;
            echo "Luas = Panjang x Lebar<br><br>";
            echo "Luas =$p * $l = $L<br><br>";

            $K=$k * ($p+$l);
            echo "Keliling = 2 x (Panjang + Lebar)<br><br>";
            echo " Keliling = $k * ($p + $l) = $K<br>";
            echo "<hr><br><br>";
    }
    Persegi_Panjang(10,4,2);
?>
<?php
    function Segitiga($l,$a,$b,$t,$c)
    {
        echo"<b>Rumus Segitiga</b><br><br>";

        $L=$l*$a*$t;
        echo "Luas = 1/2 x a x t<br><br>";
        echo "Luas = $l* $a * $t = $L<br><br>";

        $K=$a+$b+$c;
        echo "Keliling = a + b + c<br><br>";
        echo "Keliling = $a + $b + $c = $L<br>";
        echo "<hr><br><br>";
    }
    Segitiga(1/2,4,6,20,15);
?>
<?php
    function Belah_ketupat($l,$d1,$d2,$s,$k)
    {
        echo"<b>Rumus Belah Ketupat</b><br><br>";
    
        $L=$l * $d1 * $d2;
        echo "Luas = 1/2 x d1 x d2<br><br>";
        echo " Luas = $l * $d1 * $d2 = $L<br><br>";

        $K=$s*$k;
        echo"Keliling = S x 4<br><br>";
        echo"Keliling = $s * $k = $K<br>"; 
        echo"<hr><br><br>";
    }
    Belah_ketupat(1/2,6,8,10,4) 
?>
<?php
    function Jajar_Genjang($a,$t,$b,$k)
    {
        echo"<b>Rumus Jajar Genjang</b><br><br>";
        
        $L=$a*$t;
        echo "Luas = Alas x Tinggi<br><br>";
        echo "Luas = $a * $t = $L <br><br>";
        echo "Keliling = 2 x (a+b)<br><br>";

        $K= $k * ($a + $b);
        echo "Keliling =  $k * ($a + $b) = $K<br>";
        echo"<hr><br><br>";
    }
    Jajar_Genjang(5,8,9,2)
?>