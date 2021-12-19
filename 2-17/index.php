<?php
  //ループ文 × 条件分岐

  $total = 0;

  for($i = 1; $i <= 40; $i++) {
    $random = rand(1, 6);
    $total += $random;
    echo "{$i}回目={$random}";
    echo '<br>';

    if($total >= 40) {
      echo "合計{$i}回でゴールしました。";
      break;
    }
  }
?>

<?php
  //関数 × 条件分岐
  echo '<br>';
  echo '<br>';
  echo '<br>';
  date_default_timezone_set('Asia/Tokyo');
  $time = intval(date('H'));

  if(4 <= $time && $time <= 11) {
    echo date("今H時台です", time());
    echo '<br>';
    echo "おはようございます";
  } elseif(12 <= $time && $time <= 17) {
    echo date("今H時台です", time());
    echo '<br>';
    echo "こんにちは";
  } else {
    echo date("今H時台です", time());
    echo '<br>';
    echo "こんばんは";
  }
?>