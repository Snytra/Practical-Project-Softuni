<!DOCTYPE html>
<html class="full" lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baj hui</title>




    <link href="<?=APP_ROOT?>/content/bootstrap.min.css" rel="stylesheet">
    <link href="<?=APP_ROOT?>/content/full.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/magnific-popup.css">

    <link href="fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>

<body id="page-top">


<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="<?=APP_ROOT?>" >
                <img class="img-responsive img-circle" src="<?=APP_ROOT?>/content/images/ps%20logo.jpg"  style="width: 65px;"><Photoshoot>Photoshoot.bg</Photoshoot>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li id="aboutUs">
                    <a class="page-scroll" href="#">За нас</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?=APP_ROOT?>/posts/uploadphoto">Галерия</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Портфолио</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Контакти</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?=APP_ROOT?>/users">Вход</a>
                </li>
                <?php if ($this->isLoggedIn) : ?>
                    <div id="logged-in-info">
                        <span>Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
                        <form method="post" action="<?=APP_ROOT?>/users/logout">
                            <input type="submit" value="Logout"/>
                        </form>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


