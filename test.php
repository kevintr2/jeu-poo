<?php
require_once "class/Jeu.php";

session_start();

$jeu = new Jeu();

// $jeu = unserialize($_SESSION["jeu"]);

$_SESSION["jeu"] = serialize($jeu);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Quel personnage choisissez vous ?</h1>
<?php
echo $jeu->listePersonnage();


 ?>
</body>
</html>
