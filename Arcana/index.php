<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
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
    <a class="navbar-brand" href="../home">Home</a>
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
if(!empty($_POST['answer'])) {
    $answer = $_POST['answer'];
    if ($answer == "THE HANGED MAN") {
        $Data[2] = 1;
        echo "<div class=\"alert alert-success text-center\" role=\"alert\">
  正解しました
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
            <div class="col-3 col-md-4"><p></p></div>
        <div class="col-6 col-md-4">


            <div class="card " style=" background-color: #c0c0c0;">



    <h5 class="card-header #eee black-text text-center py-3">
        <strong>XII</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-0 pt-5 pb-0">

        <!-- Form -->
        <div class="col-12" style="height: 100px;"></div>


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