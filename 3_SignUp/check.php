<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a"> 
        <input type="submit" value="">
    </form>
    <?php
        if (isset($_POST)) {
            $e = $_POST["a"];
            echo "value of a".$e;

            $f = "/^[a-z0-9]+@gmail\.[c][o][m]{1}$/";
            if (preg_match($f, $e))
                echo "Same";
            else
                echo "different";
    ?>
</body>
</html>