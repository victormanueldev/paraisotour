    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo bloginfo(name)?></title>
        <!-- STYLE -->
	    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/normalize.css' ?>">
	    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/bootstrap-grid.min.css' ?>">
	    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/style-facturacion.css' ?>">
        <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/style-class-general.css' ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo bloginfo(template_url).'/assets/css/menu.css' ?>" />

	    <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        
        <!-- MATERIALIZE -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>

	    <!-- ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
        <!-- HEADER -->
        <section id="header">
            <div class="content-header">
                <img src="http://localhost/paraisotour/wp-content/uploads/2018/09/LOGO-PARAISO-TOUR-PARA-FONDOS-NEGROS.png" alt="" id="logotype">
            </div>
        </section>
        <!-- END HEADER -->

    