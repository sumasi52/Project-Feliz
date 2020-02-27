<?php



?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop2</title>
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
        <a class="navbar-brand" href="../Oznabrag"><strong>Back</strong></a>
    </nav>

    <!-- Start your project here-->
    <!-- Material form login -->
    <div class="container-fluid">
        <h4 style="color: #f8f9fa">全体的に迫力には乏しい。そつなくこなす優等生。<br>
            シュアがけ。装着感は良い。
        </h4>
        <div class="row">

            <!--Grid column-->

            <div class="col-6 px-1 py-1">
                <img src="img/shop2-1.jpg" class="img-fluid" alt="smaple image" >
            </div>
            <div class="col-6 px-1 py-1">
                <img src="img/shop2-2.jpg" class="img-fluid" alt="smaple image" >
            </div>
            <div class="col-6 px-1 py-1">
                <img src="img/shop2-3.jpg" class="img-fluid" alt="smaple image" >
            </div>
            <div class="col-12 px-1 py-1">
                <img src="img/shop2-4.jpg" class="img-fluid" alt="smaple image" >
            </div>
            <!-- UnopenedBox -->


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