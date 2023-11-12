<?php
function tampilkan_data($data)
{
    echo "<b>Nama saya $data </b><br><br>";
}
tampilkan_data('Dahlia Purba');
?>


<?php
    function Kubus($l, $s)
    {
        echo " <center><b>Rumus Bangun Ruang</b></center> <br><br>";

        echo "<b>Rumus Kubus</b><br><br>";

        $L= $l *($s * $s);
        echo" Luas = 6 x (s x s)<br><br>";
        echo "Luas = $l *($s * $s) = $L<br><br>";

        $V= $s * $s * $s ;
        echo "Volume = s x s x s<br><br>";
        echo "Volume = $s * $s * $s = $V";
        echo "<hr><br><br>";
    }
    Kubus(5,10);
?>
<?php
    function Balok($l,$h,$p,$t)
    {
        echo"<b>Rumus Balok</b><br><br>";
        
        $L= $h * (($p * $l) + ($l * $t) + ($p*$t));
        echo"Luas = 2 x (pl + lt + pt)<br><br>";
        echo "Luas= $h * (($p * $l) + ($l * $t) + ($p * $t)) = $L <br><br>";
        
        $V= $p * $l * $t;
        echo "Volume = Panjang x Lebar x Tinggi <br><br>";
        echo "Volume = $p * $l * $t = $V<br>";
        echo "<hr><br><br>";
    }
    Balok(10,2,15,20);
?>
<?php
    function Kerucut($phi,$r,$s,$t,$v)
    {
        echo"<b>Rumus Kerucut</b><br><br>";
        
        $L = ($phi * ($r*$r)) + ($phi * $r * $s);
        echo "Luas = (phi x r^2) + (phi x r x s )<br><br>";
        echo "Luas = ($phi * ($r*$r)) + ($phi * $r * $s) = $L<br><br>";
        
        $V = $v * $phi * $r * $r * $t;
        echo"Volume = 1/3 x Phi x r x r x t <br><br>";
        echo " Volume = $v * $phi * $r * $r * $t = $V <br>";
        echo "<hr><br><br>";
    }
        Kerucut(22/7,6,7,8,1/3)
?>
<?php
    function Tabung($phi,$l,$la,$ka,$t,$r)
    {
        echo "<b>Rumus Tabung </b><br><br>";

        $L= ($l * $la) + ( $ka * $t);
        echo "Luas = (2 x Luas Alas) + (Keliling Alas x Tinggi)<br><br>";
        echo "Luas = ($l * $la) + ( $ka * $t) = $L<br><br>";

        $V=$phi * $r * $r *$t;
        echo "Volume = Phi x r x r x t <br><br>";
        echo" Volume = $phi * $r * $r *$t = $V <br>";
        echo "<hr><br><br>";
    }
        Tabung(22/7,2,20,30,7,8)
?>
<?php
    function Bola($phi,$r,$l,$v)
    {
        echo "<b>Rumus Bola</b><br><br>";
        
        $L= $l * $phi * $r * $r;
        echo "Luas = 4 x Phi x r x r <br><br>";
        echo "Luas = $l * $phi * $r * $r = $L <br><br>";

        $V= $v * $phi * $r * $r * $r;
        echo "Luas = 4/3 x Phi x r x r x r <br><br>";
        echo "Luas = $v * $phi * $r * $r * $r = $V <br><br>";
    }
        Bola(3.16,8,4,4/3)
?>
