<?php
    $title = $_GET['posttitle'];
    $body = $_GET['postbody'];
    $name = time();
    $file = fopen("posts/".$name.".txt", "w") or die("unable to open file!");
    fwrite($file, $title);
    fwrite($file, "\n<br>\n");
    fwrite($file, $body);
    fclose($file);
    header('Location: index.php');
    exit;
?>