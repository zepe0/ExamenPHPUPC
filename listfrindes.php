<div class="colum">
    <form method="POST" class="amicsserc"><input type="text" list="friden" name="search" placeholder="Introduce nombre">
        <button class="serch"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>


    <datalist id="friden">
        <?php

        if (isset($_SESSION["fridens"])) {
            foreach ($_SESSION["fridens"] as $friden) {

                echo "<div> <option value='" . $friden["nom"] . " " . $friden["cognom"] . "'> </div> ";


            }
            ?>
        </datalist>
    </div>
    <section class="amicsviwe">

        <div class="ancho">
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
                        echo "<li class='cardsygerencias mt-10 ancho'>
                   
                        <img src='img/" . $friden['img'] . "' class='imgfriden'>
                        <h2>" . $friden['nom'] . "</h2>
                   
                </li>";
                    }
                }
            }
            ?>
        </div>
        <ul class="Listamics justyfi-center scrolAmics">
            <?php
            if (!isset($_POST["search"])) {

                foreach ($_SESSION["fridens"] as $friden) {

                    echo "<li class='cardsygerencias mt-10 w-90 '>
               
            <img src='img/" . $friden['img'] . "' class='imgfriden'>
            <h2>" . $friden['nom'] . "</h2>
            <p >" . $friden['cognom'] . "   </p>
       
            
      
        </li>";
                }
            } else {
                $nom = explode(" ", $_POST["search"]);


                foreach ($_SESSION["fridens"] as $friden) {

                    if (stripos(strtolower($friden['nom']), strtolower($nom[0])) !== false) {
                        echo "<li class='cardsygerencias mt-10 w-90 '>
               
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

    <div class="ancho">
        <h3>Mis amigos</h3>
        <?php
        foreach ($_SESSION["USER"] as $usuario) {
            if ($usuario['username'] === $_SESSION['user']) {
                foreach ($usuario['amics'] as $amigo) {
                    echo "<li class='cardsygerencias mt-10 ancho'>
                        <img src='img/" . $amigo['img'] . "' class='imgfriden'> 
                        <h2>" . $amigo['nom'] . "</h2>
                    </li>";
                }
            }
        }

        ?>


</section>

</div>