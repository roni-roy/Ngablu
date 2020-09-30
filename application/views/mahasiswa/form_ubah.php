<div class="container">
		<h1>Form Ubah Data Mahasiswa</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("mahasiswa/ubah/".$mahasiswa->nim); ?>
		
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nim</label>
				<div class="col-sm-10">
				  <input type="text"  class="form-control" name="input_nim" value=<?php echo set_value('input_nis', $mahasiswa->nim); ?>" >
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="input_nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki', ($mahasiswa->jenis_kelamin == "Laki-laki")? true : false); ?>> Laki-laki
					<input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan', ($mahasiswa->jenis_kelamin == "Perempuan")? true : false); ?>> Perempuan				
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="input_jurusan" value="<?php echo set_value('input_jurusan',$mahasiswa->jurusan); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Telepon</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="input_telp" value="<?php echo set_value('input_telp', $mahasiswa->telp); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
				  <textarea type="text" class="form-control" name="input_alamat" ><?php echo set_value('input_alamat', $mahasiswa->alamat); ?></textarea>
				</div>
			</div>
			<div class="pt-3">
				<input class="btn btn-info" type="submit" name="submit" value="Ubah">
				<a href="<?php echo base_url(); ?>"><input class="btn btn-danger" type="button" value="Batal"></a>
			</div>
		
		<?php echo form_close(); ?>
</div>
