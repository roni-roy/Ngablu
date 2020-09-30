<div class="container">
		<h1 class="mb-5" >Form Tambah Data Mahasiswa</h1>
		<hr class="mb-2" >

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		
		<?php echo form_open("mahasiswa/tambah"); ?>
		
		
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nim</label>
				<div class="col-sm-10">
				  <input type="text"  class="form-control" name="input_nim" value="<?php echo set_value('input_nis'); ?>" >
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="input_nama" value="<?php echo set_value('input_nama'); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
					<input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>>
					Perempuan					
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="input_jurusan" value="<?php echo set_value('input_jurusan'); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Telepon</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="input_telp" value="<?php echo set_value('input_telp'); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
				  <textarea type="text" class="form-control" name="input_alamat" ><?php echo set_value('input_alamat'); ?></textarea>
				</div>
			</div>
			<div class="pt-3">
				<input class="btn btn-info" type="submit" name="submit" value="Simpan">
				<a href="<?php echo base_url(); ?>"><input class="btn btn-danger" type="button" value="Batal"></a>
			</div>
		
		
			
		<?php echo form_close(); ?>
</div>
