<?php



?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Impressions</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body style="background-color:#ffffff;">
    <nav class="navbar navbar-dark unique-color">
        <a class="navbar-brand" href="../home"><strong>Home</strong></a>
    </nav>

    <?php
    $time = date("Y/m/d H:i:s");
    $blank = "<>";
    $filename = '../status.txt';

    $str = file('../status.txt');//テキストを配列として読み込み

    $fp = fopen($filename, 'w');
    fwrite($fp,"");//データをテキストに書き込み
    fclose($fp);
    $Data = explode($blank,$str[0]);	//受け取ったデータを分割して配列化
    if(!empty($_POST['answer1']) && !empty($_POST['answer2']) && !empty($_POST['answer3']) && !empty($_POST['answer4']) && !empty($_POST['answer5']) && !empty($_POST['answer6'])) {
        $answer1 = $_POST['answer1'];
        $answer2 = $_POST['answer2'];
        $answer3 = $_POST['answer3'];
        $answer4 = $_POST['answer4'];
        $answer5 = $_POST['answer5'];
        $answer6 = $_POST['answer6'];

        if ($answer1 == "チョキ" && $answer2 == "ひょうきんを演じる" && $answer3 == "死の3手目" && $answer4 == "泣きのグー" && $answer5 == "クリスマスケーキの上に乗っているサンタを模した砂糖菓子" && $answer6 == "PR課 御茶汲み") {
            $Data[3] = 2;$Data[4] = 1;$Data[5] = 1;
            echo "<div class=\"alert alert-success text-center\" role=\"alert\">
  正解しました． 「Zone」と「ChaosPages」が解放されました．
</div>";
        } else {
            echo "<div class=\"alert alert-danger text-center\" role=\"alert\">
  答えが違います
</div>
";
        }
    }
    ?>

    <!-- Start your project here-->
    <!-- Material form login -->
    <div class="container-fluid">
        <div class="row">

            <!--Grid column-->
            <div class="col-12" style="height: 100px;"><p></p></div>
            <div class="col-1"><p></p></div>
            <div class="col-10">


                <div class="card " style=" background-color: #d3d9df;">

                    <!--Card content-->
                    <div class="card-body px-lg-0 pt-5 pb-0">
                        <div class="container-fluid">
                            <div class="row">

                                <h6>
                                    初手はまずお互いの気持ちを確認するものでありここで勝ちに出るのは好ましくない。
                                    そのため、一旦心を落ち着かせるような一手を出すとともにあいこに持っていかなければならない。
                                    <mark><strong>[Q1]</strong></mark>
                                    は攻撃的手であり出しにくい手であるから悪手である。

                                    ここであいこになるのは定石。むしろここからがじゃんけんの始まりだと言える。
                                    ここからは1回目の手を考慮して攻撃するか防御に移るかを選択する必要がある。
                                    通常のじゃんけんは前の手がフラッシュバックするため前の手に勝つものを出す傾向にある。
                                    ただ今回は一度仕切りなおしてじゃんけんを行うため逆にパーはいい手とは言えない。
                                    先ほど攻撃するか防御に移るかと書いたがここで第三の点があることに気づいてるだろうか。それは
                                    <mark><strong>[Q2]</strong></mark>
                                    、狂人となるということ。つまり何も考えてないように見えるグーを出すということだ。
                                    <br>(Impress.1より)<br><br><br>

                                    さて次は
                                    <mark><strong>[Q3]</strong></mark>
                                    だ。今までのぬるま湯とは違いここからは本気の勝負が繰り広げられることが予想できる。
                                    ただ先程は全員がチョキだったためグーがフラッシュバック。だから相手はチョキを出してくると思われる。
                                    ただ裏をかいた相手はパーを出してくると予想できるのでここはまだ真の死の手ではないことがおわかりだろうか。
                                    まだ出すときではない。この回も我慢の時間。怒りの中の哀しみ。
                                    <mark><strong>[Q4]</strong></mark>
                                    を繰り出そうと思う。
                                    <br>(Impress.2より)<br><br><br>

                                    私自身じゃん拳については自信があり壱拳出す瞬間に何十もの手を考えるという多重拳を得意としているプレイヤーで有名である。
                                    合宿前に私はじゃん拳同好会と共に覇和威庵豆に行ってきたのだが勿論そこでじゃん拳が行われた。

                                    そして最悪の悲劇が起きた
                                    悪名高きアイス。ハァ〜ゲンダッツである。
                                    こいつは価格が極悪で観光地価格もあり1つ330円という価格設定。極悪である。
                                    しかもこいつはさっさと購入したいのに100円をなかなか受け付けない胴体を持ちあせていたのだ。まさに極悪である。
                                    <br><br>
                                    負けました。
                                    <br>
                                    それはもう竹筒を清々しく、颯爽と流れるる素麺のように負けました。<br>

                                    その時の写真を見てほしい。口はまさしく笑っているが目が凄い。生きてない。
                                    <br>
                                    私は甘かった。
                                    それはもう
                                    <mark><strong>[Q5]</strong></mark>
                                    よりも甘々に。
                                    <br>
                                    じゃん拳道 じゃん拳
                                    <mark><strong>[Q6]</strong></mark>
                                    担当
                                    <br>(Impress.3より)
                                </h6>


                        </div>
                        <!-- Form -->
                        <div class="rounded-bottom  #c0c0c0 mx-auto col-md-10 pb-0">
                            <form class="text-center" style="color: #757575;" action="index.php" method="post">
                                <label for="exampleForm2">Q1
                                <select class="form-control" id="exampleForm2" name="answer1">
                                    <option></option>
                                    <option>グー</option>
                                    <option>チョキ</option>
                                    <option>パー</option>
                                </select>
                                </label>

                                <label for="exampleForm2">Q2
                                    <select class="form-control" id="exampleForm2" name="answer2">
                                        <option></option>
                                        <option>狼になる</option>
                                        <option>バーサーカー</option>
                                        <option>ひょうきんを演じる</option>
                                        <option>ボケてみる</option>
                                    </select>
                                </label>

                                <label for="exampleForm2">Q3
                                    <select class="form-control" id="exampleForm2" name="answer3">
                                        <option></option>
                                        <option>鬼の3段峠</option>
                                        <option>地獄の3番地</option>
                                        <option>死の3手目</option>
                                        <option>魔の3本目</option>
                                    </select>
                                </label>

                                <label for="exampleForm2">Q4
                                    <select class="form-control" id="exampleForm2" name="answer4">
                                        <option></option>
                                        <option>泣きのグー</option>
                                        <option>哀愁のチョキ</option>
                                        <option>慈悲のパー</option>

                                    </select>
                                </label>

                                <label for="exampleForm2">Q5
                                    <select class="form-control" id="exampleForm2" name="answer5">
                                        <option></option>
                                        <option>クリームたっぷりのカラフルなマカロン</option>
                                        <option>コメダ珈琲で売り切れたモンブラン</option>
                                        <option>角砂糖に加え、シュガースティックまでもぶちまけたミルクティー</option>
                                        <option>クリスマスケーキの上に乗っているサンタを模した砂糖菓子</option>
                                    </select>
                                </label>

                                <label for="exampleForm2">Q6
                                    <select class="form-control" id="exampleForm2" name="answer6">
                                        <option></option>
                                        <option>営業課 課長</option>
                                        <option>事務課 事務員</option>
                                        <option>教育課 指導員</option>
                                        <option>PR課 御茶汲み</option>
                                    </select>
                                </label>
                                <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12" style="height: 100px;"><p></p></div>

        </div>
    </div>


    <!-- Material form login -->
    <!-- Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>


    </html>

<?php

foreach($Data as $value){//配列の数ループ
    if($value == 0 || $value == 1 || $value == 2) {
        $fp = fopen($filename, 'a');
        fwrite($fp,$value.$blank );//データをテキストに書き込み
        fclose($fp);
    }else{
        $fp = fopen($filename, 'a');
        fwrite($fp,$value );//データをテキストに書き込み
        fclose($fp);
    }
}

?>