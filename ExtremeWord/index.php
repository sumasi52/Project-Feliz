<?php



?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ExtremeWord</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body style="background-color:#fbfcfc;">

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
    if(!empty($_POST['answer1']) && !empty($_POST['answer2'])) {
        $answer1 = $_POST['answer1'];
        $answer2 = $_POST['answer2'];
        if ($answer1 == "研究" && $answer2 == "メ") {
            $Data[10] = 2;$Data[12] = 1;
            echo "<div class=\"alert alert-success text-center\" role=\"alert\">
  正解しました. 「NumberLink」が解放されました．
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
            <div class="col-md-4 col-sm-3"><p></p></div>
            <div class="col-md-4 col-sm-6">


                <div class="card" style=" background-color: #1cc72f;">

                    <!--Card content-->
                    <div class="card-body px-lg-0 pt-5 pb-0">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-12 px-1 py-1">
                                    <h3 class="text-center">2018 11/8 ~ 2019 12/17</h3>
                                    <h2 class="text-center">1.□□ 49</h2>
                                    <h2 class="text-center">2.学校 46</h2>
                                    <h2 class="text-center">3.□ 36</h2>
                                    <h2 class="text-center">4.ご飯 33</h2>
                                    <h2 class="text-center">5.駅 27</h2>

                                </div>

                            </div>

                        </div>
                        <!-- Form -->
                        <div class="rounded-bottom  #c0c0c0 mx-auto col-md-6 pb-0">
                            <form class="text-center" style="color: #757575;" action="index.php" method="post">

                                <label for="exampleForm2">
                                    <input type="text" id="exampleForm2" name="answer1" class="form-control" placeholder="1.□□" >
                                </label>
                                <label for="exampleForm2">
                                    <input type="text" id="exampleForm2" name="answer2" class="form-control" placeholder="3.□" >
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