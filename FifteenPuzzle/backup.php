<!DOCTYPE html>
<!-- saved from url=(0040)https://magnets.jp/demo/inagaki20170519/ -->
<html lang="ja"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../home/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../home/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../home/css/style.css" rel="stylesheet">


    <title></title>
    <link href="./magnets.jp_files/base.css" type="text/css" rel="stylesheet" media="all">
</head>
<body style="background-color:#1C2331;">
<nav class="navbar navbar-dark unique-color">
    <a class="navbar-brand" href="../home">Home</a>
</nav>

<?php
$blank = "<>";
$filename = '../status.txt';

$str = file('../status.txt');//テキストを配列として読み込み

$fp = fopen($filename, 'w');
fwrite($fp,"");//データをテキストに書き込み
fclose($fp);
$Data = explode($blank,$str[0]);	//受け取ったデータを分割して配列化
?>

<script src="./magnets.jp_files/jquery.min.js.ダウンロード"></script>
<script type="text/javascript">

    var panel = [];  //ランダムに並び替える用の配列
    var starX = 300;  //★パネルの初期left値
    var starY = 300;  //★パネルの初期right値
    var clear = 0;  //クリアー判定用


    //クリアー判定
    function gameClear(){
        for(i=0; i<15; i++) {
            var x = parseInt($('#'+i).css('left'))/100;
            var y = parseInt($('#'+i).css('top'))/100;
            var clearX = i%4;
            var clearY = Math.floor(i/4)
            if((clearX == x)&&(clearY == y)) {  //0～15のパネルが正しい位置にあるかを確認
                clear ++;  //OKならclearに+1
            }
        }
        if(!(15 <= clear)) {  //15枚のパネルが全て正しい位置にあれば
            clear = 0;
        } else {
            alert("bb");
            <?php
            //$Data[0] = 1;
            ?>
        }
    }
    function dataSet(){
        <?php
        $Data[0] = 1;
        ?>

    }

    $(function(){
        //ランダム配置するパネルの枚数分の番号を配列に格納
        for(i=0; i<15; i++) {
            panel.push(i)
        };
        //配列の中身0~14をランダムに並び替え
        /*panel.sort(function() {
            return Math.random() - Math.random();
        })
        panel.push(15);*/

        //15枚のパネルの生成
        for(i=0; i<15; i++) {
            $("#puzzle").append("<li id='"+panel[i]+"'><img src='magnets.jp_files/"+panel[i]+".png'></li>");
            var x = i%4*100;  //パネルのleft値
            var y =  Math.floor(i/4)*100;  //パネルのtop値
            $("#"+panel[i]).css({'left':x, 'top':y});  //生成したパネルの位置指定
        }
        $("#puzzle").append("<li id='15'><img src='magnets.jp_files/15.png'></li>");  //★パネル生成
        $("#15").css({'left':starX, 'top':starY});  //★パネルの位置指定

        //パネルクリック時の処理
        $('#puzzle li').on('click', function() {
            var idX = parseInt($(this).css('left'));  //クリックしたパネルのleft値を保存
            var idY = parseInt($(this).css('top'));  //クリックしたパネルのtop値を保存
            if( ((idX==starX)&&((idY==starY-100)||(idY==starY+100))) || ((idY==starY)&&((idX==starX-100)||(idX==starX+100))) ) {  //クリックしたパネルが★と隣接していれば…
                $(this).css({'left':starX, 'top':starY});  //クリックしたパネルを★の位置に移動
                $("#15").css({'left':idX, 'top':idY});  //★をクリックしたパネルの位置に移動
                starX = idX;  //変数に保存していた★マークのleft値を現在の値に更新
                starY = idY;  //変数に保存していた★マークのtop値を現在の値に更新
            }

            for(i=0; i<15; i++) {
                var x = parseInt($('#'+i).css('left'))/100;
                var y = parseInt($('#'+i).css('top'))/100;
                var clearX = i%4;
                var clearY = Math.floor(i/4)
                if((clearX == x)&&(clearY == y)) {
                    clear ++;  //OKならclearに+1
                }
            }
            if(!(15 <= clear)) {
                clear = 0;
            } else {
                alert("Clear! KeyWord 「Arcana」");
            }

        });

    });

</script>
<?php
if(!empty($_POST['answer'])) {
    $answer = $_POST['answer'];
    if ($answer == "Arcana") {
        $Data[0] = 1;
        echo "<div class=\"alert alert-success text-center\" role=\"alert\">
  正解しました. 「Arcana」が開放されました.
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
        <div class="col-4 col-md-4"><p></p></div>
        <div class="col-4 col-md-4">


            <!-- Form -->
            <div class="rounded-bottom  #c0c0c0 text-center  pb-0">
                <form class="text-center" style="color: #757575;" action="index.php" method="post">

                    <label for="exampleForm2"></label>
                    <input type="text" id="exampleForm2" name="answer" class="form-control">

                    <!-- Sign in button -->

                    <!-- Form -->

            </div>

        </div>
    </div>
</div>


<!-- Material form login -->
<!-- Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="../home/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../home/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../home/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../home/js/mdb.min.js"></script>
<ul id="puzzle"></ul>


</body></html>
<?php

foreach($Data as $value){//配列の数ループ
    if($value == 0 || $value == 1) {
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