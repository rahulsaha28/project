<?php
    include "db/db.php";
    include 'controller/control.php';
    session_destroy();
    header('Location:main.php');
   
?>