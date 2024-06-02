<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../assets/img/logo.png">
	<title>MAILFLOW</title>
	<link rel="stylesheet" href="../../assets/fontawesome-5.10.2/css/all.css">
	<link rel="stylesheet" href="../../assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
	<style>
        .img-circle {
            width: 150px;
            height: 150px;
            border-radius: 100%;
        }

        .navbar-custom {
            background-color: pink;
        }

        .navbar-custom .nav-link {
            color: black;
        }

        .navbar-custom .navbar-toggler-icon {
            filter: invert(100%);
        }

        .btn-custom {
            background-color: white;
            color: black;
            border-color: black;
        }

        .btn-custom:hover {
            background-color: #f0f0f0;
        }

        .btn-custom-login {
            color: black !important;
        }
    </style>
</head>
<body class="bg-light">
<div>
 	<navbar class="navbar navbar-expand-lg navbar-custom">
   	<a class="navbar-brand ml-4 mt-1" href="../../"><img src="../../assets/img/Logo.png"></a>
   	<button class="navbar-toggler mr-4 mt-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
   		<span class="navbar-toggler-icon"></span>
   	</button>

   	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
   		<ul class="navbar-nav ml-auto mt-lg-3 mr-5 position-relative text-right">
     		<li class="nav-item">
     			<a class="nav-link" href="../../">HOME</a>
     		</li>
     		<li class="nav-item active">
     			<a class="nav-link" href="#"><i class="fas fa-envelope"></i>&nbsp;BUAT SURAT</a>
     		</li>
     		<li class="nav-item">
     			<a class="nav-link" href="../../tentang/">TENTANG <b>MAILFLOW</b></a>
     		</li>
    		<li class="nav-item active ml-5">
          <?php
            session_start();

            if(empty($_SESSION['username'])){
                echo '<a class="btn btn-light text-info btn-custom-login" href="../../login/"><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</a>';
            }else if(isset($_SESSION['lvl'])){
              echo '<a class="btn btn-transparent text-light" href="../../admin/"><i class="fa fa-user-cog"></i> '; echo $_SESSION['lvl']; echo '</a>';
              echo '<a class="btn btn-transparent text-light" href="../../login/logout.php"><i class="fas fa-power-off"></i></a>';
            }
          ?>
        	</li>
   		</ul>
   	</div>
 	</navbar>
</div>