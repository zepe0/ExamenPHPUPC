<div class="sidebar">
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
                    <div class='cardsygerencias'>
                        <img src='img/" . $friden['img'] . "' class='imgfriden'> 
                        <h2>" . $friden['nom'] . "<strong>" . "  " . $friden['cognom'] . "</strong></h2>
                        
                    </div>
                </li>
                ";
            }
        }
    }
    ?>
</div>