<?php
// require_once('./func.php');
// // Turn off all error reporting
// error_reporting(0);

// // Report simple running errors
// error_reporting(E_ERROR | E_WARNING);

// // session_start();
// // $foamColor = array("#4CBB17", "#FF4500", "#B4A472", "#800080", "#FF1493", "#00adef", "#000000", "#ff0000", "#1818fd", "#fdfdfd", "#008000", "#808080", "#ffff00", "#C00FF0", "#00ffff", "#228B22", "#800000", "#291506", "#291506", "#A9A9A9", "#191970", "#DAA520", "#C41E3A", "#ff0081");

// if (isset($_SESSION["id"]) && isset($_SESSION["email"])) {
//     // echo $_SESSION["email"];
//     // $btn = '<button class="btn btn-white h-50 mybtn buyNowBtn" data-toggle="modal"
//     // data-target="#order-modal">BUY NOW</button>';
//     $btn = '<button class="btn btn-white buyNowBtn mybtn" data-toggle="modal" data-target="#order-modal">BUY NOW <i class="fa fa-shopping-cart"></i></button>';
//     // $logoutBtn = '<button class="btn btn-white h-50 mybtn" id="logoutBtn" data-toggle="modal" data-target="#logout-modal">LOGOUT</button>';
//     // $changesBtn = '<button class="btn btn-white h-50 mybtn" id="createLink" data-toggle="modal" data-target="#changes-modal">SAVE CHANGES</button>';
// } else {
//     // echo $_SESSION["email"];
//     $btn = '<button class="btn btn-white h-50 mybtn buyNowBtn" data-toggle="modal"
//     data-target="#login-modal">LOGIN</button>';
//     // $logoutBtn = "";
//     // $changesBtn = "";
// }

// // FETCHING DATA ON BEHALF PARTICULAR ID
// if (!empty($_GET['id'])) {
//     $id = $_GET['id'];

//     $q = "SELECT * FROM savechanges WHERE id=" . $id;

//     $result = mysqli_query($mysqli, $q);

//     if ($result) {
//         foreach ($result as $rows) {
//             $color = $rows['color'];
//             $shape = $rows['shape'];
//             $foam = $rows['foam'];
//             $panel = $rows['panel'];
//             $size = $rows['size'];
//         }
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./logo.png" sizes="16x16" type="image/png">
    <link rel="icon" href="./logo.png">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <script src="https://kit.fontawesome.com/72a9c1090f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href='./css/style.css'>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <title>WATCH</title>
    <style type="text/css">
        .claraplayer span,
        .claraplayer svg {
            display: none !important;
        }

        .body-clr,
        .face-clr,
        .diamond-clr {
            font-size: 3.8vw;
            cursor: pointer !important;
        }
    </style>
</head>

