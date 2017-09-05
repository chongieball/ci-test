<center>
	<form action="<?= base_url().'mahasiswa/update/'.$data[0]['nim'] ?>" method="post">
		<table>
			<tr>
				<td>Nim :</td>
				<td>
					<input type="text" name="nim" placeholder="Nim" value="<?= $data[0]['nim'] ?>">
				</td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td>
					<input type="text" name="name" placeholder="Nama" value="<?= $data[0]['name']?>">
				</td>
			</tr>
			<tr>
				<td>
					<?= anchor('mahasiswa', 'Kembali'); ?>
				</td>
				<td>
					<?= form_submit('submit', 'Update'); ?>
				</td>
			</tr>
		</table>
	</form>
</center>