<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo bloginfo(name)?>
    </title>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo bloginfo(template_url).'/assets/css/menu.css' ?>" />
    <!-- STYLE -->
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/normalize.css' ?>">
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/bootstrap-grid.min.css' ?>">
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/style-facturacion.css' ?>">
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/style-class-general.css' ?>">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- MATERIALIZE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- FONTS -->
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/fuentes.css' ?>">

    <!-- VueJS Version 2.5.17 -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
        });
    </script>
</head>

<body>

    <div style="position: relative;
width: 100%;
height: 400px;">
        <div class="secondary ">
            <div class="menu-container bg1">
                <div class="menu-container-children secondary">
                    <div class="top-menu">




                    </div>
                    <div class="top-menu-left" style="position: absolute; right: 0px; top: 50px; width: 25% !important;">
                        <a class="menu-desk-item" style="width: 120px !important; position: relative;">Mis reservas</a>
                        <a class="menu-desk-item" style="width: 120px !important;position: relative;">
                            <i class="material-icons" style="position: absolute; top: 8px; left: -2px;">account_circle</i>Hola
                            User</a>
                    </div>
                    <div class="logo-left mobile-hide"></div>
                    <div class="logo-center desktop-hide" style="height: 53% !important;"></div>
                    <a class="mobile-menu sidenav-trigger" data-target="slide-out" class="sidenav-trigger">
                        <i class="material-icons" style="font-size: 40px;">menu</i>
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

                                <div class="search" style="text-align: center; color: white; background-color: transparent !important;">
                                    <h1 style="color: white !important; font-weight: bold; font-size: xx-large">Titulo</h1>
                                </div>

                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="slide-out" class="sidenav">
            <div>
                <div class="user-view">
                    <div class="background">
                        <img style="width: 80%;" src="./icons/logo.png">
                    </div>
                    <!-- <a class="user-image"><i class="material-icons" style="font-size: 60px; color: white;">account_circle</i></a>
            <a class="user-info"><span class="white-text name">Usuario</span>
            <span class="white-text email">usuario@gmail.com</a>
            </a> -->

                </div>
                <a class="menu-desk-item" style="width: 120px !important; position: relative;">Mis reservas</a>
                <a class="menu-desk-item" style="width: 120px !important;position: relative;">
                    <i class="material-icons" style="position: absolute; top: 8px; left: -2px;">account_circle</i>Hola
                    User</a>
                <br>

                <a class="menu-mobile-item">Nosotros</a>
                <a class="menu-mobile-item">Pasadías</a>
                <a class="menu-mobile-item">Excursiónes</a>
                <a class="menu-mobile-item">Promociones</a>
                <a class="menu-mobile-item">Contacto</a>
            </div>

        </div>
    </div>