<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="while-loop.php" method="post">
        <input type="submit" name="stop" value="stop">


    </form>

</body>

</html>

<?php
$seconds = 0;
$running = false;

while ($running) {
    if (isset($_POST['stop'])) {
        $running = false;
    } else {
        //wait 1 second
        $seconds++;
        echo $seconds . "<br>";
    }
}

?>