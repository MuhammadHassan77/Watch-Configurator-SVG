<?php
require_once("./func.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/72a9c1090f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./img/favicon.png">

    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">
    <link href="./scss/mystyle.css" rel="stylesheet">

    <title>Watch</title>
    <style>
        svg,
        svg#newWatch {
            width: 100%;
            height: 100vh;
            /* transform: scale(1.6); */
            transform: scale(1);
        }

        .dot-menu {
            right: 20%;
        }

        @media screen and (max-width: 576px) {
            .dot-menu {
                right: 0%;
            }
        }
    </style>
</head>

<body style="overflow: hidden;">
    <!-- PAGE LOADER -->
    <div id="loader">
        <div class="loading-page">
            <div class="counter text-white text-center">
                <h2>Loading Model</h2>
                <h1>0%</h1>
                <hr style="width: 100%;height:5px;color:red;">
            </div>
        </div>
    </div>
    <!-- PAGE LOADER END -->

    <!-- start-header -->
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0">
            <div class="logo-text-1">Mwnn</div>

        </div>
    </div>
    <!-- end-header -->
    <!-- start-container -->
    <div class="container-fluid p-0 m-0" style="position: absolute;top: 0;">
        <div class="canvas-div p-0 m-0">

            <!-- start-dot-menu -->
            <div class="dot-menu">
                <div class="dropdown config-drp dropstart">
                    <a class="btn p-0 m-0 w-100" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="dot-btn">
                            <img src="img/plus2.svg" class="img-fluid plus2 mx-auto">
                            <img src="img/plus.svg" class="img-fluid plus1">
                            <p>Configure</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dot" aria-labelledby="dropdownMenuLink" style="overflow-y:scroll;">
                        <li><a data-watch="#Case" class="dropdown-item newControl" href="javascript:void(0)">Case</a></li>
                        <li><a data-watch="#Winder" class="dropdown-item newControl" href="javascript:void(0)">Winder</a></li>
                        <li><a data-watch="#Strap" class="dropdown-item newControl" href="javascript:void(0)">Strap</a></li>
                        <li><a data-watch="#Bezel" class="dropdown-item newControl" href="javascript:void(0)">Bezel</a></li>
                        <li><a data-watch="#Bezel_number" class="dropdown-item newControl" href="javascript:void(0)">Bezel Number</a></li>
                        <li><a data-watch="#Face" class="dropdown-item newControl" href="javascript:void(0)">Face</a></li>
                        <!-- <li><a data-watch="#Date" class="dropdown-item newControl" href="javascript:void(0)">Date</a></li> -->
                        <li><a data-watch="#secondmark" class="dropdown-item newControl" href="javascript:void(0)">Second Mark</a></li>
                        <li><a data-watch="#Lowertext" class="dropdown-item newControl" href="javascript:void(0)">Lower Text</a></li>
                        <li><a data-watch="#middle_text" class="dropdown-item newControl" href="javascript:void(0)">Middle Text</a></li>
                        <li><a data-watch="#Uppertext" class="dropdown-item newControl" href="javascript:void(0)">Upper Text</a></li>
                        <li><a data-watch="#Hourmark" class="dropdown-item newControl" href="javascript:void(0)">Hour Mark</a></li>
                        <li><a data-watch="#Hour_mark_lumi" class="dropdown-item newControl" href="javascript:void(0)">Hour Mark Lumi</a></li>
                        <li><a data-watch="#Min_hand" class="dropdown-item newControl" href="javascript:void(0)">Minute Hand</a></li>
                        <li><a data-watch="#Hour_hand" class="dropdown-item newControl" href="javascript:void(0)">Hour Hand</a></li>
                        <li><a data-watch="#Hands_lumi" class="dropdown-item newControl" href="javascript:void(0)">Hand Lumi</a></li>
                        <li><a data-watch="#Second_hand" class="dropdown-item newControl" href="javascript:void(0)">Second Hand</a></li>
                        <li><a data-watch="#Bolt" class="dropdown-item newControl" href="javascript:void(0)">Bolt</a></li>
                        <li><a data-watch="#Sub_rim" class="dropdown-item newControl" href="javascript:void(0)">Sub Ring</a></li>
                        <li><a data-watch="#Crown" class="dropdown-item newControl" href="javascript:void(0)">Crown</a></li>
                        <li><a data-watch="#Submark" class="dropdown-item newControl" href="javascript:void(0)">Sub Mark</a></li>
                        <li><a data-watch="#Sub_hand" class="dropdown-item newControl" href="javascript:void(0)">Sub Hand</a></li>
                    </ul>
                </div>
            </div>
            <!-- end-dot-menu -->

            <div class="row p-0 m-0 justify-content-center">
                <div id="myCanvas" class="col-sm-12 col-md-8 d-flex justify-content-center align-items-center">
                    <div id="desk-sx" class="col-md-6 col-sm-12 tail justify-content-center align-items-center">

                    </div>
                </div>
            </div>

            <!-- OVERLAYED WATCH SVG END -->
        </div>
    </div>


    <div class="color-popup" style="display:none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Colors</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #751113"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #ff1e26"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #ff6600"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #feba27"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #ffff01"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #0d4f21"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #65ff00"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #47d4e5"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #4f8dfe"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #013ba7"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #ddb168"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #976005"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #8e00ce"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #dc0058"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #ffa7cf"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #ff4864"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #ffffff"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #c0c0c0"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #9a9a9a"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #4e2700"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #000000"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #F4CC71"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 applyClr">
                    <div class="color-box" style="background-color: #F2B28F"></div>
                </div>
            </div>

        </div>
    </div>


    <!-- end-container -->

    <!-- start-left-icons -->
    <div class="icon-main">
        <div class="row p-0 m-0">

            <div class="col-12 zoom-btns p-0 m-0 " id="zoomIn">
                <i class="fas fa-plus"></i>
            </div>

            <div class="col-12 zoom-btns p-0 m-0" id="zoomOut">
                <i class="fas fa-minus"></i>
            </div>

            <div class="col-12 icons1 p-0 m-0">
                <img src="img/plus.svg" class="img-fluid zoom-op w-75">
            </div>

            <div class="col-12 icons1 p-0 m-0 resetCanvas">
                <img src="img/reset.png" class="img-fluid w-75">
            </div>

            <div class="col-12 icons1 p-0 m-0 createLink">
                <i class="fa fa-globe"></i>
            </div>

            <div class="col-12 icons1 p-0 m-0 screenShotBtn">
                <img src="img/download.svg" class="img-fluid w-75">
            </div>

            <div class="col-12 icons1 p-0 m-0">
                <p class="logo-text p-0 m-0">Mwnn</p>
            </div>

        </div>
    </div>
    <!-- end-left-icons -->

    <!-- HIDDEN FIElDS -->
    <input type="hidden" id="skullDetails" value='<?= !empty($skull) ? $skull : '' ?>'>

    <!-- HIDDEN FIElDS -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- <script src="./js/main.js"></script> -->
    <script src="./newmyjs.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/html2canvas.js"></script>
    <script src="./js/canvas2image.js"></script>

