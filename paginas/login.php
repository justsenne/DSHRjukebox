<?php
$titel = "login";
ob_start ();
?>
<!DOCTYPE html>
<html>

<head>

    <title><!--TITLE--></title>

    <?php
    include("include.php");
    ?>
</head>

<body>
<?php
$pageContents = ob_get_contents ();
ob_end_clean ();
include_once("header.php");
?>

<main>
    <h1>body</h1>
    <form>
<
    </form>
</main>

</body>

</html>
