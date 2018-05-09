<?php
session_start();
// switch om de specifieke paginaproperties in te stellen
    switch ($titel) {
        case "index":
            $homebutton = "";
            if (!$_SESSION["login"])
            $loginbutton = "<a href='paginas/login.php'> <h1> Login </h1> </a>";

            break;
        case "login":
            $homebutton = "<a href='../index.php'> <h1> Home </h1> </a>";
            $loginbutton = "";

            break;
    }

    // titel van de pagina instellen
echo str_replace('<!--TITLE-->', $titel, $pageContents);
?>

<header>
    <h1><?php echo $titel; ?></h1>
    <?php
    echo $homebutton;
    echo $loginbutton;
    ?>
</header>
