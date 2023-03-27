<?php
    $info = $_GET['info'];
    $file = fopen("datal. txt", "a");
    fwrite($file, $info."". PHP_EOL);
    fclose($file);
?>