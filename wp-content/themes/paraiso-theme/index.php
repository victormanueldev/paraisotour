
    <!-- HEADER -->
    <?php get_header("home")?>

        <!-- RECOMMENDED -->
        <div class="row recomended">
            <div class="col-md-12">
                <!-- <section id="recomended"> -->
                <div class="destiny">
                    <img src="http://localhost/paraisotour/wp-content/uploads/2018/09/Mejores-destinos.png" alt="">
                    <br><br>
                    <p>Los mejores<br> destinos</p>
                </div>
                <div class="price">
                    <img src="http://localhost/paraisotour/wp-content/uploads/2018/09/Mejores-precios.png" alt="">
                    <br><br>
                    <p>Precios<br> increíbles</p>
                </div>
                <div class="quality">
                    <img src="http://localhost/paraisotour/wp-content/uploads/2018/09/Calidad.png" alt="">
                    <br><br>
                    <p>La máxima<br> calidad</p>
                </div>
                <div class="attetion">
                    <img src="http://localhost/paraisotour/wp-content/uploads/2018/09/Atención-personalizada.png" alt="">
                    <br><br>
                    <p>La mejor ateción<br> personalizada</p>
                </div>
                <!-- </section>   -->
            </div>
        </div>
        <!-- END RECOMMENDED -->

        <!-- ABOUT US -->
        <div class="row" id="about-us">
            <div class="col-md-6 info">
                    <p class="title">NOSOTROS</p>
                    <br>
                    <p>Paríso Tour, Agencia de Viajes & Turismo, tu nueva opción de disfrutar un momento agradable de descanso y diversión en los lugares más facinantes y completamente distintos de nuestro país.</p>
                    <br><br>
                    <p class="title">¿POR QUÉ RESERVAR CON NOSOTROS?</p>
                    <br>
                    <p>Paríso Tour, ofrece la mejor atención personalizada, tarifa sujetos a cambios y disponibilidad, los mejores destinos a precios increíbles y asistencia médica en todos los planes.</p>
            </div>
            <div class="col-md-6 picture">
                <!-- <img src="img/jonalyn-san-diego-717136-unsplash.jpg" alt=""> -->
            </div>
        </div>
        <!-- END ABOUT US -->
        <!-- PROMOTIONS -->
        <div class="row" id="promotions">
            <div class="col-md-12 promotions-title">
                <h3>PROMOCIONES</h3>
            </div>
            <div class="col-md-12 specials">
                <?php
                    //Parametros de Consulta 
                    $args = array( 'posts_per_page' => 5 );
                    $query = new WP_Query( $args );
                    //Valida que existan entradas
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                                //Obtiene el campo personalizado 
                                $price = get_post_meta(get_the_ID(), 'precio-normal', true);
                                $tags = get_the_tags();
                ?>

                    <div class="box1">
                        <h4><?php the_title(); ?></h4>
                        <div class="header-box">
                            <div class="box-desc">
                                <b>% 
                                    <?php 
                                        /*
                                        * Recorre todos los tags que contiene cada entrada
                                        * IMPORTANTE: Debe ser un solo tag por entrada
                                        */ 
                                        foreach($tags as $tag ):
                                            //Imprime solo el valor del tag  
                                            echo $tag->name; 
                                    ?>
                                </b>
                            </div>
                        </div>
                        <div class="body-box">
                            <p> 
                                $<?php 
                                            //Campo personalizado
                                            echo $price 
                                ?>
                            </p>
                            <h1>COP  
                                $<?php  
                                            //Calcula el descuento de la entrada
                                            echo $price - (($price * $tag->name)/100);  
                                        endforeach;
                                ?>
                            </h1>
                            <p>POR PERSONA</p>
                            <br>
                            <a href="<?php the_permalink(); ?>" class="details" style="color: black !important">
                                VER DETALLES
                            </a>
                        </div>
                    </div>

                <?php
                        endwhile;
                    endif;

                ?> 
            </div>
            <div class="col-md-12 view-more">
                <a href="#"><b>Ver más</b></a>
            </div>
        </div>
        <!-- END PROMOTIONS -->
                <!-- NEWSLETTER -->
                <div class="row" id="newsletter">
            <div class="col-md-6 magazine-sign-up">
                <p> DESCARGA NUESTRO CATÁLOGO Y 
                    <br>
                    enteráte de nuestras novedades y
                    <br>
                    ofertas exclusivas.
                </p>
                <br><br>
                <input type="text" class="input-customer" placeholder="Nombre">
                <input type="text" class="input-customer" placeholder="Email">
                <br>
                    <button>REGÍSTRARME</button>   
                <div class="col-md-12 terms-condition">
                    <label for="terms-condition">
                        <input type="checkbox" name="terms-condition">&nbsp;&nbsp;Acepto términos y condiciones y autorizo el tratamiento de datos personales.
                    </label>
                </div>
            </div>
            <div class="col-md-6 magazine-info">
                <p class="text-top"><b>TÚ DECIDES <br> donde te sientas.</b></p>
                <p class="text-bottom">Reserva tus asientos al momento <br> de comprar tu viaje.</p>
            </div>
        </div>
        <!-- END NEWSLETTER -->
                <!-- FORM -->
                <div class="row" id="form-customer">
            <div class="col-md-12">
                <h3 class="title-form">CONTÁCTENOS</h3>
            </div>
            <div class="col-md-3 form-info">
                <h3>Cali</h3>
                <br>
                <i class="fas fa-phone"></i>
                <br>
                <p>(032) 3864302</p>
                <br>
                3183731426-<b>Andrés Moreno</b>
                <br>
                3186527162-<b>Marcela Moreno</b>
                <br>
                3163551972-<b>Carolina Sanchez</b>
                <br><br>
                <i class="far fa-envelope"></i>
                <br>
                <p>wparaisotour@gmail.com</p>
                <br>
                <i class="fas fa-map-marker-alt"></i>
                <br>
                Calle 4b # 27-20, B/San Fernando
                <br>
                Oficina 201
                <br>
                Cali, Colombia.
                <br><br>
                <button>¿Cómo llegar?</button>
            </div>
            <div class="col-md-3 form-info">
                <h3>Palmira</h3>
                <br>
                <i class="fas fa-phone"></i>
                <br>
                <b>Darlen Restrepo</b>
                <br>
                (032) 2853812
                <br>
                3185825074
                <br>
                3163551740
                <br><br>
                <i class="fas fa-map-marker-alt"></i>
                <br>
                Cra 5E # 34 - 36
                <br>
                B/Hacienda Buenos Aires
                <br><br>
                <button>¿Cómo llegar?</button>
            </div>
            <div class="col-md-6 form-info">
                <p class="title">DEJÁNOS TU INFORMACIÓN</p>
                <p class="title-body">y nos pondremos en contacto contigo.</p>
                <br>
                <input type="text" placeholder="Nombre">
                <br>
                <input type="text" placeholder="Correo">
                <br>
                <input type="text" placeholder="Asunto">
                <br>
                <textarea cols="30" rows="10" placeholder="Mensaje"></textarea>
                <br>

            </div>
        </div>
        <!-- END FORM -->

<!--FOOTER-->
<?php get_footer();?>