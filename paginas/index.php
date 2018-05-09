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