<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        $_SESSION["favcolor"] = "blue";
        $_SESSION["favanimal"] = "lion";
        echo "Session variables are set.";
        ?>
    </body>
</html>