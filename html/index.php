<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Task 6-1</title>
</head>
<body>

<?php
function showString($num, $str) {
    for ($i = 0; $i < $num; $i++) {
        echo $str . "<br>";
    }
}

// 関数を利用して「気合いだ！」を3回表示
showString(3, "気合いだ！");
?>

</body>
</html>
