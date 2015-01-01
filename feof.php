<?php
$file = fopen("test.txt", "r");

//Output a line of the file until the end is reached
while(! feof($file))
{
    echo fgets($file). "<br />";
}

fclose($file);
?>

<!--//output (http://www.w3schools.com/php/func_filesystem_feof.asp)
Hello, this is a test file.
There are three lines here.
This is the last line. -->