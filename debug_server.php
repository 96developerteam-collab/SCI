<?php
echo "HTTP_HOST: " . ($_SERVER['HTTP_HOST'] ?? 'not set') . "\n";
echo "SERVER_NAME: " . ($_SERVER['SERVER_NAME'] ?? 'not set') . "\n";
echo "SERVER_PORT: " . ($_SERVER['SERVER_PORT'] ?? 'not set') . "\n";
echo "SCRIPT_NAME: " . ($_SERVER['SCRIPT_NAME'] ?? 'not set') . "\n";
?>
