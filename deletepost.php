<?php
    $filename = $_GET['postfile'];
    unlink($filename);
    header('Location: index.php');
    exit;
?>