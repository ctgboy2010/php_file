
<?php
$filename="test.txt";
if (touch($filename)) {
    echo $filename . ' modification time has been changed to present time';
} else {
    echo 'Sorry, could not change modification time of ' . $filename;
}
?>

<?php
/*echo touch("test.txt");
*/?>