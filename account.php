<?php
require_once 'inlogCheck.php';

session_start();

?>
<?php include("assets/nav.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.scss">
    <title>Document</title>
</head>
<body>
<?php
include("Classes/Gebruiker.php");
?><div class="readContent">
    <div class="readCreate">
        <div class="readCenter">
            <?php
            $klacht1 = new Gebruiker();
            $klacht1->readGebruiker($_SESSION["gebruikerId"]);
            ?>
        </div>

    </div>
</div>

</body>
</html>