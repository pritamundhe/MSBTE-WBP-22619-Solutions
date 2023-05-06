<?php
    session_start();
    $_SESSION['username'] = 'PritamMundhe';
    echo 'Hello, ' . $_SESSION['username'];
    session_destroy();
?>
