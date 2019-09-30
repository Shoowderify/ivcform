<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formularios ICV</title>
        <link rel="stylesheet" href="<?=base_url?>/assets/css/styles.css?v=<?php echo time(); ?>"    
              		<!--PARA color-->
		<meta name="theme-color" content="#fff"/>

		<!-- Optimizacion para movil-->
		<meta name="MobileOptimized" content="width"/>
		<meta name="HandheldFriendly" content="true"/>
		<!--PARA APpLE-->
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<link rel="apple-touch-icon" href="img/favicon.png"/>
		<link rel="apple-touch-startup-image" href="img/favicon.png"/>
		<!--conf general-->
		<link rel="manifest" href="manifest.json"/>
    </head>
    <body>
        <div id="container">
            <!-- CABECERA-->
            <header id="header">
                <div id="logo">
                    ICV FAENA ANDINA
                </div>
                <!-- MENU -->
                <nav id="menu">
                    <ul>
                        <li>
                            <a href="<?=base_url?>index.php">
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url?>Formulario/index">
                                Report
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Checklist
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Fatiga y somnolencia
                            </a>
                        </li>
                        <?php if(!isset($_SESSION['identity'])):?>
                        <li>
                            <a href="<?=base_url?>Usuario/inicio">
                                Iniciar sesion
                            </a>              
                        </li>
                        <li>
                            <a href="<?=base_url?>?controller=Usuario&action=registro">
                                Registrarse
                            </a>               
                        </li>
                        <?php else: ?>
                        <li><h3><?=$_SESSION['identity']->nombre?></h3></li>
                        <li>
                            <a href="<?=base_url?>Formulario/registro">
                                Mis registros
                            </a>              
                        </li>
                         <li>
                            <a href="<?=base_url?>Usuario/logout">
                                Cerrar sesion
                            </a>               
                        </li>
                        <?php endif;?>
                        
                       
                        

                    </ul>
                </nav>
                <div id="title">
                    ICV FAENA ANDINA
                </div>
            </header>
            
            <div id="content">
