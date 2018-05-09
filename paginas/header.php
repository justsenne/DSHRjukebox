<?php
switch ($titel) {
    case "index":
        echo str_replace ('<!--TITLE-->', $titel, $pageContents);
        break;
    case "login":
        echo str_replace ('<!--TITLE-->', $titel, $pageContents);;
        break;
    case "register":
        echo str_replace ('<!--TITLE-->', $titel, $pageContents);;
        break;
    default:
        ;
}
?>

<header>
    <h1><?php echo $titel; ?></h1>
</header>
