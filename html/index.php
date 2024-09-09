<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品リスト</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <tr>
            <th>商品名</th>
            <th>単価</th>
            <th>数量</th>
            <th>税込価格</th>
            <th>1Dzの価格</th>
        </tr>
        <?php
        $items = [
            ["name" => "商品A", "price" => 100, "quantity" => 110],
            ["name" => "商品B", "price" => 200, "quantity" => 220]
        ];

        foreach ($items as $item) {
            $tax_included_price = $item['price'] * 1.1;
            $price_per_dozen = ($item['price'] * 12) * 1.1;
            echo "<tr>";
            echo "<td>{$item['name']}</td>";
            echo "<td>{$item['price']}円</td>";
            echo "<td>{$item['quantity']}個</td>";
            echo "<td>{$tax_included_price}円</td>";
            echo "<td>{$price_per_dozen}円</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <p>消費税は10%です。</p>
</body>
</html>