</body>

<!-- SCREEN SHOT AND SCREEN RESET FUNCTION -->
<script>
    $(document).ready(() => {
        function getSvgData() {
            let c = 0;
            let i = setInterval(function() {
                $(".loading-page .counter h1").html(c + "%");
                $(".loading-page .counter hr").css("width", c + "%");
                c++;
                if (c == 101) {
                    clearInterval(i);
                    $("#loader").hide();
                }
            }, 40);

            // $.get(`Ai sub.svg`, null, function(data) {
            $.get(`Daytona.svg`, null, function(data) {
                let svgdata = $(data).find("svg")[0];
                // console.log(svgdata);
                $("#desk-sx").append(svgdata);
                localStorage.setItem("watchSvg", svgdata);
            });
        }
        getSvgData();

        // FOR DAYTONA
        $(document).on("click", ".applyClr", function() {
            let Id = $(this).find(".color-box").attr("data-id");
            let clr = $(this).find(".color-box").css("background-color");
            console.log(Id, clr)
            if (Id == "#Case") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Winder") {
                $(`svg g${Id} path,svg g${Id} g`).attr("fill", clr);
            } else if (Id == "#Strap") {
                $(`svg g${Id} path,svg g${Id} g`).attr("fill", clr);
            } else if (Id == "#Bezel") {
                $(`svg g${Id},svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Bezel_number") {
                $(`svg g${Id},svg g${Id} g,svg g${Id} path,svg g${Id} polygon`).attr("fill", clr);
            } else if (Id == "#Face") {
                $(`svg g${Id} circle`).attr("fill", clr);
            } else if (Id == "#secondmark") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#sub_ring") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Sub_rim") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Submark") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Lowertext") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#middle_text") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Uppertext") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Crown") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Hourmark") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Hour_mark_lumi") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Sub_hand") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Min_hand") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Hour_hand") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Hands_lumi") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Second_hand") {
                $(`svg g${Id} path`).attr("fill", clr);
            } else if (Id == "#Bolt") {
                $(`svg g${Id} circle, svg g${Id} polygon, svg g${Id} path`).attr("fill", clr);
            }
        })

        // FOR SUBMINER
        // $(document).on("click", ".applyClr", function() {
        //     let Id = $(this).find(".color-box").attr("data-id");
        //     let clr = $(this).find(".color-box").css("background-color");
        //     console.log(Id, clr)
        //     if (Id == "#Case") {
        //         $(`svg g${Id}`).attr("fill", clr);
        //         // $(`svg g${Id}`).find("g,path,polygon,circle,rect").attr("fill", clr);
        //     } else if (Id == "#Winder") {
        //         $(`svg g${Id} path`).attr("fill", clr);
        //     } else if (Id == "#Strap") {
        //         $(`svg g${Id} path`).attr("fill", clr);
        //     } else if (Id == "#Bezel") {
        //         $(`svg g${Id}`).attr("fill", clr);
        //     } else if (Id == "#Bezel_number") {
        //         // $(".color-popup").find(".color-box").attr("data-id", "#Bezel_number");
        //     } else if (Id == "#Face") {
        //         $(`svg g${Id} circle`).attr("fill", clr);
        //     } else if (Id == "#Date") {
        //         $(`svg g${Id} path`).attr("fill", clr); //for number
        //         // $(`svg g${Id} rect`).attr("fill", clr); //for background
        //     } else if (Id == "#secondmark") {
        //         $(`svg g${Id} path`).attr("fill", clr);
        //     } else if (Id == "#Lowertext") {
        //         $(`svg g${Id} path, svg g${Id} polygon, svg g${Id} rect`).attr("fill", clr);
        //     } else if (Id == "#middle_text") {
        //         $(`svg g${Id} path, svg g${Id} polygon, svg g${Id} rect`).attr("fill", clr);
        //     } else if (Id == "#Uppertext") {
        //         $(`svg g${Id} path, svg g${Id} polygon, svg g${Id} rect`).attr("fill", clr);
        //     } else if (Id == "#Hourmark") {
        //         $(`svg g${Id} path`).attr("fill", clr);
        //     } else if (Id == "#Hour_mark_lumi") {
        //         $(`svg g${Id} circle, svg g${Id} polygon, svg g${Id} rect`).attr("fill", clr);
        //     } else if (Id == "#Min_hand") {
        //         $(`svg g${Id} path`).attr("fill", clr);
        //     } else if (Id == "#Hour_hand") {
        //         $(`svg g${Id} path`).attr("fill", clr);
        //     } else if (Id == "#Hands_lumi") {
        //         $(`svg g${Id} circle, svg g${Id} polygon, svg g${Id} path`).attr("fill", clr);
        //     } else if (Id == "#Second_hand") {
        //         $(`svg g${Id} path`).attr("fill", clr);
        //     } else if (Id == "#Bolt") {
        //         $(`svg g${Id} circle, svg g${Id} polygon, svg g${Id} path`).attr("fill", clr);
        //     }
        // })

        $(document).on("click", ".newControl", function() {
            // $(".color-popup").hide();
            let Id = $(this).attr("data-watch");
            let clr = $(this).find(".color-box").css("background-color");
            $("p.com-name").text($(this).text());
            console.log(Id);
            // setTimeout(() => , 600);
            $(".color-popup").show()
            $(".color-popup").find(".color-box").removeClass("active-clr");
            $(".color-popup").find(".color-box").attr("data-id", Id);

        })

        $(document).on("click", ".resetCanvas", function() {
            $("#zoomOut").trigger("click");
            $(this).css("background-color", "inherit");
        })

        // Screen Shot Function
        document.querySelector('.screenShotBtn').addEventListener('click', function() {
            $("#zoomOut").trigger("click");
            $("#loader").show();
            let c = 0;
            let i = setInterval(function() {
                $(".loading-page .counter h1").html(c + "%");
                $(".loading-page .counter hr").css("width", c + "%");
                c++;
                if (c == 101) {
                    clearInterval(i);
                    $("#loader").hide();
                }
            }, 40);

            setTimeout(() => {
                html2canvas(document.getElementById("desk-sx"), {
                    backgroundColor: null
                }).then(function(canvas) {
                    document.body.appendChild(canvas);
                    Canvas2Image.saveAsPNG(canvas);
                    document.body.removeChild(canvas);
                    $("#loader").addClass("d-none");
                });
            }, 1500);
        });
    });
</script>

</html>
<!-- 
        DAYTONA
        Case
        Winder
        Strap
        Bezel
        Bezel_number
        Face
        secondmark
        sub_ring
        Sub_rim
        Submark
        Lowertext
        middle_text
        uppertext
        Crown
        hourmark
        Hour_mark_lumi
        Sub_hand
        Hour_hand
        Min_hand
        Second_hand
        Hands_lumi
        Bolt 
    -->