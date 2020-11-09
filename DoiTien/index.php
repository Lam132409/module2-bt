<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $money = $_POST["money"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $count = $money * $to / $from ;
    echo "<h3>$count<h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        select{
            width: 130px;
        }
    </style>
    <style>
        td{width: 200px}
    </style>
    <style>
        th{
            text-align: center;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <th>Amount</th>
            <th>From Currency</th>
            <th>To Currency</th>
        </tr>
        <tr>
            <td>
                <input type="text" id="amount" name="money">
            </td>
            <td>
                <select name="from">
                    <option value="23000" >VietNam</option>
                    <option value="1" >USA</option>
                </select>
            </td>
            <td>
                <select name="to">
                    <option value="1" >USA</option>
                    <option value="23000" >VietNam</option>
                </select>
            </td>
            <td>
                <button type="submit" ">Quy đổi</button>

            </td>
        </tr>
    </table>
</form>
</body>
</html>
