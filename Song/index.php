<?php



?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Song</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background-color:#262626;">
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
    if(!empty($_POST['answer'])) {
        $answer = $_POST['answer'];
        if ($answer == "Altale") {
            $Data[14] = 2;
            echo "<div class=\"alert alert-success text-center\" role=\"alert\">
  正解しました. 「BMS OF FIGHTERS 6」が解放されました．
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
            <div class="col-3"><p></p></div>
            <!-- UnopenedBox -->
            <?php if($Data[14] != 1){echo("
                    <div class=\"col-6 px-1 py-1\">
                        <a href=\"https://drive.google.com/file/d/10iv_k4KJuXgb3O5yP9rl8HTjLfFLDG0I/view?usp=sharing\">
                        <div class=\"view overlay \">
                    <img src=\"img/DreamMakers.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">BMS OF FIGHTERS 6</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    
                    
                    ");}else{echo("
                    <div class=\"col-6\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/song.jpg\" class=\"img-fluid\" alt=\"smaple image\" >
                         </div>
                        </a>
                    </div>
                                <div class=\"col-12\" style=\"height: 10px;\"><p></p></div>
            <div class=\"rounded-bottom  #c0c0c0 mx-auto pb-0\">
                <form class=\"text-center\" style=\"color: #757575;\" action=\"index.php\" method=\"post\">

                    <label for=\"exampleForm2\">
                        <input type=\"text\" id=\"exampleForm2\" name=\"answer\" class=\"form-control\" style=\"text-align:center\">
                    </label>

            </div>
                    ");} ?>


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