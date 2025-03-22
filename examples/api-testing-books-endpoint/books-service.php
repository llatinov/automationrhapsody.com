<?php
$patternId = '/id="(.*?)"/';
$xml = file_get_contents('php://input');
preg_match($patternId, $xml, $id, PREG_OFFSET_CAPTURE, 2);
echo "Book with id=" . $id[1][0] . " has been saved.";
?>