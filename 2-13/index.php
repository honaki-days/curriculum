<?php
  //繰り上げ
  $a = 1.2;
  echo ceil($a);
  echo '<br>';

  //切り捨て
  $b = 11.2;
  echo floor($b);
  echo '<br>';

  //四捨五入
  $c = 104;
  echo round($c);
  echo '<br>';

  //円周率
  echo pi();
  echo '<br>';
  //円周率を使った計算
  function circleArea($d) {
    $circleArea = $d * $d * pi();
    echo $circleArea;
  }
  circleArea(5);
  echo '<br>';

  //乱数
  echo mt_rand(0, 1000);
  echo '<br>';
  echo '<br>';


  //文字列の長さ
  $str = "aaaaaaa";
  echo strlen($str);
  echo '<br>';

  //検索
  $str = "aaaaaaab";
  echo strpos($str, "b");
  echo '<br>';

  //文字列の切り取り
  $str = "japan";
  echo substr($str, -3, 1);
  echo '<br>';

  //置換
  $str = "japan";
  echo str_replace("apa", "APA", $str);
  echo '<br>';
  echo '<br>';


  //フォーマット化した文字列を出力
  $name = "honda";
  $limit_number = 20;
  printf("%sの残り時間はあと%d時間です。",$name, $limit_number);
  echo '<br>';

  $limit_hour = 3;
  $limit_minute = 5;
  printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
  echo '<br>';

  //変数に代入できるprintf
  $limit_hour = 6;
  $limit_minute = 7;
  $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
  echo $limit_time;

?>