

<?php
session_start();
session_unset();
session_destroy();
header("location: \bookwebsite\pages\login\login.php ");
exit;
?>