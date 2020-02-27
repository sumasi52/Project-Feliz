<?php

$time = date("Y/m/d H:i:s");
$blank = "<>";
$filename = '../status.txt';


$str = file('../status.txt');//テキストを配列として読み込み

$fp = fopen($filename, 'w');
fwrite($fp,"");//データをテキストに書き込み
fclose($fp);
$Data = explode($blank,$str[0]);	//受け取ったデータを分割して配列化

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!-- Start your project here-->
<!-- Material form login -->
<div class="main bg-dark">
<div class="card">

    <nav class="navbar info-color white-text">
        <h1 class="" ><strong>Home</strong></h1>
        <span class="navbar-text">
        <a style="color: #f8f9fa" class="navbar-brand" href="../Help"><strong>Help</strong></a>
    </span>
    </nav>

    <!--Card content-->

            <div class="container-fluid">
                <div class="row">
                    <!-- FifteenPuzzle -->
                    <?php if($Data[0] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../FifteenPuzzle\">
                        <div class=\"view overlay \">
                    <img src=\"img/q1-1.jpg\" class=\" img-fluid \" alt=\"\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">FifteenPuzzle</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q1.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- Eye -->
                    <?php if($Data[1] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../Eye\">
                        <div class=\"view overlay \">
                    <img src=\"img/q2.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">Eye</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q2.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- Lunch -->
                    <?php if($Data[2] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../Lunch\">
                        <div class=\"view overlay \">
                    <img src=\"img/q3.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">Lunch</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q3.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- Impressions -->
                    <?php if($Data[3] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../Impressions\">
                        <div class=\"view overlay \">
                    <img src=\"img/q4.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">Impressions</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q4.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- Zone -->
                    <?php if($Data[4] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../Zone\">
                        <div class=\"view overlay \">
                    <img src=\"img/q5.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">Zone</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q5.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- ChaosPages -->
                    <?php if($Data[5] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../ChaosPages\">
                        <div class=\"view overlay \">
                    <img src=\"img/q6.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">ChaosPages</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q6.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- UnopenedBox -->
                    <?php if($Data[6] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../UnopenedBox\">
                        <div class=\"view overlay \">
                    <img src=\"img/q7.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">UnopenedBox</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q7.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- MiniatureGarden -->
                    <?php if($Data[7] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../MiniatureGarden\">
                        <div class=\"view overlay \">
                    <img src=\"img/q8.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">MiniatureGarden</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q8.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- Phenomenon -->
                    <?php if($Data[8] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../Phenomenon\">
                        <div class=\"view overlay \">
                    <img src=\"img/q9.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">Phenomenon</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q9.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- LogicCircuit -->
                    <?php if($Data[9] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../LogicCircuit\">
                        <div class=\"view overlay \">
                    <img src=\"img/q10.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">LogicCircuit</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q10.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- ExtremeWord -->
                    <?php if($Data[10] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../ExtremeWord\">
                        <div class=\"view overlay \">
                    <img src=\"img/q11.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">ExtremeWord</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q11.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- Arcana -->
                    <?php if($Data[11] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../Arcana\">
                        <div class=\"view overlay \">
                    <img src=\"img/q12.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">Arcana</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q12.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- NumberLink -->
                    <?php if($Data[12] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../NumberLink\">
                        <div class=\"view overlay \">
                    <img src=\"img/q13.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">NumberLink</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q13.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- Oznabrag -->
                    <?php if($Data[13] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../Oznabrag\">
                        <div class=\"view overlay \">
                    <img src=\"img/q14.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">Oznabrag</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q14.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <!-- Song -->
                    <?php if($Data[14] != 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"../Song\">
                        <div class=\"view overlay \">
                    <img src=\"img/q15.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <h3 class=\"white-text\">Song</h3>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a>
                        <div class=\"view\">
                    <img src=\"img/q15.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>


                </div>
            </div>

        <!-- Form -->

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