<?php
session_start();
unset($_SESSION);
session_destroy();
header('Location:loggin.php')

?>