<?php echo form_open("mahasiswa/login"); ?>

<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

exit;
?>
<?php echo form_close(); ?>