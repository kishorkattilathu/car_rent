<?php

session_start();

echo "<script>alert('Are You Sure? You Want to logout..')</script>";
session_destroy();
 echo "<script>window.location.href='index.php'</script>";
//header('location:index.php');
exit();
?>
 

