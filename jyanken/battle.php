<?php

// じゃんけんの手を配列に代入
$hands = ['グー', 'チョキ', 'パー'];

// プレイヤーの手がPOSTされたら
if (isset($_POST['playerHand'])) {
    // プレイヤーの手を代入
    $playerHand = $_POST['playerHand'];

    // PCの手をランダムで選択
    $key = array_rand($hands);
    $pcHand = $hands[$key];

    // 勝敗を判定
    switch ($playerHand) {
        case $playerHand === $pcHand:
            $result = 'あいこ';
            break;
        case 'グー':
            $result = ($pcHand === 'チョキ') ? '勝ち' : '負け';
            break;
        case 'チョキ':
            $result = ($pcHand === 'パー') ? '勝ち' : '負け';
            break;
        case 'パー':
            $result = ($pcHand === 'グー') ? '勝ち' : '負け';
            break;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
    <header>
        <div class="header-logo">ジャンケンプログラム</div>
    </header>
    <main>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <p class="result-word"><?= $result; ?>！</p>

            あなた：<?= $playerHand; ?><br>
            コンピューター：<?= $pcHand; ?><br>

            <p><a class="red" href="jyanken.php">>>もう一回勝負する</a></p>
        </div>
    </main>
    <footer>
        
    </footer>
</div>
</body>
</html>
