<?php
session_start();
// if(isset($_SESSION['login'])){
//     if($_SESSION['login'] != md5(session_id().'TuyMove')){
//         header( "location: login.php" );
//     }
// }else{
//      header( "location: login.php" );
// }
?>
<!DOCTYPE html>
<html lang="">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบสุ่มรางวัล</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation">

        <a class="navbar-brand" onclick="showWheel()" href="#"><img src="img/logo.png" alt="Image" width="25px"> Logout 27 Picker</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a onclick="showWheel()" href="#">Random</a>
            </li>
            <li>
                <a href="#" onclick="showRecent()">Show recent pick <span class="badge" id="recent-badge"></span></a>
            </li>
        </ul>
    </nav>



    <div class="container">



        <img src="img/lotto-static.png" onclick="lotto();" id="lotto-img" class="img-responsive center-block" alt="Image">
        <div id="recent-pick">

        </div>
    </div>


    <div class="modal fade" id="winner">
        <div class="modal-dialog center">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="modal-title text-center">ผู้โชคดีได้แก่หมายเลข</h1>
                    <p class="result text-center"></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>