<?php



?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>LogicCircuit</title>
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
    if(!empty($_POST['answer1']) && !empty($_POST['answer2']) && !empty($_POST['answer3']) && !empty($_POST['answer4'])) {
        $answer1 = $_POST['answer1'];
        $answer2 = $_POST['answer2'];
        $answer3 = $_POST['answer3'];
        $answer4 = $_POST['answer4'];

        if ($answer1 == "AND" && $answer2 == "NOR" && $answer3 == "NOR" && $answer4 == "OR") {
            $Data[9] = 2;$Data[10] = 1;$Data[11] = 1;
            echo "<div class=\"alert alert-success text-center\" role=\"alert\">
  正解しました. 「ExtremeWord」と「Arcana」が解放されました．
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
            <div class="col-12" style="height: 50px;"><p></p></div>
            <div class="col-2" style="height: 50px;"><p></p></div>
            <?php echo("
                    <div class=\"col-md-5 px-1 py-5\">
                        <div class=\"view overlay \">
                    <img src=\"img/Logic.jpg\" class=\" img-fluid \" alt=\"\" >
                    </div>
                    </div>
                    ");?>
            <?php echo("
                    <div class=\"col-md-3 px-1\">
                        <div class=\"view overlay \">
                    <img src=\"img/Logic2.jpg\" class=\" img-fluid \" alt=\"\" >
                    </div>
                    </div>
                    ");?>

            <div class="rounded-bottom  #c0c0c0 mx-auto col-md-10 pb-0">
                <form class="text-center" style="color: #757575;" action="index.php" method="post">
                    <label for="exampleForm2">Q1
                        <select class="form-control" id="exampleForm2" name="answer1">
                            <option></option>
                            <option>NOT</option>
                            <option>AND</option>
                            <option>OR</option>
                            <option>NAND</option>
                            <option>NOR</option>
                            <option>XOR</option>
                        </select>
                    </label>

                    <label for="exampleForm2">Q2
                        <select class="form-control" id="exampleForm2" name="answer2">
                            <option></option>
                            <option>NOT</option>
                            <option>AND</option>
                            <option>OR</option>
                            <option>NAND</option>
                            <option>NOR</option>
                            <option>XOR</option>
                        </select>
                    </label>

                    <label for="exampleForm2">Q3
                        <select class="form-control" id="exampleForm2" name="answer3">
                            <option></option>
                            <option>NOT</option>
                            <option>AND</option>
                            <option>OR</option>
                            <option>NAND</option>
                            <option>NOR</option>
                            <option>XOR</option>
                        </select>
                    </label>

                    <label for="exampleForm2">Q4
                        <select class="form-control" id="exampleForm2" name="answer4">
                            <option></option>
                            <option>NOT</option>
                            <option>AND</option>
                            <option>OR</option>
                            <option>NAND</option>
                            <option>NOR</option>
                            <option>XOR</option>
                        </select>
                    </label>

                    <button type="submit" class="btn btn-primary">Send</button>
            </div>


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