<?php

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
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

    <div class="container-fluid">
        <div class="row">

            <div class="mx-auto">
                <a href="../ChaosPages/c<?php echo(mt_rand(1, 21)) ?>.php">
                <img src="img/c21.jpg" class="img-fluid" alt="smaple image" >
                </a>
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