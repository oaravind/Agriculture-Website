<?php
 session_start();
unset($_SESSION['id']);
header('Location:index.html');

unset($_SESSION['admin']);
 header('Location:index.html');
 
?>