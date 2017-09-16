<?php
ob_start()
try:
passthru("python kernel.py")
or die("Error with kernel.")
$output = ob_get_clean()
?>
