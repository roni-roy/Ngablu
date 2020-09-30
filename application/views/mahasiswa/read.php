<div class="container">
	<h1 class="mb-5" >Data mahasiswa</h1>
		<hr class="mb-2">

		<a class="btn btn-info mb-5" href='<?php echo base_url("mahasiswa/tambah"); ?>'>Tambah Data</a>

		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nim</th>
					<th>Nama</th>
					<th>Jurusan</th>
					<th>Jenis Kelamin</th>
					<th>Telepon</th>
					<th>Alamat</th>
					<th class="text-center" >Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if( ! empty($mahasiswa)){ // Jika data mahasiswa tidak sama dengan kosong, artinya jika data mahasiswa ada
				foreach($mahasiswa as $data){
			?>
				<tr>
					<td><?=$data->nim ?></td>
					<td><?=$data->nama ?></td>
					<td><?=$data->jurusan ?></td>
					<td><?=$data->jenis_kelamin ?></td>
					<td><?=$data->telp ?></td>
					<td><?=$data->alamat ?></td>
					<td>
						<a class="btn btn-info btn-xs" href="<?= base_url("mahasiswa/ubah/".$data->nim) ?>">Ubah</a>
						<a class="btn btn-danger btn-xs" href="<?= base_url("mahasiswa/hapus/".$data->nim) ?>">Hapus</a>
						<a class="btn btn-danger btn-xs" href="<?= base_url("mahasiswa/liat/".$data->nim) ?>">View</a>
					</td>
				</tr>
			<?php
				}
			}
			?>
			</tbody>
		</table>

</div>


