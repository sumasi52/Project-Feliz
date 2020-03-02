<?php
$filename = 'chaos.txt';
$fp = fopen($filename, 'a');
fwrite($fp,1 );//データをテキストに書き込み
fclose($fp);

header('Location: ../ChaosPages');
exit;

