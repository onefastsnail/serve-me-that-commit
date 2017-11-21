<?php 

$dirs = glob('../versions/*' , GLOB_ONLYDIR);

foreach($dirs as $dir){
    printf('<p><a href="//%s.paul.em87.io" target="_blank">%s.paul.em87.io</a></p>', basename($dir), basename($dir));
}

echo phpinfo();
