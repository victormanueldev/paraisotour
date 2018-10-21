<?php 
    /*
    Template Name: Page Suggestions
    */
?>
<?php get_header(); ?>

<?php 
    include_once('src/EnviarEmail.php');
    $envemail = new Email();
	if (isset($_POST['guardar'])) {
		$cuerpo = $_POST['mensaje'];
		$asunto = $_POST['asunto'];
        $enviar = $envemail->enviarSugerencia($_POST['correo'], $_POST['nombre'], $asunto, $cuerpo);
        echo '
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-bottom-left",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.success("Nos pondremos en contacto con usted en el menor tiempo posible", "¡E-mail enviado exitosamente!");
        </script>';
        }
?>
<!-- CONTENT -->
<section id="content" class="container" style="position: relative;padding-top: 40px;">


<div class="row justify-content-md-center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 caja1 ">

        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method='POST' class="form">
            <!-- NATURE PERSON -->
            <div class="row">

                <div class="col-md-2 "></div>

                <div class="col-md-8 ">

                    <h2>SUGERENCIAS Y RECLAMOS</h2>
                    <br>
                    <span class="terms-and-c">
                        La solicitud llegará al mail registrado al completar el formulario.
                    </span>
                    <br>
                    <br>

                    <input type="text" placeholder="Nombres" name="nombre">
                    <br>
                    <br>
                    <br>
                    <input type="mail" placeholder="Correo" name="correo">
                    <br>
                    <br>
                    <br>
                    <!-- <select name="Motivo">
                        <option value="1">Motivo 1</option>
                        <option value="2">Motivo 2</option>
                        <option value="3">Motivo 3</option>
                    </select> -->
                    <input type="text" placeholder="Motivo" name="asunto">
                    <br>
                    <br>
                    <br>
                    <textarea style="height: 150px;" type="text" placeholder="Mensaje" name="mensaje"></textarea>

                </div>
                <br> <br>

                <button  type="submit" id="submit" name="guardar" class="button" style="background-color: #FE7481 !important; border: 0px solid white; width: 30% !important; "><span style="font-weight: bold  !important">ENVIAR</span></button>
            </div>



            <br> <br> <br>




        </form>

    </div>

    <!-- INFO -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 caja2">

        <!-- BANNER -->
        <div class="row">
            <div class="col-md-12">
                <div class="banner-info-header">
                    <div class="col-md-12">
                        <h2 style="text-shadow: 0px 2px 30px rgba(0, 0, 0, 1);">DUDA O <br> INQUIETUD</h2>
                        <p style="text-shadow: 0px 2px 30px rgba(0, 0, 0, 1);">¡Llámanos!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="banner-info-body">
                    <div class="col-md-12">
                        <h3 style="color: white !important;">CALI</h3>
                        <br>
                    </div>

                    <div class="col-md-12">
                        <p><i class="fas fa-phone"></i>&nbsp;&nbsp;(032) 3654685</p>
                    </div>

                    <div class="col-md-12">
                        <p><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3183731426 - <b>Andrés Moreno</b></p>
                    </div>

                    <div class="col-md-12">
                        <p><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3186527162 - <b>Marcela Moreno</b></p>
                    </div>

                    <div class="col-md-12">
                        <p><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3163551972 - <b>Carolina Sánchez</b></p>
                        <br><br>
                    </div>

                    <div class="col-md-12">
                        <h3 style="color: white !important;">PALMIRA</h3>
                        <br>
                    </div>

                    <div class="col-md-12">
                        <b class="darlen">Darlen Restrepo</b>
                        <br>
                        <p><i class="fas fa-phone"></i>&nbsp;&nbsp;(032) 3654685</p>
                        <p><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3183731426</p>
                        <p><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3186527162</p>
                        <p><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;3163551972</p>
                        <br><br>
                    </div>

                    <div class="col-md-12 info-addres">
                        <b>Ó dirigirse a nuestra Sucursal</b>
                        <br>
                        <p>Calle 4b #27-20 Ofi. 201 <br> Barrio San fernando, Cali Valle.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BANNER -->
    </div>
    <!-- END INFO -->
</div>
</section>


<?php get_footer(); ?>