<body>

    <!-- PAGE LOADER -->
    <div class="mdloading d-none">
        <div class="ld">
            <div class="loader"></div>
        </div>
        <div class="loading-page">
            <div class="counter">
                <p>Building Model</p>
                <h1>0%</h1>
                <hr style="width: 100%;">
            </div>
        </div>
    </div>
    <!-- PAGE LOADER END -->

    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-sm">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link p-0" data-tab="#body-opt">BODY</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link p-0" data-tab="#diamond-opt">DIAMOND </span>
                </li>
                <li class="nav-item">
                    <span class="nav-link p-0" data-tab="#face-opt">FACE </span>
                </li>
            </ul>
        </div>
        <a class="navbar-brand p-0 m-0" href="">
            <img class="brand-img" src="./logo.png" alt="">
        </a>
    </nav>
    <!-- NAVBAR END -->

    <!-- MAIN START -->
    <div class="container-fluid p-0">
        <div class="row p-0 m-0">

            <!-- SIDEBAR START -->
            <div class="col-3 m-0 p-0 sidebar">

                <!-- FOAM DIV -->
                <div class="col-12 p-0 optDiv d-none" data-id="body-opt" id="body-opt">
                    <div class="card">
                        <h5 class="card-header">BODY
                            <div class="closeBtn">&times;</div>
                        </h5>
                        <div class="card-body">
                            <div class="row p-0 m-0">
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle body-clr" data-color="#5b5b5b" style="color: #000000;"></i>
                                    <p class="mypara">BLACK</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle body-clr" data-color="#f4f4f4" style="color: #7b9095;"></i>
                                    <p class="mypara">STEEL</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle body-clr" data-color="#fccc95" style="color: #d4af37;"></i>
                                    <p class="mypara">GOLD</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle body-clr" data-color="#ffbfbf" style="color: #b76e79;"></i>
                                    <p class="mypara">ROSE GOLD</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOAM DIV -->

                <!-- COLOR OF SHAPE DIV -->
                <div class="col-12 p-0 optDiv d-none" data-id="face-opt" id="face-opt">
                    <div class="card">
                        <h5 class="card-header">FACE
                            <div class="closeBtn">&times;</div>
                        </h5>
                        <div class="card-body">
                            <div class="row p-0 m-0">
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#4CBB17" style="color: #4CBB17;"></i>
                                    <p class="mypara">LIGHT GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#FF4500" style="color: #FF4500;"></i>
                                    <p class="mypara">ORANGE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#B4A472" style="color: #B4A472;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#800080" style="color: #800080;"></i>
                                    <p class="mypara">PRUPLE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#FF1493" style="color: #FF1493;"></i>
                                    <p class="mypara">PINK</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#00adef" style="color: #00adef;"></i>
                                    <p class="mypara">LIGHT BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#000000" style="color: #000000;"></i>
                                    <p class="mypara">BLACK</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#ff0000" style="color: #ff0000;"></i>
                                    <p class="mypara">RED</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#1818fd" style="color: #1818fd;"></i>
                                    <p class="mypara">BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#fdfdfd" style="color: #fdfdfd;"></i>
                                    <p class="mypara">WHITE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#008000" style="color: #008000;"></i>
                                    <p class="mypara">GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#808080" style="color: #808080;"></i>
                                    <p class="mypara">GRAY</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#ffff00" style="color: #ffff00;"></i>
                                    <p class="mypara">YELLOW</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#C00FF0" style="color: #C00FF0;"></i>
                                    <p class="mypara">PURPLE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#00ffff" style="color: #00ffff;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#228B22" style="color: #228B22;"></i>
                                    <p class="mypara">LIGHT GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#800000" style="color: #800000;"></i>
                                    <p class="mypara">MAROON</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#291506" style="color: #291506;"></i>
                                    <p class="mypara">DARK BROWN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#291506" style="color: #291506;"></i>
                                    <p class="mypara">BROWN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#A9A9A9" style="color: #A9A9A9;"></i>
                                    <p class="mypara">SILVER</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#191970" style="color: #191970;"></i>
                                    <p class="mypara">DARK BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#DAA520" style="color: #DAA520;"></i>
                                    <p class="mypara">LIGHT YELLOW</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#C41E3A" style="color: #C41E3A;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle diamond-clr" data-color="#ff0081" style="color: #ff0081;"></i>
                                    <p class="mypara">LIGHT PINK</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- COLOR OF SHAPE DIV -->

                <!-- COLOR OF SHAPE DIV -->
                <div class="col-12 p-0 optDiv d-none" data-id="diamond-opt" id="diamond-opt">
                    <div class="card">
                        <h5 class="card-header">DIAMOND
                            <div class="closeBtn">&times;</div>
                        </h5>
                        <div class="card-body">
                            <div class="row p-0 m-0">
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#4CBB17" style="color: #4CBB17;"></i>
                                    <p class="mypara">LIGHT GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#FF4500" style="color: #FF4500;"></i>
                                    <p class="mypara">ORANGE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#B4A472" style="color: #B4A472;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#800080" style="color: #800080;"></i>
                                    <p class="mypara">PRUPLE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#FF1493" style="color: #FF1493;"></i>
                                    <p class="mypara">PINK</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#00adef" style="color: #00adef;"></i>
                                    <p class="mypara">LIGHT BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#000000" style="color: #000000;"></i>
                                    <p class="mypara">BLACK</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#ff0000" style="color: #ff0000;"></i>
                                    <p class="mypara">RED</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#1818fd" style="color: #1818fd;"></i>
                                    <p class="mypara">BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#fdfdfd" style="color: #fdfdfd;"></i>
                                    <p class="mypara">WHITE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#008000" style="color: #008000;"></i>
                                    <p class="mypara">GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#808080" style="color: #808080;"></i>
                                    <p class="mypara">GRAY</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#ffff00" style="color: #ffff00;"></i>
                                    <p class="mypara">YELLOW</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#C00FF0" style="color: #C00FF0;"></i>
                                    <p class="mypara">PURPLE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#00ffff" style="color: #00ffff;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#228B22" style="color: #228B22;"></i>
                                    <p class="mypara">LIGHT GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#800000" style="color: #800000;"></i>
                                    <p class="mypara">MAROON</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#291506" style="color: #291506;"></i>
                                    <p class="mypara">DARK BROWN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#291506" style="color: #291506;"></i>
                                    <p class="mypara">BROWN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#A9A9A9" style="color: #A9A9A9;"></i>
                                    <p class="mypara">SILVER</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#191970" style="color: #191970;"></i>
                                    <p class="mypara">DARK BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#DAA520" style="color: #DAA520;"></i>
                                    <p class="mypara">LIGHT YELLOW</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#C41E3A" style="color: #C41E3A;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle face-clr" data-color="#ff0081" style="color: #ff0081;"></i>
                                    <p class="mypara">LIGHT PINK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLOR OF SHAPE DIV -->

                <!-- COLOR OF PANEL DIV -->
                <!-- <div class="col-12 p-0 optDiv d-none" data-id="panel-opt" id="panel-opt">
                    <div class="card">
                        <h5 class="card-header">PANEL
                            <div class="closeBtn">&times;</div>
                        </h5>
                        <div class="card-body">
                            <div class="row p-0 m-0">
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#4CBB17" style="color: #4CBB17;"></i>
                                    <p class="mypara">LIGHT GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#FF4500" style="color: #FF4500;"></i>
                                    <p class="mypara">ORANGE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#B4A472" style="color: #B4A472;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#800080" style="color: #800080;"></i>
                                    <p class="mypara">PRUPLE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#FF1493" style="color: #FF1493;"></i>
                                    <p class="mypara">PINK</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#00adef" style="color: #00adef;"></i>
                                    <p class="mypara">LIGHT BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#000000" style="color: #000000;"></i>
                                    <p class="mypara">BLACK</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#ff0000" style="color: #ff0000;"></i>
                                    <p class="mypara">RED</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#1818fd" style="color: #1818fd;"></i>
                                    <p class="mypara">BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#fdfdfd" style="color: #fdfdfd;"></i>
                                    <p class="mypara">WHITE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#008000" style="color: #008000;"></i>
                                    <p class="mypara">GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#808080" style="color: #808080;"></i>
                                    <p class="mypara">GRAY</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#ffff00" style="color: #ffff00;"></i>
                                    <p class="mypara">YELLOW</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#C00FF0" style="color: #C00FF0;"></i>
                                    <p class="mypara">PURPLE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#00ffff" style="color: #00ffff;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#228B22" style="color: #228B22;"></i>
                                    <p class="mypara">LIGHT GREEN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#800000" style="color: #800000;"></i>
                                    <p class="mypara">MAROON</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#291506" style="color: #291506;"></i>
                                    <p class="mypara">DARK BROWN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#291506" style="color: #291506;"></i>
                                    <p class="mypara">BROWN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#A9A9A9" style="color: #A9A9A9;"></i>
                                    <p class="mypara">SILVER</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#191970" style="color: #191970;"></i>
                                    <p class="mypara">DARK BLUE</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#DAA520" style="color: #DAA520;"></i>
                                    <p class="mypara">LIGHT YELLOW</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#C41E3A" style="color: #C41E3A;"></i>
                                    <p class="mypara">CYAN</p>
                                </div>
                                <div class="col-4 text-center effect">
                                    <i class="fa fa-circle panel-circle" data-color="#ff0081" style="color: #ff0081;"></i>
                                    <p class="mypara">LIGHT PINK</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->
                <!-- COLOR OF PANEL DIV -->

                <!-- SHAPE DIV -->
                <!-- <div class="col-12 p-0 optDiv d-none" data-id="shape-opt" id="shape-opt">
                    <div class="card">
                        <h5 class="card-header">SHAPES
                            <div class="closeBtn">&times;</div>
                        </h5>
                        <div class="card-body">
                            <div class="row p-0 m-0">
                                <div class="col-6 text-center">
                                    <img class="shape-box" src="./img/foam.png" data-shape="http://3dsium.com/foam/img/panesl.png" style="width: 6vw;">
                                    <p class="mypara">SHAPE 01</p>
                                </div>
                                <div class="col-6 text-center">
                                    <img class="shape-box" src="./img/foam.png" data-shape="http://3dsium.com/foam/img/panesl.png" style="width: 6vw;">
                                    <p class="mypara">SHAPE 02</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- SHAPE DIV -->
            </div>

        </div>
        <!-- SIDEBAR END -->

        <!-- CANVAS START -->
        <div class="col-9 p-0 m-0 canvas-div">
            <!-- <div class="closeBtn">&times;</div> -->

            <div id="clara-embed" style="width: 100%; height: 676px;"></div>
            <script src="https://clara.io/js/claraplayer.min.js"></script>
            <script src="./js/var.js"></script>
            <script>
                var clara = claraplayer('clara-embed');
                clara.on('loaded', function() {
                    console.log('Clara player is loaded and ready');
                    $('.mdloading').hide();
                });
                // Fetch and initialize the sceneId
                clara.sceneIO.fetchAndUse(model_id);
            </script>

        </div>
        <!-- CANVAS END -->
    </div>
    </div>
    <!-- MAIN START -->

    <!-- HIDDEN INPUTS FOR COLOR, SHAPE, FOAM -->

    <!-- ORDER MODAL -->
    <div class="modal fade" id="order-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enquiry Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="enquiryForm" action="./func.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="enquiryNotify"></div>
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" />
                        </div>
                        <div class="form-group">
                            <label for="enquiryEmail">Email address</label>
                            <input type="email" class="form-control" id="enquiryEmail" name="enquiryEmail" />
                        </div>
                        <div class="form-group">
                            <label for="contactNumber">Contact Number</label>
                            <input type="text" class="form-control" id="contactNumber" name="contactNumber" />
                        </div>
                        <div class="custom-file mb-4">
                            <input type="file" class="custom-file-input" id="uploadImage" name="uploadImage">
                            <label class="custom-file-label" for="uploadImage">Choose file</label>
                        </div>
                        <div class="form-group">
                            <label for="enquiryDetail">Enquiry Detail</label>
                            <textarea class="form-control" id="enquiryDetail" name="enquiryDetail" rows="3" style="resize:none;"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary mybtn2" id="enquiryBtn">Enquiry</button>
                        <button type="button" class="btn btn-outline-secondary mybtn2" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ORDER MODAL END -->

    <!-- LOGIN MODAL -->
    <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="loginNotify"></div>
                    <div class="form-group">
                        <label for="loginEmail">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" />
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary mybtn2" id="loginBtn">Login</button>
                    <button type="button" class="btn btn-outline-secondary mybtn2" data-dismiss="modal" data-toggle="modal" data-target="#register-modal">Register</button>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN MODAL END -->

    <!-- REGISTER MODAL -->
    <div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="registerNotify"></div>
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" />
                    </div>
                    <div class="form-group">
                        <label for="registerEmail">Email address</label>
                        <input type="email" class="form-control" id="registerEmail" name="registerEmail" />
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" class="form-control" id="registerPassword" name="registerPassword" />
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone #</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary mybtn2" id="registerBtn">Register</button>
                    <button type="button" class="btn btn-outline-secondary mybtn2" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- REGISTER MODAL END -->

    <!-- CHANGES MODAL -->
    <div class="modal fade" id="changes-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Save Changes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="changesNotify"></div>
                    <div class="form-group">
                        <label for="saveChanges">Click Ok to open with Save Changes.</label>
                        <input type="text" class="form-control" id="saveChanges" readonly />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary mybtn2" id="applyChangesBtn">Ok</button>
                    <button type="button" class="btn btn-outline-secondary mybtn2" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- CHANGES MODAL END -->

    <!-- LOGOUT MODAL -->
    <div class="modal fade" id="logout-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="h5 text-success">Logout Successfully!!</h5>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary mybtn2" id="applyChangesBtn">Ok</button>
                    <button type="button" class="btn btn-outline-secondary mybtn2" data-dismiss="modal">Cancel</button>
                </div> -->
            </div>
        </div>
    </div>
    <!-- LOGOUT MODAL END -->

    <!-- UPLOAD NEW MODEL MODAL -->
    <div class="modal fade" id="upload-model-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Model</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="uploadModelForm" action="./func.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="uploadModelNotify"></div>
                        <p class="mypara">Upload Only png file</p>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadModelImg" name="uploadModelImg">
                            <label class="custom-file-label" for="uploadModelImg">Choose file</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary mybtn2" id="uploadModelBtn">Upload</button>
                        <button type="button" class="btn btn-outline-secondary mybtn2" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- UPLOAD NEW MODEL MODAL END -->

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<script src="./js/app.js"></script>
<script src="./js/func.js"></script>
<script src="./js/bitcolor.js"></script>

</html>