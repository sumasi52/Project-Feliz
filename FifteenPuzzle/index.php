<!DOCTYPE html>
<!-- saved from url=(0040)https://magnets.jp/demo/inagaki20170519/ -->
<html lang="ja"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FifteenPuzzle</title>
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
    <a class="navbar-brand" href="../home"><strong>Home</strong></a>
</nav>
<?php $blank = "<>"; $filename = '../status.txt';
$str = file('../status.txt');
$fp = fopen($filename, 'w');
fwrite($fp,"");
fclose($fp);
$Data = explode($blank,$str[0]);
?>
<script src="./magnets.jp_files/jquery.min.js.ダウンロード"></script>
<script type="text/javascript">
    var panel = [];
    var starX = 300;
    var starY = 300;
    var clear = 0;
    function gameClear(){
        for(i=0; i<15; i++) {
            var x = parseInt($('#'+i).css('left'))/100;
            var y = parseInt($('#'+i).css('top'))/100;
            var clearX = i%4;
            var clearY = Math.floor(i/4)
            if((clearX == x)&&(clearY == y)) {
                clear ++;
            }
        }
        if(!(15 <= clear)) {
            clear = 0;
        } else {
            alert("bb");
            <?php
            //$Data[0] = 1;
            ?>
        }
    }
    $(function(){
        for(i=0; i<15; i++) {
            panel.push(i)
        };
        panel.sort(function() {
            return Math.random() - Math.random();
        })
        panel.push(15);
        for(i=0; i<15; i++) {
            $("#puzzle").append("<li id='"+panel[i]+"'><img src='magnets.jp_files/"+panel[i]+".png'></li>");
            var x = i%4*100;
            var y =  Math.floor(i/4)*100;
            $("#"+panel[i]).css({'left':x, 'top':y});
        }
        $("#puzzle").append("<li id='15'><img src='magnets.jp_files/15.png'></li>");
        $("#15").css({'left':starX, 'top':starY});
        $('#puzzle li').on('click', function() {
            var idX = parseInt($(this).css('left'));
            var idY = parseInt($(this).css('top'));
            if( ((idX==starX)&&((idY==starY-100)||(idY==starY+100))) || ((idY==starY)&&((idX==starX-100)||(idX==starX+100))) ) {
                $(this).css({'left':starX, 'top':starY});
                $("#15").css({'left':idX, 'top':idY});
                starX = idX;
                starY = idY;
            }
            for(i=0; i<15; i++) {
                var x = parseInt($('#'+i).css('left'))/100;var y = parseInt($('#'+i).css('top'))/100;var clearX = i%4;var clearY = Math.floor(i/4)
                if((clearX == x)&&(clearY == y)) {
                    clear ++;}}if(!(15 <= clear)) {clear = 0;} else {alert("Clear! KeyWord 「Eye」");}});});</script><?php
if(!empty($_POST['answer'])) {$answer = $_POST['answer'];
    if ($answer == "Eye") {$Data[0] = 2;$Data[1] = 1;echo "<div class=\"alert alert-success text-center\" role=\"alert\">正解しました. 「Eye」が開放されました.</div>";} else {
        echo "<div class=\"alert alert-danger text-center\" role=\"alert\">答えが違います</div>";}} ?>
<!-- Start your project here--><!-- Material form login --><div class="container-fluid"><div class="row"><!--Grid column--><div class="col-4 col-md-4"></div><div class="col-4 col-md-4">
            <!-- Form -->
            <div class="rounded-bottom  #c0c0c0 text-center  pb-0">
                <form class="text-center" style="color: #757575;" action="index.php" method="post">
                    <label for="exampleForm2"></label>
                    <input type="text" id="exampleForm2" name="answer" class="form-control" style="text-align:center">
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