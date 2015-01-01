<?php
$file = "contacts.csv";
if (!unlink($file))
{
    echo ("Error deleting $file");
}
else
{
    echo ("Deleted $file");
}
?> 