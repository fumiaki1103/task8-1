<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>商品価格表</title>
<style>
    .price-table {
        font-family: Arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }
    .price-table th, .price-table td {
        border: 1px solid #ddd;
        padding: 8px;
    }
    .price-table th {
        background-color: #f2f2f2;
    }
    .price-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .price-table tr:hover {
        background-color: #f1f1f1;
    }
</style>
</head>
<body>

<table class="price-table">
    <tr>
        <th>商品</th>
        <th>価格</th>
        <th>税込価格</th>
    </tr>
    <?php
    $products = [
        ["商品" => "鉛筆", "価格" => "100円", "税込価格" => "110円"],
        ["商品" => "消しゴム", "価格" => "200円", "税込価格" => "220円"],
        ["商品" => "定規", "価格" => "300円", "税込価格" => "330円"]
    ];

    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . $product["商品"] . "</td>";
        echo "<td>" . $product["価格"] . "</td>";
        echo "<td>" . $product["税込価格"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
