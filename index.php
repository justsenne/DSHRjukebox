<?php
$titel = "index";
ob_start ();
?>
<!DOCTYPE html>
<html>

<head>
    <title><!--TITLE--></title>
</head>

<body>
<?php
$pageContents = ob_get_contents ();
ob_end_clean ();
include_once("paginas/header.php");
?>

</body>

</html>
