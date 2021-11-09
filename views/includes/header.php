<!DOCTYPE html>
<html>
<head>
    <title>Climate</title>
    <meta charset="utf-8" />
    <link href="<?php echo BASE; ?>css/style.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

<header>
    <div class="wrap w90 center itemsFlex alignCenter justSpaceBetween">
        <div class="col w30">
            <?php if($slug != 'days-time'){ ?>
            <a class="iconButton" href="<?php echo BASE; ?>days-time"><i data-feather="grid" class="iconSmall"></i></a>
            <?php }if($slug === 'days-time'){ ?>
                <a class="iconButton" href="javascript:history.back()"><i data-feather="arrow-left" class="iconSmall"></i></a>
            <?php } ?>
        </div>
        <div class="col w30  itemsFlex alignBaseline justCenter">
            <a class="marginRightDefault"><i data-feather="map-pin" class="iconSmall"></i></a>
            <h5><?php echo $_SESSION['city']; ?></h5>
        </div>
        <div class="col w30 textRight positionRelative">
            <a class="toggle"><i data-feather="more-vertical"></i></a>
            <nav class="menu flexWrap hide">
                <?php if(isset($_SESSION['login'])){ ?>
                <li class="w100 textCenter marginDownSmallIn"><a><?php echo $_SESSION['name']; ?></a></li>
                <li class="w100 textCenter marginDownSmallIn"><a><?php echo $_SESSION['city']; ?></a></li>
                <?php 
                    if(isset($_GET['logout'])){
                        \models\userModel::logout();
                    }
                ?>
                <li class="w100 textCenter marginDownSmallIn"><a href="?logout">Sair</a></li>
                <?php }else{ ?>
                    <li class="w100 textCenter marginDownSmallIn"><a href="<?php echo BASE; ?>login">Logar</a></li>
                <?php } ?>
            </nav>
        </div>
    </div>
</header>
