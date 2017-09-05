<center>
	<form action="<?= base_url().'mahasiswa/insert' ?>" method="post">
		<table>
			<tr>
				<td>Nim :</td>
				<td>
					<input type="text" name="nim" placeholder="Nim">
				</td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td>
					<input type="text" name="name" placeholder="Nama">
				</td>
			</tr>
			<tr>
				<td>
					Prodi :
				</td>
				<td>
					<select name="prodi_id">
						<?php foreach ($prodi as $prodi) : ?>
							<option value="<?= $prodi['id'] ?>"><?= $prodi['name'] ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<?= anchor('mahasiswa', 'Kembali'); ?>
				</td>
				<td>
					<?= form_submit('submit', 'Create'); ?>
				</td>
			</tr>
		</table>
	</form>
</center>