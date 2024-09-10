<?php
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $kana = $_POST['kana'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $inquiry = $_POST['inquiry'];
    $message = $_POST['message'];
    $privacy = isset($_POST['privacy']) ? true : false;

    if (empty($name) || empty($kana) || empty($email) || empty($tel) || empty($inquiry) || empty($message) || !$privacy) {
        $errors[] = 'すべての必須項目を入力してください。';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = '有効なメールアドレスを入力してください。';
    }
    if (!preg_match('/^\d{10,11}$/', $tel)) {
        $errors[] = '有効な電話番号を入力してください。';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>

    </header>
    <main>
        <section class="con_01">
            <div class="wrapper">
                <h1>確認画面</h1>
                <?php if (!empty($errors)): ?>
                    <div class="errors">
                        <?php foreach ($errors as $error): ?>
                            <p style="color: red;"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endforeach; ?>
                    </div>
                    <button onclick="history.back()">戻る</button>
                <?php else: ?>
                    <form method="POST" action="task8-2.php">
                        <table>
                            <tr>
                                <th>お名前</th>
                                <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                            <tr>
                                <th>フリガナ</th>
                                <td><?php echo htmlspecialchars($kana, ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td><?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                            <tr>
                                <th>お問い合わせ項目</th>
                                <td><?php echo htmlspecialchars($inquiry, ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                            <tr>
                                <th>お問い合わせ内容</th>
                                <td><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></td>
                            </tr>
                        </table>
                        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="kana" value="<?php echo htmlspecialchars($kana, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="inquiry" value="<?php echo htmlspecialchars($inquiry, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">
                        <button type="submit">送信</button>
                    </form>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>
