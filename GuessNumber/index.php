<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>Nhập vào số bạn muốn (1->100):
        <input type="number" name="needle"></label>
</body>
</html>
<?php
$needle = $_POST['needle'];
$numbers = range(1, 100, 1);
function gamePlay( $numbers, $needle)
{
    $low = 0;
    $high = count($numbers) - 1;
    $checkWin = false;
    for ($i = 1; $i < 100; $i++) {
        $randomNum = rand($numbers[$low], $numbers[$high]);
        echo 'Máy tính chọn lần ' . $i . ' : ' . $randomNum . '<br>';
        if ($randomNum < $needle) {
            echo 'Không đúng ! Số bạn chọn nhỏ hơn :))' . '<br>';
            $low = $randomNum;
        } else if ($randomNum > $needle) {
            echo 'Không đúng ! Số bạn chọn lớn hơn :))' . '<br>';
            $high = $randomNum;
        } else {
            echo 'Đúng rồi !';
            $checkWin = true;
            break;
        }
    }

}

gamePlay($numbers, $needle);


