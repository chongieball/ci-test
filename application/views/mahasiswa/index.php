<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Selamat Datang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
</head>
<body>
    <?php if ($this->session->flashdata('message')) : ?>
        <?= $this->session->flashdata('message') ?>
    <?php endif; ?>
    <a href="<?= base_url().'mahasiswa/new' ?>">
        <button type="button">Create</button>
    </a>
	<table id="mhs" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Action</th>
            </tr>    
        </thead>
        <tbody>
        <?php foreach ($data as $data): ?>
            <tr>
                <td>
                    <a href="<?php echo 'mahasiswa/detail/'.$data["nim"];?>"><?= $data['nim'] ?></a>
                </td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['prodi_name'] ?></td>
                <td>
                    <a href="<?= 'mahasiswa/edit/'.$data['nim']; ?>">Edit</a>
                    <a href="<?= 'mahasiswa/delete/'.$data['nim']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
        $('#mhs').DataTable( {

    } );
} );		
</script>
</html>