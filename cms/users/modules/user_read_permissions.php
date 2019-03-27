<?php
define('admin', 'администратор');

if($ini_array = parse_ini_file("/users/Anton2319.ini")) {
    echo($ini_array);
}
else {
    print_r("Сука! Блять!");    
}
if (file_exists("users/Anton2319.ini")) { 
echo "The file exists"; 
} else { 
echo "The file does not exist"; 
}
//print_r($ini_array);
?>