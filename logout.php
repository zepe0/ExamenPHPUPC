<?php
if (isset($_POST["logout"])) {
    session_start();
    $_SESSION["login"] = 0;
    session_destroy();
    header("Location:index.php");


}