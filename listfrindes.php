<form method="POST"><input type="text" list="friden" name="search"> <button><i
            class="fa-solid fa-magnifying-glass"></i></button></form>
<div>
    <datalist id="friden">
        <?php

        if (isset($_SESSION["fridens"])) {
            foreach ($_SESSION["fridens"] as $friden) {

                echo "<div> <option value='" . $friden["nom"] . " " . $friden["cognom"] . "'> </div> ";


            }
            ?>
        </datalist>

        <ul class="Listfriden">
            <?php
            if (!isset($_POST["search"])) {

                foreach ($_SESSION["fridens"] as $friden) {

                    echo "<li class='cardfriden'>
           
            <img src='img/" . $friden['img'] . "' class='imgfriden'>
            <h2>" . $friden['nom'] . "</h2>
            <p >" . $friden['cognom'] . "   </p>
            
      
        </li>";
                }
            } else {
                $nom = explode(" ", $_POST["search"]);


                foreach ($_SESSION["fridens"] as $friden) {

                    if (stripos(strtolower($friden['nom']), strtolower($nom[0])) !== false) {
                        echo "<li class='cardfriden'>
               
                            <img src='img/" . $friden['img'] . "' class='imgfriden'>
                            <h2>" . $friden['nom'] . "</h2>
                            <p >" . $friden['cognom'] . "   </p>
                            
                      
                        </li>";
                    }

                }
            }
            ;
        }


        ?>
    </ul>

    <div>
        <h3>mis amigos</h3>
        <?php
        foreach ($_SESSION["USER"] as $usuario) {
            if ($usuario['username'] === $_SESSION['user']) {
                foreach ($usuario['amics'] as $amigo) {
                    echo "<li class='cardfriden'>
                        <img src='img/" . $amigo['img'] . "' class='imgfriden'> 
                        <h2>" . $amigo['nom'] . "</h2>
                    </li>";
                }
            }
        }

        ?>

        <div>
            <h3>Sugerencias</h3>
            <?php
            if (isset($_SESSION["USER"]) && isset($_SESSION["fridens"])) {
                $userAmigos = [];
                foreach ($_SESSION["USER"] as $usuario) {
                    if ($usuario['username'] === $_SESSION['user']) {
                        $userAmigos = array_map(function ($amigo) {
                            return strtolower($amigo['nom']);
                        }, $usuario['amics']);
                        break;
                    }
                }

                foreach ($_SESSION["fridens"] as $friden) {
                    $nombre_friden = strtolower($friden['nom']);

                    if (!in_array($nombre_friden, $userAmigos)) {
                        echo "<li class='cardfriden'>
                    <img src='img/" . $friden['img'] . "' class='imgfriden'> 
                    <h2>" . $friden['nom'] . "</h2>
                </li>";
                    }
                }
            }
            ?>
        </div>

    </div>

</div>