<html>
<head>
	<title>Cara Membuat Looping For di dalam Tabel</title>
</head>
<style>
	table{width:300px; text-align:center; margin:auto;}
	table th { background-color: aqua; }
	h2 {text-align:center; font-style:italic; font-weight:bold;}
</style>
<body> 
    <br><br>
<form>
		<table border="1" cellspacing="0">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
 
		<?php  for ($no = 1, $i=0, $a=11; $i+=1, $a-=1  ; $i>=10, $a>=11) 
        { ?>
 
			<tr>
				<td> <?php echo $no; ?></td>
				<td><?php echo "Nama - $i"; ?></td>
				<td><?php echo "Kelas ke - $a"; ?></td>
			</tr>
 
		<?php $no++; } ?>
 
		</table>
	</form>
</body>
</html>
