<?php
function max_number($n1, $n2) {
    if ($n1 > $n2) {
        return $n1;
    } else {
        return $n2;
    }
}

$a = 9;
$b = 21;

$max_value = max_number($a, $b);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>最大値を求める</title>
</head>
<body>
    <p>$a = <?php echo $a; ?></p>
    <p> $b = <?php echo $b; ?></p>
    <p>$aと$bのうち最大値は<?php echo $max_value; ?>です。</p>
</body>
</html>
