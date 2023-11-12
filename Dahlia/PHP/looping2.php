
<form name="form1" method="POST">
    <table width="337" border="0">
        <tr>
        <td width="93">Nama</td>
        <td width="152"><input type="text" name="data" id="nama"></td>
        </tr>
        <tr>
        <td width="93">Berat</td>
        <td width="152"><input type="text" name="data1" id="kelas"></td>
        </tr>
        <td width="78"><input type="submit" name="ok" id="ok" value="Submit"></td>
        </tr>
    </table>
</form>
<table width="337" border="0">
        <tr>
        <td width="93">Nama</td>
        <td width="152"><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
        <td width="93">Berat</td>
        <td width="152"><input type="text" name="kelas" id="kelas"></td>
        </tr>
</table>

<?php
if (isset($_POST['ok']))
    $nama=$_POST['data'];
    $kelas =$_POST['data1'];
    $submit=$_POST['ok'];
    $i=$_POST['nama'];
    $u=$_POST['kelas'];
    {
          for($i = 1; $i <= $nama; $i++)
        {
            echo "<br>Kelas Ke- $i <br>";
        }
    }
?>
<?php

for($u=$kelas; $u >=1; $u--)
{
    echo "<br>Nama Ke- $u<br>";
}
    
?>
echo "<table border=1>";
for($i=1; $i<=10; $i++){
      echo "<tr>";
      for($j=0; $j<=0; $j++){
            echo "<td>";
            echo $i-$j;
            echo "</td>";
      }
      echo "<td>Kelas";
}
echo "</table>";
?>