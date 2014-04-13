<?php
header('Content-type: application/pn');
header ('Content-Disposition: attachment; filename='.$_GET['path']); 
readfile($_GET['path']); 



?>