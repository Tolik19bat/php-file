<?php

$aab = 'Мир!';
$aaa = "Привет, $aab}";

echo $aaa;


<?php

    $haystack = "/home/username/www/index.php";
    $needle = "/";
    
    $root_dir = substr($haystack, 0, strnpos($haystack, $needle, 4));
    
    echo $root_dir;
    
?>