<?php
// Starting session
session_start();
 
// Destroying session
session_destroy();
setcookie('database','',time()-100);
header("Location: ../ok/index.html");
?>