<?php
$filename = $_GET['file'];
$content = file_get_contents("./piece_jointe/".$filename);
header("Content-Disposition: inline; filename=$filename");
header("Content-type: application/pdf");
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
echo $content;
?>