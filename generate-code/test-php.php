<html>
<head>
    <meta charset="UTF-8">
    <title>PHP test for osloveni</title>
</head>
<body>
    <p>PHP test for osloveni</p>
<?php
require_once("../php/osloveni.php");
echo osloveni("Petr") . "<br />";
echo osloveni("PETR") . "<br />";
echo osloveni("petr") . "<br />";
?>
</body>
</html>