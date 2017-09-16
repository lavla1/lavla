<?php
$res = scandir('public/');
foreach ($res as $r) {
  if (!$res == "nte.txt") {
    $nte = scandir($r)
    foreach ($nte as $n) {
      if ($n == "nte.txt") {
        ob_start();
        passthru('python $n');
        $output = ob_get_clean();
      }
    }
  }
}
?>
