<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Connect Database</title>
</head>
<style type="text/css">
	*{
		
		font-family:'times new roman', serif;
	}


	.header	{
		background:green;
		color:white;
		height:50px;
		
	}


	div h2{
		text-align:center;
		line-height: 50px;
		;
	}
	ol li{
		font-size:20px;
		line-height: 100px;
		font-weight:bolder;
	}

	.container{
		width:90%;
		margin: 30px auto;
		padding:5px;
		box-sizing: border-box;
		display: flex;
		flex-wrap: wrap;
	}
	.container .box{
		width:200px;
		height: 120px;
		background-color: blue;
		margin:2px;
		padding: 9px;
	}
	.container .box span{ 
		color:white;
		line-height: 30px;
	}
</style>
<body>
<?php 
$server="localhost";		
$database="perpus";		
$username="root";		
$pass="";

$koneksi= mysqli_connect($server,$username,$pass,$database);

if($koneksi==true):
	$tampil="berhasil tersambung dengan database";
else:
	$tampil="maaf sambungan database terputus";
endif;

?>
<div class="header">
<h2>KONEKSI DATABASE</h2>
</div>

<ol type="1">
	<li>Mengkoneksikan ke dalam database</li>
		<dl>
			<?php 
				$sisi=9;
			?>
			<dt>
				<?php 
				 echo "
				 	Server = $server<br> 
				 	Username = $username<br> 
				 	Database = $database<br> 
				 	Password = $pass<br> 
				 "
				?>
			</dt>
			<dd><?=  "Koneksi = $tampil";?></dd>
			<hr width="90%" size="5" color="blue" align="left">
			<dt>Tampilkan Data Anggota</dt>
			<dd>
				<div class="container">
				<?php 
					$sql="SELECT nama, email, telp, alamat FROM anggota";
					$result=$koneksi->query($sql);

					if($result->num_rows > 0):

						while($row= $result->fetch_assoc()):
					?>
						
							
								<div class="box">
									<span>
										Nama : <?= $row['nama'];?><br>
									</span>
									<span>
										Email : <?= $row['email'];?><br>
									</span>
									<span>
										No.Tel : <?= $row['telp'];?><br>
									</span>
									<span>
										Alamat : <?= $row['alamat'];?><br>
									</span>
								</div>
							

							

					<?php

						endwhile;

					endif;

				?>
				</div>
			</dd>
			<dd>
				
			</dd>
			
			</dd>
		</dl>
</body>
</html>