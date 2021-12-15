<?php
  //count
  $nums = ["honda", "kitaoka", "sakurada", "kamiya", "aaaaaaa"];
  echo count($nums);
  echo '<br>';

  //sort
  $nums = ["honda", "kitaoka", "sakurada", "kamiya", "aaaaaaa"];
  sort($nums);
  var_dump($nums);
  echo '<br>';

  $numbers = [22, 98, 34, 76, 55];
  sort($numbers);
  var_dump($numbers);
  echo '<br>';

  //in_array
  $nums = ["honda", "kitaoka", "sakurada", "kamiya", "aaaaaaa"];
  var_dump(in_array("honda", $nums));
  echo '<br>';

  $nums = ["honda", "kitaoka", "sakurada", "kamiya", "aaaaaaa"];
  if(in_array("honda", $nums)) {
    echo "ホンダさんがいるよ！";
  } else {
    echo "ホンダさんはいないよ！";
  }
  echo '<br>';

  //implode
  $nums = ["honda", "kitaoka", "sakurada", "kamiya", "aaaaaaa"];
  $atstr = implode("&", $nums);
  echo $atstr;
  echo '<br>';

  //explode
  $str = "1+2+3+4+5";
  $re_members = explode("+", $str);
  var_dump($re_members);
?>