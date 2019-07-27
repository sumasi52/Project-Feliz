<?php

$time = date("Y/m/d H:i:s");
$blank = "<>";
$filename = '../status.txt';


$str = file('../status.txt');//テキストを配列として読み込み

$fp = fopen($filename, 'w');
fwrite($fp,"");//データをテキストに書き込み
fclose($fp);
$Data = explode($blank,$str[0]);	//受け取ったデータを分割して配列化
$Data[2]=1;

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

<body>

<!-- Start your project here-->
<!-- Material form login -->
<div class="main bg-dark">
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign in</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!">

            <!-- Email -->
            <div class="md-form">
                <input type="email" id="materialLoginFormEmail" class="form-control">
                <label for="materialLoginFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialLoginFormPassword" class="form-control">
                <label for="materialLoginFormPassword">Password</label>
            </div>

            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                        <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                    </div>
                </div>
                <div>
                    <!-- Forgot password -->
                    <a href="">Forgot password?</a>
                </div>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            <!-- Register -->
            <p>Not a member?
                <a href="">Register</a>
            </p>

            <div class="container-fluid">
                <div class="row">
                    <?php if($Data[0] == 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view overlay \">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <p class=\"white-text\">Color</p>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view\">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <?php if($Data[1] == 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view overlay \">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <p class=\"white-text\">Light overlay</p>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view\">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <?php if($Data[2] == 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view overlay \">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <p class=\"white-text\">Light overlay</p>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view\">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <?php if($Data[3] == 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view overlay \">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <p class=\"white-text\">Color</p>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view\">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <?php if($Data[4] == 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view overlay \">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <p class=\"white-text\">Color</p>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view\">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
                        <div class=\"mask pattern-6 flex-center\">
                        </div>
                         </div>
                        </a>
                    </div>
                    ");} ?>

                    <?php if($Data[5] == 0){echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view overlay \">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"\" >
                        <div class=\"mask flex-center rgba-blue-light\">
                            <p class=\"white-text\">Color</p>
                        </div>
                    </div>
                        </a>
                    </div>
                    ");}else{echo("
                    <div class=\"col-md-4 col-sm-6 px-1 py-1\">
                        <a href=\"http://localhost/15puzzle\">
                        <div class=\"view\">
                    <img src=\"https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg\" class=\" img-fluid \" alt=\"smaple image\" >
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