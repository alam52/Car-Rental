<?php
#logout code
session_start();
session_destroy();
header('location:login.php?loggedout');
?>
