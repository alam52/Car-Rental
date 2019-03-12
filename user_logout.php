<?php
#logout code
session_start();
session_destroy();
header('location:nav.php?loggedout');
?>
