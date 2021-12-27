<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
//名前
$my_name = $_POST['my_name'];

//選択した回答
$num_radio = $_POST["num_radio"];
$lag_radio = $_POST["lag_radio"];
$com_radio = $_POST["com_radio"];

//問題の答え
$num_answer = $_POST['num_answer'];
$lag_answer = $_POST['lag_answer'];
$com_answer = $_POST['com_answer'];


//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function scring($X, $Y) {
  if($X == $Y) {
    echo "正解！";
  } else {
    echo "残念・・・";
  }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="answer center margin-top">
    <p class="answer__name"><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>

    <p class="margin-top">①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p class="margin-top"><?php scring($num_radio, $num_answer); ?></p>

    <p class="margin-top">②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p class="margin-top"><?php scring($lag_radio, $lag_answer); ?></p>


    <p class="margin-top">③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p class="margin-top"><?php scring($com_radio, $com_answer); ?></p>
  </div>

</body>
</html>



<?php 
/*PHP hiddenで入力データを複数ページに渡って送る
https://noumenon-th.net/programming/2016/01/15/hidden/

ラジオボタンを使ってみる
https://vesna-memo.com/?p=920

foreach と type="radio" の共存の仕方
https://qiita.com/BazTOK53xmAyLO6/items/07536f11fefac3033abe

開発日記・備忘録
https://nakaya0611.hatenadiary.org/entry/20090608/1244461642

関数の使い方
https://www.javadrive.jp/php/function/index1.html
?>