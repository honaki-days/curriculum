<?php
//POST送信で送られてきた名前を受け取って変数を作成
  $my_name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$nums = [80, 22, 20, 21];
$lags = ["PHP", "Python", "JAVA", "HTML"];
$coms = ["join", "select", "insert", "update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$num_answer = 80;
$lag_answer = "HTML";
$com_answer = "select";

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
  <div class="question margin-top center">
    <p class="question__name">お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name; ?>さん</p>
    <div class="question-1 margin-top">
      <!--フォームの作成 通信はPOST通信で-->
      <form action="answer.php" method="post">
        <h2 class="font-size">①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <div class="question-select margin-top">
          <?php
          foreach ($nums as $value) { ?>
            <input type="radio" name="num_radio" value= "<?php echo $value ?>">
            <?php echo $value;
          }
          ?>
        </div>
    </div>
    
    <div class="question-2 margin-top">
      <!--フォームの作成 通信はPOST通信で-->
      <h2 class="font-size">②Webページを作成するための言語は？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <div class="question-select margin-top">
        <?php
        foreach ($lags as $value) { ?>
            <input type="radio" name="lag_radio" value="<?php echo $value ?>">
            <?php echo $value;
        }
        ?>
      </div>
    </div>

    <div class="question-3 margin-top">
      <!--フォームの作成 通信はPOST通信で-->
      <h2 class="font-size">③MySQLで情報を取得するためのコマンドは？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <div class="question-select margin-top">
        <?php
        foreach ($coms as $value) { ?>
            <input type="radio" name="com_radio" value="<?php echo $value ?>">
            <?php echo $value;
        }
        ?>
      </div>
    </div>

  <!--問題の正解の変数と名前の変数を[answer.php]に送る-->

    <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
    <input type="hidden" name="num_answer" value="<?php echo $num_answer; ?>">
    <input type="hidden" name="lag_answer" value="<?php echo $lag_answer; ?>">
    <input type="hidden" name="com_answer" value="<?php echo $com_answer; ?>">
    <input type="submit" value="回答">
  </form>
  </div>
</body>
</html>