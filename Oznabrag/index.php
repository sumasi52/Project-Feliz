<?php



?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oznabrag</title>
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
        if ($answer == "garbanzo" || $answer == "ガルバンゾ" || $answer == "Garbanzo") {
            $Data[13] = 2;
            echo "<div class=\"alert alert-success text-center\" role=\"alert\">
  正解しました. 「スーツケース購入ページ」が解放されました．
</div>";
        } else {
            echo "<div class=\"alert alert-danger text-center\" role=\"alert\">
  答えが違います
</div>
";
        }
    }

    $str = file('../shop.txt');//テキストを配列として読み込み

    $fp = fopen('../shop.txt', 'w');
    fwrite($fp,"");//データをテキストに書き込み
    fclose($fp);
    $Shop = explode($blank,$str[0]);
    if(!empty($_POST['shop_answer'])) {
        $answer = $_POST['shop_answer'];
        $Shop[0] = $answer;
            echo "<div class=\"alert alert-success text-center\" role=\"alert\">
  受け付けました．別途連絡が必要であればLINEからお願いします．
</div>";
    }

    ?>

    <!-- Start your project here-->
    <!-- Material form login -->
    <div class="container-fluid">
        <div class="row">

            <!--Grid column-->
            <div class="col-12" style="height: 10px;"><p></p></div>


            <!-- UnopenedBox -->
            <?php if($Data[13] != 1){echo("
                    <div class=\"col-6 px-1 py-1\">
                        <a href=\"../Shop1\">
                        <div class=\"view overlay \">
                    <img src=\"img/shop1.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">1.　Campfire Audio IO</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    
                    <div class=\"col-6 px-1 py-1\">
                        <a href=\"../Shop2\">
                        <div class=\"view overlay \">
                    <img src=\"img/shop2.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">2.　AROMA Musical Box Star Transparent RED</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    
                    <div class=\"col-6 px-1 py-1\">
                        <a href=\"../Shop3\">
                        <div class=\"view overlay \">
                    <img src=\"img/shop3.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">3.　radius HP-TWF41R</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    
                    <div class=\"col-6 px-1 py-1\">
                        <a href=\"../Shop4\">
                        <div class=\"view overlay \">
                    <img src=\"img/shop4.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">4.　EMPIRE EARS Bravado</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    
                    <div class=\"col-6 px-1 py-1\">
                        <a href=\"../Shop5\">
                        <div class=\"view overlay \">
                    <img src=\"img/shop5.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">5.　Fender TEN 2 Metallic Red</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    
                                <div class=\"rounded-bottom  #c0c0c0 mx-auto col-md-10 pb-0\">
                <form class=\"text-center\" style=\"color: #757575;\" action=\"index.php\" method=\"post\">
                    <label for=\"exampleForm2\">
                        <select class=\"form-control\" id=\"exampleForm2\" name=\"shop_answer\">
                            <option>eイヤホンに試聴しに行く</option>
                            <option>1番がいいな、父さん（色はLINE）</option>
                            <option>2番が欲しいよ、パパ(サイズはLINE)</option>
                            <option>3番はいい感じだね、おとっつあん</option>
                            <option>4番が素晴らしい、頼むよ父上</option>
                            <option>5番ですぜ親父！</option>
                            <option>決めたのがあるのでそれを買ってよ、お父さん（要LINE）</option>
                        </select>
                    </label>
                    <button type=\"submit\" class=\"btn btn-primary\">Send</button>
            </div>
                    
                    
                    ");}else{echo("
                    <div class=\"col-md-6 col-sm-10 px-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/zo.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                         </div>
                        </a>
                    </div>
                                <div class=\"col-12\" style=\"height: 10px;\"><p></p></div>
            <div class=\"rounded-bottom  #c0c0c0 mx-auto col-md-8 col-sm-10 pb-0\">
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

foreach($Shop as $value){//配列の数ループ
    if(!empty($_POST['$value'])) {
        $fp = fopen('../shop.txt', 'a');
        fwrite($fp,$value.$blank );//データをテキストに書き込み
        fclose($fp);
    }else{
        $fp = fopen('../shop.txt', 'a');
        fwrite($fp,$value );//データをテキストに書き込み
        fclose($fp);
    }
}

?>