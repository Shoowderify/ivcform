<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formularios ICV</title>
        <link rel="stylesheet" href="<?=base_url?>/assets/css/styles.css?v=<?php echo time(); ?>"              
    </head>
    <body>
        <div id="container">
            <!-- CABECERA-->
            <header id="header">
                <div id="logo">
                    Formularios ICV
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
                            <a href="<?=base_url?>formulario/index">
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
                            <a href="<?=base_url?>usuario/inicio">
                                Iniciar sesion
                            </a>              
                        </li>
                        <li>
                            <a href="<?=base_url?>?controller=usuario&action=registro">
                                Registrarse
                            </a>               
                        </li>
                        <?php else: ?>
                        <li><h3><?=$_SESSION['identity']->nombre?></h3></li>
                        <li>
                            <a href="<?=base_url?>formulario/registro">
                                Mis registros
                            </a>              
                        </li>
                        <?php endif;?>
                        
                        <li>
                            <a href="<?=base_url?>usuario/logout">
                                Cerrar sesion
                            </a>               
                        </li>
                        

                    </ul>
                </nav>
                <div id="title">
                    Formularios ICV
                </div>
            </header>
            
            <div id="content">