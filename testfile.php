<?php
$files=fopen("readme.txt","a+");
 fwrite($files,"fuck man");
 $txt= fread($files,"readme.txt");
echo($txt);
?>