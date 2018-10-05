<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo bloginfo(name) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/bootstrap-grid.min.css' ?>"> -->
    <link rel="stylesheet" href="<?php echo bloginfo(stylesheet_url) ?>">
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/normalize.css' ?>">
    <!-- <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/style-facturacion.css' ?>"> -->
	<link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/style-class-general.css' ?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo bloginfo(template_url).'/assets/css/menu.css' ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>

    <div class="slider fullscreen">
        <div class="menu-container">
            <div class="menu-container-children">
                <div class="top-menu">
                    <div style="position: absolute; width: 100%; height: fit-content; top: 45%;">
                        <div class="top-menu-text">Los mejores precios con todos los beneficios incluídos:</div>
                        <a class="top-menu-item"></a>
                        <a class="top-menu-item"></a>
                        <a class="top-menu-item"></a>
                        <a class="top-menu-item"></a>
                        <a class="top-menu-item"></a>
                        <a class="top-menu-item"></a>
                        <a class="top-menu-item"></a>
                    </div>
                </div>
                <div class="top-menu-left">
                    <a class="menu-desk-item" style="width: 120px !important; position: relative;">
                        <i class="material-icons" style="position: absolute; top: 8px; left: -2px;">lock</i>iniciar sesion
                    </a>
                    <a class="menu-desk-item" style="width: 120px !important;position: relative;">
                        <i class="material-icons" style="position: absolute; top: 8px; left: -2px;">account_circle</i>Registrarse</a>
                </div>
                <div class="logo-center"></div>
                <a class="mobile-menu sidenav-trigger" data-target="slide-out" class="sidenav-trigger">
                    <i class="material-icons" style="font-size: 45px; position: absolute;left: 2px;top: 2px;">menu</i>
                </a>
                <div class="menubar">
                    <div class="menu items">
                        <div class="center-menu-items">
                            <a class="menu-desk-item">Nosotros</a>
                            <a class="menu-desk-item">Pasadías</a>
                            <a class="menu-desk-item">Excursiónes</a>
                            <a class="menu-desk-item">Promociones</a>
                            <a class="menu-desk-item">Contacto</a>
                        </div>
                    </div>
                    <div class="menu items"></div>
                    <div class="menu">
                        <div class="center-search-items">
                            <div class="search">
                                <input type="text" class="search-input" placeholder="  Destino,pasadía, excursión">
                                <button type="submit" class="search-button">
                                    <i class="material-icons" style="position: absolute;left: 4px;top: 1px;">search</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="slides">
            <li>
                <img src="<?php echo bloginfo(template_url).'/assets/slides/1.jpg' ?>">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>1</h3>
                    <h5 class="light grey-text text-lighten-3">1</h5>
                </div>
            </li>
            <li>
                <img src="<?php echo bloginfo(template_url).'/assets/slides/2.jpg' ?>">
                <!-- random image -->
                <div class="caption right-align image-caption">
                    <img src="<?php echo bloginfo(template_url).'/assets/icons/FAMILIA.png' ?>" class="cap-image">
                </div>
            </li>
            <li>
                <img src="<?php echo bloginfo(template_url).'/assets/slides/3.png' ?>">
                <!-- random image -->
                <div class="caption right-align">
                    <h3>3</h3>
                    <h5 class="light grey-text text-lighten-3">3</h5>
                </div>
            </li>
            <li>
                <img src="<?php echo bloginfo(template_url).'/assets/slides/4.jpg' ?>">
                <!-- random image -->
                <div class="caption left-align">
                    <h3>4</h3>
                    <h5 class="light grey-text text-lighten-3">4</h5>
                </div>
            </li>
        </ul>
    </div>

    <div id="slide-out" class="sidenav">
        <div>
            <div class="user-view">
                <div class="background">
                    <img style="width: 100%;" src="<?php echo bloginfo(template_url).'/assets/icons/logo.png' ?>">
                </div>
                <a class="user-image">
                    <i class="material-icons" style="font-size: 60px; color: white;">account_circle</i>
                </a>
                <a class="user-info">
                    <span class="white-text name">Usuario</span>
                    <span class="white-text email">usuario@gmail.com</a>
                </a>
            </div>
            <a class="menu-mobile-item">Nosotros</a>
            <a class="menu-mobile-item">Pasadías</a>
            <a class="menu-mobile-item">Excursiónes</a>
            <a class="menu-mobile-item">Promociones</a>
            <a class="menu-mobile-item">Contacto</a>
        </div>

    </div>