<?php
session_start();

function logout() {
    session_destroy();
}

logout();
header("Location: index.php?logout=true");
