<html>
    <head>
        <title> Menghitung Tahun Kabisat </title>
    </head>

    <body>
        <h1> Menghitung Tahun Kabisat </h1>

        <form method="POST" action="">
            Cek Tahun <input type="text" name="Tahun"> <br>
            <input type="submit" value="Cek">
        </form>

        <?php
            if($_POST['Tahun']%4=="0"){
           
                if($_POST['Tahun']%100=="0"){
           
                    if($_POST['Tahun']%400=="0"){
                        echo "Tahun Kabisat";
                    }
                    else{
                      echo "Bukan Tahun Kabisat";   
                    }
                }
                else{
                    echo "Tahun Kabisat";   
                  }
            }
            else{
                echo "Bukan Tahun Kabisat";
            }
        ?>
    </body>
</html>