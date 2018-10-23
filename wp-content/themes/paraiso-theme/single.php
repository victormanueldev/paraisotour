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

    <div style="padding-top: 20px;" class="row justify-content-md-center">
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
                    //Obtiene las etiquetas de la entrada
                    $tags = get_the_tags();
                    //Contenidod del post
                    $includes = get_post_meta(get_the_ID(), 'incluye', true);
                    $notIncludes =  get_post_meta(get_the_ID(), 'no-incluye', true);
                    $infoPrice =  get_post_meta(get_the_ID(), 'informacion-precio', true);
                    $infoDates = get_post_meta(get_the_ID(), 'informacion-fechas', true);
                    $placeHourTravel = get_post_meta(get_the_ID(), 'lugar-hora-salida', true);
                    $notes = get_post_meta(get_the_ID(), 'notas', true);
                    //Obtiene el numero de imagenes a ingresar
                    $cantImages = get_post_meta(get_the_ID(), 'cantidad-imagenes', true);
                    $images = [];
                    //Este ciclo se repetirá el numero de veces que tenga la variable $cantImages
                    for ($i=0; $i <= $cantImages; $i++) { 
                        //Asigna a una pocision del array la consulta a la BD
                        // Esta concatenacion permite seleccionar el nombre exacto del campo personalizado 
                        $images[$i] = get_post_meta(get_the_ID(), 'imagen-'.$i, true); 
                    }
            ?>
             <div id="tab1" class="tab hidden">
                <div class="pasadia-row">
                    <h3>INCLUYE</h3>
                </div>
                <div class="pasadia-row">
                    <?php
                        //Crea un array del  string (INCLUYE) mediante la expresion regular 
                        $items = preg_split("/[-]+/", $includes);
                        //Quita la primera pocision del array (siempre está vacia)
                        unset($items[0]);
                        //Recorre todos los items del array
                        foreach ($items as $item) {
                            //Muestra los items del array con su estructura HTML
                            echo "<h4 class='list-item'>".$item."<h4>";
                        }
                    ?>
                </div>
                <div class="pasadia-row">
                    <h3>NO INCLUYE</h3>
                </div> 
                <div class="pasadia-row">
                    <?php
                    
                        $items2 = preg_split("/[-]+/", $notIncludes);
                        unset($items2[0]);
                        foreach ($items2 as $item2) {
                            echo "<h4 class='list-item'>".$item2."<h4>";
                        }
                    
                    ?>
                </div>
                <div class="pasadia-row">
                    <h3>PRECIO</h3>
                </div> 
                <div class="pasadia-row">
                    <?php
                        $items3 = preg_split("/[-]+/", $infoPrice);
                        unset($items3[0]);
                        foreach ($items3 as $item3) {
                            //Busca en el string si hay alguna aparicion de la expresion
                            $bold = strpos($item3, "*");
                            if($bold > 0){
                                //Quita la expresion del string
                                $itemBold = strstr($item3, "*", true);
                                //Muestra el texto con si formato de HTML
                                echo "<h3 ><b class='bold'>".$itemBold."</b><h3>";
                            }else{
                                echo "<h4 class='list-item'>".$item3."<h4>";
                            }
                        }
                    
                    ?>
                </div>
                <div class="pasadia-row">
                    <h3>FECHAS</h3>
                </div> 
                <div class="pasadia-row">
                    <?php
                        $items4 = preg_split("/[-]+/", $infoDates);
                        unset($items4[0]);
                        foreach ($items4 as $item4) {
                            $bold = strpos($item4, "*");
                            if($bold > 0 ){
                                $itemBold = strstr($item4, "*", true);
                                echo "<h3 class='list-item'><b class='bold'>".$itemBold."</b><h3>";
                            }else{
                                echo "<h4>".$item4."<h4>";       
                            }
                            
                        }
                    ?>
                </div>
                <div class="pasadia-row">
                    <h3>LUGAR Y HORA DE SALIDA</h3>
                </div> 
                <div class="pasadia-row">
                    <?php
                        $items5 = preg_split("/[-]+/", $placeHourTravel);
                        unset($items5[0]);
                        foreach ($items5 as $item5) {
                            $bold = strpos($item5, "*");
                            if($bold > 0){
                                $itemBold = strstr($item5, "*", true);
                                echo "<h3 ><b class='bold'>".$itemBold."</b><h3>";
                            }else{
                                echo "<h4 class='list-item'>".$item5."<h4>";
                            }
                        }
                    ?>
                </div>
                <div class="pasadia-row">
                    <h3>A TENER EN CUENTA</h3>
                </div> 
                <div class="pasadia-row">
                    <?php
                        $items6 = preg_split("/[-]+/", $notes);
                        unset($items6[0]);
                        foreach ($items6 as $item6) {
                            echo "<h4 class='list-item'>".$item6."<h4>";
                        }
                    ?>
                </div>
            </div>
            <div id="tab2" class="tab t-center">
                <?php
                    //Quita la primera pocision del array (siempre esta vacia)
                    unset($images[0]);
                    //Recorre el array de imagenes
                    foreach ($images as $image):
                ?>
                <div class="card mc-img-card mc-card mc-lg">
                    <div class="card-image" style="width: 100%;">
                        <img class="materialboxed" src="<?php echo $image; //Muestra el URL?> " /> 
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
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
                            <h2>COP $
                                <?php echo $tags[0]->name == '' ? $price : $price - (($price * $tags[0]->name)/100);  ?>
                            </h2>
                            <br>
                        </div>

                        <div style="width: 100%; text-align: center; display:block;">
                            <br>
                            <a style="margin-top: 15px" class="button" href="http://mundomascotascali.com/paraisotour/?page_id=17&id=<?php echo $id ?>">RESERVAR</a>
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