<div class="sidebar">
    <h3>Mis amigos</h3>
    <?php
    foreach ($_SESSION["USER"] as $usuario) {
        if ($usuario['username'] === $_SESSION['user']) {
            foreach ($usuario['amics'] as $amigo) {
                echo "<li class='cardfriden'>
                <div class='cardsygerencias'>
                    <img src='img/" . $amigo['img'] . "' class='imgfriden'> 
                    <h2>" . $amigo['nom'] . "<strong>" . "  " . $amigo['cognom'] . "</strong></h2>
                    
                </div>
            </li>
            ";
            }
        }
    }
    ?>
</div>