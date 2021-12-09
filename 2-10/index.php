<?php
  function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ。";
  }

  getTriangleArea(10, 5);
  getTriangleArea(15, 8);
  getTriangleArea(8, 6);


  echo '<br>';
?>


<?php
  //体積：縦・横・高さ

  function getVolume($vertical, $beside, $height) {
    $sum = $vertical * $beside * $height;
    print "直方体の体積は".$sum."だよ。";
  }

  echo getVolume(5, 10, 8);
?>