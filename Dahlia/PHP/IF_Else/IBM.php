<html> 
    <head> 
    </head>
    <body>
    <form name="form1" method="POST">
        <table width="337" border="0">
        <tr>
        <td width="93">Nama</td>
        <td width="152"><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
        <td width="93">Tinggi</td>
        <td width="152"><input type="text" name="tinggi" id="tinggi"></td>
        </tr>
        <tr>
        <td width="93">Berat</td>
        <td width="152"><input type="text" name="berat" id="berat"></td>
        </tr>
        <td width="78"><input type="submit" name="ok" id="ok" value="Submit"></td>
        </tr>
        </table>
    </form>
    <br><br>
    <table width = "500" border="2">
      <tr>
        <td width="150" height="20"><b>Skala</b></td>
        <td width="150" height="20"><b>Kategori IBM</b></td>
      </tr>
      <tr>
        <td width="150" height="20">DIbawah 18,5 </td>
        <td width="150" height="20">Kurus</td>
      </tr>
      <tr>
        <td width="150" height="20">18,5 - 22,9</td>
        <td width="150" height="20">Ideal</td>
      </tr>
      <tr>
        <td width="150" height="20">23-29,9</td>
        <td width="150" height="20">Gemuk</td>
      </tr>
      <tr>
        <td width="150" height="20">Lebih dari 30</td>
        <td width="150" height="20">Obesitas</td>
      </tr>
    </table>
    <br><br>
    <?php
    if(isset($_POST['ok']))
    {
      $nama=$_POST['nama'];
      $tinggi =$_POST['tinggi'];
      $berat=$_POST['berat'];
      $hasil_tinggi=$tinggi/100;
      $ideal= $berat/($hasil_tinggi * $hasil_tinggi);

      echo"<br><br>Anggota yang Bernama $nama";
      echo "<br><br>TINGGI BADAN  = $tinggi cm,<br><br>";
      echo "BERAT BADAN  = $berat kg,<br><br> ";
      echo "Memiliki Skala berat badan $ideal  ";


      if ($ideal <= 18.5)
      {
        echo  " <b>Kurus</b>"; 
      }
      else if ($ideal >= 18.6 && $ideal <= 22.9 )
      {
        echo " <b>Idea</>";
      }
      else if ($ideal >= 23 && $ideal <= 29.9 )
      {
        echo " <b>Gemuk</b> "; 
      }
      else 
      {
        echo " <b>OBESITAS</b>";
      }
    }              
    ?>
    </body>
   

