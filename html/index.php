<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>task2-2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <tr>
            <th>商品</th>
            <th>価格</th>
            <th>税込価格</th>
        </tr>
        <?php
        $items = [
            ["name" => "鉛筆", "price" => 100, "tax_price" => 110],
            ["name" => "消しゴム", "price" => 200, "tax_price" => 220],
            ["name" => "定規", "price" => 300, "tax_price" => 330]
        ];

        foreach ($items as $item) {
            echo "<tr>";
            echo "<td>{$item['name']}</td>";
            echo "<td>{$item['price']}円</td>";
            echo "<td>{$item['tax_price']}円</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
