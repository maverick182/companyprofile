<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>email</th>
			<th>hp</th>
			<th>pesan</th>
		</tr>
		<?php foreach($formulir as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->phone ?></td>
			<td><?php echo $u->pesan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>