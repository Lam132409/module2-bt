<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "QuadraticEquation.php";
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $quadrakill = new QuadraticEquation($a, $b, $c);
    echo $quadrakill->getRoot();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTB2</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>
                <input type="text" name="a">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="b">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="c">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
