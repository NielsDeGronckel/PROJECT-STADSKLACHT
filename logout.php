<?php
session_start();
session_unset();
session_destroy();
header("Location: loginForm?message=You have been logged out.");
exit();

?>