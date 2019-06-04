<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CantIF</title>
    <link rel="shortcut icon" href="../IMG/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="../cantina.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<!-- 01 HEADER -->
        <header class="menu-bg">
        <div class="menu">
            <div class="menu-logo">
                <a href="index.php">Projeto CantIF</a>
            </div>
            <nav class="menu-nav">
                <ul>
                    <!-- <li><a href="#">Opção1</a></li>
                    <li><a href="#">Opção2</a></li>
                    <li><a href="#">Opção3</a></li> -->
                    <li><a href="perfil.php"><?php echo $_SESSION['nome'];?></a></li>
                    <img src="../IMG/logo.png" class="titleimg">
                    <li><a href="../logout.php">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>