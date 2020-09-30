<div class="container">
	

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		
		<?php echo form_open("mahasiswa/ruang"); ?>
		
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 500px; padding: -20px; margin: 200px auto;}
    </style>
</head>
<body>
    <div class="wrapper">
        <p align="center"><span style="font-family:comic sans ms,cursive;"><strong><span style="font-size:24px;">WELCOME TO ADMIN PANEL</span></strong></span></p>
        <h2 style="text-align: center;">Masuk Bero</h2>
       <p>Masukin info login yang sesuai bero.</p>
        <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">User</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="user" value="<?php echo set_value('user'); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
				</div>
			</div>
			<div class="pt-3">
				<input class="btn btn-info" type="submit" name="submit" value="Login">
				<a href="<?php echo base_url(); ?>"><input class="btn btn-danger" type="button" value="Batal"></a>
			</div>
		
		
			
		<?php echo form_close(); ?>
</div>
    </div>    
</body>
</html>
