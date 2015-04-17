<?php
$filename = 'cv.pdf';
$content = file_get_contents($filename);
header("Content-Disposition: inline; filename=$filename");
header("Content-type: application/pdf");
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
echo $content;?>
