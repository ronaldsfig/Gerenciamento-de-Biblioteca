<?php
if (!$_SESSION['user']) {
    header('Location: ../index.php');
    exit();
}
if ($_SESSION['user']['perm'] !== "0") {
    header('Location: ../user/index.php');
    exit();
}
?>