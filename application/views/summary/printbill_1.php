<?php
echo $spath;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="'.$spath.'"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
readfile($spath);

?>
