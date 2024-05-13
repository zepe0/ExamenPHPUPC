<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.6">
    <title>Prova</title>
</head>
<?php include_once ("header.php") ?>

<body>
    <form action="" method="POST" class="register">
        <input type="text" placeholder="Usuario" name="User">
        <input type="password" placeholder="Contraseña" name="Pass">
        <div><input type="checkbox" name="Rec">Recuérdeme</div>
        <button>Enviar</button>
        <a href="Register.php">No tienes Cuenta Regístrate ➡</a>
    </form>
</body>

</html>
<?php

include_once ("bd.php");

$user = false;
$pas = false;

if (isset($_SESSION["login"]) && $_SESSION["login"] === 1 /* || (isset($_COOKIE["user"]) && isset($_COOKIE["pas"])) */)
    header("Location:home.php");


if (isset($_REQUEST["User"])) {

    if (isset($_POST["User"]) && $_POST["User"] != "") {
        foreach ($_SESSION["USER"] as $usuario) {
            if (strcasecmp($usuario['username'], $_POST["User"]) === 0) {
                $_SESSION["user"] = $_POST["User"];
                $user = true;
                break;
            }
            print ("<div class='flexcenter'><p>Usuario no registrado</p></div>");
        }
    } else {

        print ("<div class='flexcenter'><p>Inserta un usuario</p></div>");
    }

    if (isset($_POST["Pass"]) && $_POST["Pass"] != "") {
        foreach ($_SESSION["USER"] as $usuario) {
            // Verificar si el nombre de usuario coincide
            if (strcasecmp($usuario['username'], $_POST["User"]) === 0) {
                // Verificar si la contraseña coincide
                if ($_POST["Pass"] === $usuario['pass']) {
                    $_SESSION["user"] = $usuario['username'];
                    $pas = true;
                } else {
                    print ("<div class='flexcenter'><p>Contraseña Incorrecta</p></div>");
                }
            }
        }
    } else {
        print ("<div class='flexcenter'><p>Inserta una Contraseña</p></div>");
    }
    if (isset($_POST["Rec"]) && $_POST["Rec"] === "on") {

        $cookie_name_Pass = "pas";
        $cookie_name_User = "user";
        $cookie_value_Pass = $hashed_password;
        $cookie_value_User = $_POST["User"];

        setcookie($cookie_name_User, $cookie_value_User, time() + (86400 * 30), "/"); // 86400 = 1 día
        setcookie($cookie_name_Pass, $cookie_value_Pass, time() + (86400 * 30), "/");

    }
    if ($user === true && $pas === true) {

        $_SESSION["login"] = 1;
        $_SESSION["islogin"] = 0;
        header("Location:home.php");
        print "<p>" . $_SESSION["login"] . " Variable Login</p>";


    }
}


?>