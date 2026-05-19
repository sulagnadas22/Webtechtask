<?php
session_start();

// session destroy
session_destroy();


header("Location: login.php");
exit();
?>