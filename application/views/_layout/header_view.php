<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASE_URL;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo BASE_URL;?>assets/css/clean-blog.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo BASE_URL;?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo BASE_URL?>home">Home</a>
                    </li>
                    <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']): ?>
                    <li>
                        <a href="<?php echo BASE_URL?>blog/post">Post</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL?>login/logout">Logout</a>
                    </li>
                    <?php else: ?>    
                    <li>
                        <a href="<?php echo BASE_URL?>login">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL?>login/register">Register</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
