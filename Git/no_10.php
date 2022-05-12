<?
//Buatlah fungsi untuk mengecek tahun kabisat
//input : 2021
//output : 2021 bukan tahun kabisat

//input : 2024
//output : 2024 adalah tahun kabisat

<html>
    <head>
        <title> Kabisat </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </head>

    <body>
        <h1> Kabisat </h1>

        <form method="POST" name="form1">
        <table width="15%" border="0">
         <tr class="form-group"> 
            Silakan masukan tahun dibawah ini <td><input type="text" class="form-control" name="Tahun"></td> <br>
            <td><input type="submit" name="Submit" class="btn btn-primary" value="submit"></td>
         </tr>
        </table>
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