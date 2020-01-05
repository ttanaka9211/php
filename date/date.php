<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="">
<?php

echo '<select name="year">'."\n";
$start = date('Y') + 30;
$end = date('Y') - 500;
for ($i = $start; $i >= $end; --$i) {
    echo '<option value="'.$i.'">'.$i.'</option>'."\n";
}
echo '</select>年'."\n";
echo '<select name="month">'."\n";
for ($i = 1; $i <= 12; ++$i) {
    echo '<option value="'.$i.'">'.$i.'</option>'."\n";
}
echo '</select>月'."\n";
echo '<select name="day">'."\n";
for ($i = 1; $i <= 31; ++$i) {
    echo '<option value="'.$i.'">'.$i.'</option>'."\n";
}
echo '</select>'."\n";
?>
<input type="submit" value="送信">
</form>
<?php
if (isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])) {
    $year = @$_POST['year'];
    $month = @$_POST['month'];
    $day = @$_POST['day'];
    $datetime = new DateTime();
    $datetime->setDate($year, $month, $day);
    $week = array('日', '月', '火', '水', '木', '金', '土');
    $w = (int) $datetime->format('w');
    if (checkdate($month, $day, $year)) {
        echo '<p>'.h($year).'年'.h($month).'月'.h($day).'日'.$week[$w].'曜日です。</p>';
    } else {
        echo '<p>'.h($year).'年'.h($month).'月'.h($day).'日は無効な日付です。 </p>';
    }
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?> 
</body>
</html>