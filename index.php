<?php
$titel = "index";
ob_start();
?>
<!DOCTYPE html>
<html>

<head>

    <title><!--TITLE--></title>

    <?php
    include("paginas/include.php");
    ?>
</head>

<body>
<?php
$pageContents = ob_get_contents();
ob_end_clean();
include_once("paginas/header.php");
?>

<main>
    <h1>body</h1>
</main>

</body>

</html>
