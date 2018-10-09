<!-- HEADER -->
<?php get_header()?>


<!-- CONTENT -->
<section id="content" class="container" style="position: relative;">
    <div class="tab-activator-container">

        <div id="act1" class="tab-activator">
            <div class="tab-act-content">
                INCLUYE
            </div>
        </div>

        <div id="act2" class="tab-activator active">
            <div class="tab-act-content">
                FOTOS
            </div>
        </div>

    </div>

    <div class="row justify-content-md-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 caja1 ">
        <?php 
            if(have_posts()):
                while(have_posts()) :
                    //Muestra los POSTS
                    the_post();
                    //Obtiene el campo personalizado 
                    $price = get_post_meta(get_the_ID(), 'precio-normal', true);
                    //Obtiene el ID 
                    $id = get_the_ID();
                    //Muestra el Contenido
                    the_content();
        ?>
        </div>

        <!-- INFO -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 caja2">

            <!-- TOTAL -->
            <div class="row">
                <div class="col-md-12">
                    <div class="header-total">
                        <h2 class="white-text">PRECIO</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="body-total">

                        <br>

                        <div class="col-md-12 info-total">
                            <h3 class="bold t-center">DESDE</h3>
                            <br>
                            <br>
                            <h2>COP $<?php echo $price ?></h2>
                            <br>
                        </div>

                        <div style="width: 100%; text-align: center;">
                            <br>
                            <a style="margin-top: 15px" class="button" href="http://localhost/paraisotour/?page_id=17&p=<?php echo $id ?>">RESERVAR</a>
 
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- END TOTAL -->
            <?php 
                    endwhile;
                endif;
            ?>

            <!-- BANNER -->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-info-header">
                        <div class="col-md-12">
                            <h2 style="text-shadow: 0px 2px 30px rgba(0, 0, 0, 1);">DUDA O
                                <br> INQUIETUD</h2>
                            <p style="text-shadow: 0px 2px 30px rgba(0, 0, 0, 1);">¡Llámanos!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="banner-info-body">
                        <div class="col-md-12">
                            <h3>CALI</h3>
                            <br>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <i class="fas fa-phone"></i>&nbsp;&nbsp;(032) 3654685</p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3183731426 -
                                <b>Andrés Moreno</b>
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3186527162 -
                                <b>Marcela Moreno</b>
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3163551972 -
                                <b>Carolina Sánchez</b>
                            </p>
                            <br>
                            <br>
                        </div>

                        <div class="col-md-12">
                            <h3>PALMIRA</h3>
                            <br>
                        </div>

                        <div class="col-md-12">
                            <b class="darlen">Darlen Restrepo</b>
                            <br>
                            <p>
                                <i class="fas fa-phone"></i>&nbsp;&nbsp;(032) 3654685</p>
                            <p>
                                <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3183731426</p>
                            <p>
                                <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3186527162</p>
                            <p>
                                <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3163551972</p>
                            <br>
                            <br>
                        </div>

                        <div class="col-md-12 info-addres">
                            <b>Ó dirigirse a nuestra Sucursal</b>
                            <br>
                            <p>Calle 4b #27-20 Ofi. 201
                                <br> Barrio San fernando, Cali Valle.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BANNER -->
        </div>
        <!-- END INFO -->
    </div>
</section>

<!--FOOTER-->
<?php get_footer();?>