<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>admin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color:#1C2331;">
<nav class="navbar navbar-dark unique-color">
    <a class="navbar-brand" href="../home"><strong>Home</strong></a>
</nav>

<?php
$time = date("Y/m/d H:i:s");
$blank = "<>";
$filename = '../help.txt';

$str = file('../help.txt');//テキストを配列として読み込み

$fp = fopen($filename, 'w');
fwrite($fp,"");//データをテキストに書き込み
fclose($fp);
$Data = explode($blank,$str[0]);	//受け取ったデータを分割して配列化
if(!empty($_POST['answer1']) && !empty($_POST['answer2'])){
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];

    $Data[1] = $answer1;
    $Data[2] = $answer2;
}

$str = file('../status.txt');//テキストを配列として読み込み
fwrite($fp,"");//データをテキストに書き込み
fclose($fp);
$Status = explode($blank,$str[0]);	//受け取ったデータを分割して配列化

?>

<!-- Start your project here-->
<!-- Material form login -->
    <div class="container-fluid">
        <div class="row">

        <!--Grid column-->
            <?php for($i=0; $i<15; $i++) : ?>
            <div style="background-color: #3fa044" class="col-2">
                    <h4><?php echo($i."Q"); ?></h4>
                    <h1><?php echo($Status[$i]); ?></h1>
            </div>
            <?php endfor; ?>

            <div class="col-12" style="height: 10px;"></div>
            <div class="col-2"></div>
            <div class="col-8 white-text"><h3>Question</h3></div>
            <div class="col-2"></div>
            <div class="col-2"><p></p></div>
            <div class="col-8 white-text" style="">
                <h5><?php echo($Data[0]); ?></h5>
            </div>
            <div class="col-12" style="height: 10px;"></div>


            <div class="col-2"></div>
            <div class="col-8 red-text">
                <h3>Answer(<?php echo($Data[2]."回"); ?>)</h3>
            </div>
            <div class="col-2"></div>
            <div class="col-2"><p></p></div>
            <div class="col-8 red-text" style="">
                <h5><?php echo($Data[1]); ?></h5>
            </div>
            <div class="col-12" style="height: 10px;"></div>


            <div class="col-2"><p></p></div>
        <div class="col-8">
            <div class="rounded-bottom #c0c0c0 text-center pb-0">
                <form class="form-inline text-center" style="color: #757575;" action="index.php" method="post">

                    <label for="exampleFormControlTextarea1">解答内容</label>
                    <div class="col-8"><p></p></div>
                    <textarea class="form-control col-10" id="answer" name="answer1" rows="3"></textarea>
                    <div class="col-12"><p></p></div>

                    <label for="exampleFormControlTextarea1">残り回答数</label>
                    <input type="text" id="exampleForm2" name="answer2" class="form-control col-1" style="text-align:center">
                    <button type="submit" class="btn btn-primary">Send</button>

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
    if(!($value == "9")) {
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