<?php
/*echo file_exists("test.txt");
*/?>


<?php
$filename = 'test.txt';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>
