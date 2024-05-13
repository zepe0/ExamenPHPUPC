<header>
    <img src="fakelogo.jpeg">
    <?php
    if (isset($_SESSION))


        $_SESSION["login"] === 1 ? print "
    <div> 
        <button class='btn-new'>    
        <a href='home.php'>Inicio</a>
        </button>
       
        
    
        <button class='btn-new'><a href='amics.php'>Amics</a></button>
    </div>
    <div class='headName'>
    <form action='logout.php' method='POST'> 
    " . $_SESSION["user"] . " 
         <button name='logout'>Logout</button>
        </form>
    </div> 
    " : ""

            ?>


    </header>