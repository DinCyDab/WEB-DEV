<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DASHBOARD</title>
    </head>
    <body>
        <pre>
            <h1>Welcome <?php echo $_SESSION["username"]?></h1>
            <a href="logout.php">LOG OUT</a>
        </pre>
    </body>
</html>