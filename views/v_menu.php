<div class="container">
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">NO.</th>
				<th scope="col">Kode</th>
				<th scope="col">Nama Makanan</th>
				<th scope="col">Harga</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php 
			$dataMenu = $this->session->all_data;
			$i = 1;
			foreach ($dataMenu as $data) { ?>
				<tr>
					<th scope="row"><?php echo $i++ ?></th>
					<td><?php echo $data->kd_makanan ?></td>
					<td><?php echo $data->nama_makanan ?></td>
					<td><?php echo $data->harga_makanan ?></td>
					<td><button type="button" class="btn btn-info">PESAN</button></td>
				</tr>
			<?php  } ?>
			 
		</tbody>
	</table>
</body>
</html>

</div>