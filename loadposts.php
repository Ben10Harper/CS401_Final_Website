<?php
$fileSystemIterator = new FilesystemIterator('posts');
$entries = array();
foreach ($fileSystemIterator as $fileInfo) {
    echo($fileInfo->getFilename());
    $entries[] = $fileInfo->getFilename();
}
rsort($entries);
foreach ($entries as $file) {
    $currFile = fopen("posts/".$file, "r") or die("unable to open file!");
    $contents = fread($currFile, filesize("posts/".$file));
    fclose($currFile);
    $split = explode("<br>", $contents);
    $title = $split[0];
    $body = $split[1];
    echo "<br>
    <form id='edit' action='editpostform.php' method = 'get'>
        <input type='text' class='read-only' id='title' name='title' autocomplete='off' value='$title' readonly>
        <textarea class='read-only' id='body' name='body' readonly>$body</textarea>
        <input type='text' class='file-name' id='postfile' name='postfile' value='posts/$file' readonly><br>
        <input type='submit' name='editButton' class='editButton' value='Edit post!'/>
    </form>";
}
?>