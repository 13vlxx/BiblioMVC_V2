<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Content/css/main.css">
    <link rel="stylesheet" type="text/css" href="Content/css/style.css">
    <title>Index</title>
</head>

<body>
    <?php
    require_once 'Controllers/Controller.php';
    require_once 'Models/Model.php';
    require_once 'Utils/header.php';
    echo "<div class='infos'><h6> Controller : " . $_GET['controller'] . '</h6>' . "<br>";
    echo "<h6> Action : " . $_GET['action'] . '</h6> </div>' . "<br>";

    $controllers = ["home", "livre", "fournisseur", "commande"];
    $controller_default = "home";

    if (isset($_GET['controller']) and in_array($_GET['controller'], $controllers)) {
        $nom_controller = $_GET['controller'];
    } else {
        $nom_controller = $controller_default;
    }

    $nom_classe = "Controller_" . $nom_controller;
    $nom_fichier = "Controllers/" . $nom_classe . ".php";

    if (file_exists($nom_fichier)) {
        require_once($nom_fichier);
        $controller = new $nom_classe();
    } else {
        exit("Error 404 : not found");
    }
    ?>

</body>

</html>