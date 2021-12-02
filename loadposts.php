<?php
$fileSystemIterator = new FilesystemIterator('posts');
$entries = array();
foreach ($fileSystemIterator as $fileInfo) {
    $entries[] = $fileInfo->getFilename();
}
foreach ($entries as $file) {
    $currFile = fopen("posts/".$file, "r") or die("unable to open file!");
    $contents = fread($currFile, filesize("posts/".$file));
    fclose($currFile);
    $split = explode("<br>", $contents);
    $title = $split[0];
    $body = $split[1];
    echo "<div>
          <h2>$title</h2>
          <p>$body</p>
          </div>";
}
?>