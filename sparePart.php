<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="pic/favicon.ico">
        
        <title>อะไหล่ - ระบบบริหารอู่ซ่อมรถ - บริษัท เนตรวชิรกุล จำกัด</title>
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="theme.css" rel="stylesheet">
        
        <style>
            * {
                font-family: 'Prompt', sans-serif;
            }
        </style>
    </head>

    <body>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  class="navbar-brand" href="index.php"> ระบบบริหารอู่ซ่อมรถ </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> หน้าแรก </a></li>
                        <li class="dropdown">
                            <a href="#A" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-folder-open"></span> ข้อมูล 
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="infoCustomer.php"><span class="glyphicon glyphicon-user"></span> ข้อมูลลูกค้า </a></li>
                                <li><a href="infoCar.php"><span class="glyphicon glyphicon-inbox"></span> ข้อมูลรถ </a></li>
                            </ul>
                        </li>
                        <li><a href="addCar.php"><span class="glyphicon glyphicon-pencil"></span> กรอกข้อมูล </a></li>
                        <li><a href="evaRepair.php"><span class="glyphicon glyphicon-list-alt"></span> ประเมินการซ่อม </a></li>
                        <li><a href="repair.php"><span class="glyphicon glyphicon-wrench"></span> ซ่อม </a></li>
                        <li><a href="quaCheck.php"><span class="glyphicon glyphicon-check"></span> ตรวจสอบคุณภาพ </a></li>
                        <li class="active"><a href="sparePart.php"><span class="glyphicon glyphicon-cog"></span> อะไหล่ </a></li>
                        <li class="dropdown">
                            <a href="#G" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-print"></span> พิมพ์รายงาน <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="carrcptPrint.php"><span class="glyphicon glyphicon-file"></span> ใบรับรถ </a></li>
                                <li><a href="spaorderPrint.php"><span class="glyphicon glyphicon-file"></span> ใบสั่งอะไหล่ </a></li>
                                <li><a href="contractPrint.php"><span class="glyphicon glyphicon-file"></span> ใบสัญญา </a></li>
                                <li><a href="billPrint.php"><span class="glyphicon glyphicon-file"></span> ใบเสร็จ </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container" style="margin-top: 50px ; text-align: center ">
            <h1>อะไหล่</h1>
        </div>
        
        
        
        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
