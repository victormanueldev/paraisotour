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
<?php 

if(isset($_GET['p'])):
    $args = array('p' => $_GET['p']);
    $queryId = new WP_Query($args);
    if($queryId->have_posts()):
        while($queryId->have_posts()):
            $queryId->the_post();
            $subtitle = get_post_meta(get_the_ID(), 'subtitle', true);
?>
<div style="position: relative;width: 100%;height: 400px;">
    <div class="secondary ">
        <div class="menu-container bg1" style="background: url(<?php the_post_thumbnail_url()  ?>) no-repeat center;">
            <div class="menu-container-children secondary">
                <div class="top-menu"></div>
                <div class="logo-left mobile-hide"></div>
                <div class="logo-center desktop-hide" style="height: 53% !important;"></div>
                <a class="mobile-menu sidenav-trigger" data-target="slide-out" class="sidenav-trigger">
                    <i class="material-icons" style="font-size: 40px;">menu</i>
                </a>
                <div class="menubar">
                    <div class="menu items">
                        <div class="center-menu-items">
                            <a class="menu-desk-item" href="http://localhost/paraisotour/">Inicio</a>
                            <a class="menu-desk-item <?php echo $_GET['cat'] == '3' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=3">Pasadías</a>
                            <a class="menu-desk-item <?php echo $_GET['cat'] == '4' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=4">Excursiones</a>
                            <a class="menu-desk-item <?php echo $_GET['cat'] == '2' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=2">Promociones</a>
                            <a class="menu-desk-item <?php echo $_GET['page_id'] == '49' ? 'dactive': ''?>" href="http://localhost/paraisotour/?page_id=49">Contacto</a>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="center-search-items">
                            <div class="search" style="text-align: center; color: white; background-color: transparent !important;">
                                <h1 style="color: white !important; font-weight: bold; font-size: xx-large"><?php the_title(); ?></h1>
                                <h2 style="color: white !important; font-weight: bold; font-size: medium"><?php echo $subtitle; ?></h2>
                            </div>
                        <?php
                                    endwhile;
                                endif;
                            elseif($_GET['page_id'] == '17'):
                        ?>

    <div style="position: relative;width: 100%;height: 400px;">
        <div class="secondary ">
            <div class="menu-container bg1" style="background: url(<?php if(the_post_thumbnail_url() != '') the_post_thumbnail_url(); else echo 'http://localhost/paraisotour/wp-content/uploads/2018/10/rawpixel-799527-unsplash-min.jpg'; ?>) no-repeat center;">
                <div class="menu-container-children secondary">
                    <div class="top-menu">

                    </div>
                    <div class="logo-left mobile-hide"></div>
                    <div class="logo-center desktop-hide" style="height: 53% !important;"></div>
                    <a class="mobile-menu sidenav-trigger" data-target="slide-out" class="sidenav-trigger">
                        <i class="material-icons" style="font-size: 40px;">menu</i>
                    </a>
                    <div class="menubar">
                        <div class="menu items">

                            <div class="center-menu-items">

                                <a class="menu-desk-item" href="http://localhost/paraisotour/">Inicio</a>
                                <a class="menu-desk-item <?php echo $_GET['cat'] == '3' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=3">Pasadías</a>
                                <a class="menu-desk-item <?php echo $_GET['cat'] == '4' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=4">Excursiones</a>
                                <a class="menu-desk-item <?php echo $_GET['cat'] == '2' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=2">Promociones</a>
                                <a class="menu-desk-item <?php echo $_GET['page_id'] == '49' ? 'dactive': ''?>" href="http://localhost/paraisotour/?page_id=49">Contacto</a>

                            </div>

                        </div>
                        <div class="menu items"></div>
                        <div class="menu">

                            <div class="center-search-items">
                                        <div class="search" style="text-align: center; color: white; background-color: transparent !important;">
                                            <h1 style="color: white !important; font-weight: bold; font-size: xx-large">Facturación</h1>
                                        </div>
                                <?php
                                    elseif(isset($_GET['cat'])):
                                ?>
                    <div style="position: relative;width: 100%;height: 400px;">
                        <div class="secondary ">
                            <div class="menu-container bg1" style="background: url(<?php  echo 'http://localhost/paraisotour/wp-content/uploads/2018/10/annie-spratt-256172-unsplash-min.jpg'; ?>) no-repeat center;">
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

                                                <a class="menu-desk-item" href="http://localhost/paraisotour/">Inicio</a>
                                                <a class="menu-desk-item <?php echo $_GET['cat'] == '3' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=3">Pasadías</a>
                                                <a class="menu-desk-item <?php echo $_GET['cat'] == '4' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=4">Excursiones</a>
                                                <a class="menu-desk-item <?php echo $_GET['cat'] == '2' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=2">Promociones</a>
                                                <a class="menu-desk-item <?php echo $_GET['page_id'] == '49' ? 'dactive': ''?>" href="http://localhost/paraisotour/?page_id=49">Contacto</a>

                                            </div>

                                        </div>
                                        <div class="menu items"></div>
                                        <div class="menu">

                                            <div class="center-search-items">
                                                <div class="search" style="text-align: center; color: white; background-color: transparent !important;">
                                                    <h1 style="color: white !important; font-weight: bold; font-size: xx-large"><?php if($_GET['cat'] == '4'): echo 'Excursiones'; elseif($_GET['cat'] == '3'): echo 'Pasadías'; else: echo 'Promociones'; endif;?></h1>
                                                </div>
                                <?php 
                                        else:
                                ?>
                                                                    <div style="position: relative;width: 100%;height: 400px;">
                        <div class="secondary ">
                            <div class="menu-container bg1" style="background: url(<?php  echo 'http://localhost/paraisotour/wp-content/uploads/2018/10/recepcionista-virtual-min.jpg'; ?>) no-repeat center;">
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

                                                <a class="menu-desk-item" href="http://localhost/paraisotour/">Inicio</a>
                                                <a class="menu-desk-item <?php echo $_GET['cat'] == '3' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=3">Pasadías</a>
                                                <a class="menu-desk-item <?php echo $_GET['cat'] == '4' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=4">Excursiones</a>
                                                <a class="menu-desk-item <?php echo $_GET['cat'] == '2' ? 'dactive': ''?>" href="http://localhost/paraisotour/?cat=2">Promociones</a>
                                                <a class="menu-desk-item <?php echo $_GET['page_id'] == '49' ? 'dactive': ''?>" href="http://localhost/paraisotour/?page_id=49">Contacto</a>

                                            </div>

                                        </div>
                                        <div class="menu items"></div>
                                        <div class="menu">

                                            <div class="center-search-items">
                                                <div class="search" style="text-align: center; color: white; background-color: transparent !important;">
                                                    <h1 style="color: white !important; font-weight: bold; font-size: xx-large">
                                                    <?php if($_GET['page_id'] == '49'): 
                                                            echo 'Contáctanos';
                                                            elseif($_GET['page_id'] == '44'):
                                                                echo 'Términos y Condiciones';
                                                                elseif($_GET['page_id'] == '46'):
                                                                    echo 'Sugerencias y Reclamos';
                                                                else:
                                                                    echo 'Paraiso Tour';
                                                                endif;
                                                    ?>

                                                    </h1>
                                                </div>
                                <?php
                                    endif;
                                ?>

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
                        <img style="width: 80%;" src="<?php echo bloginfo(template_url).'/assets/icons/logo.png' ?>">
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

                <a class="menu-mobile-item" href="http://localhost/paraisotour/">Inicio</a>
                <a class="menu-mobile-item <?php echo $_GET['cat'] == '3' ? 'mactive': ''?>" href="http://localhost/paraisotour/?cat=3">Pasadías</a>
                <a class="menu-mobile-item  <?php echo $_GET['cat'] == '4' ? 'mactive': ''?>" href="http://localhost/paraisotour/?cat=4">Excursiones</a>
                <a class="menu-mobile-item <?php echo $_GET['cat'] == '2' ? 'mactive': ''?>" href="http://localhost/paraisotour/?cat=2">Promociones</a>
                <a class="menu-mobile-item <?php echo $_GET['page_id'] == '49' ? 'mactive': ''?>" href="http://localhost/paraisotour/?page_id=49">Contacto</a>
            </div>

        </div>
    </div>