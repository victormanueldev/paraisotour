<?php 
    /*
    Template Name: Page Reserves
    */
?>
<?php get_header(); ?>

<?php 
	//Obtiene el valor del Parametro del URL (id)
	$idPost = $_GET['id'];

	//Parametros de Consulta por ID
	$args = array( 'p' => $idPost );
	//Consulta de  POSTS
	$query = new WP_Query( $args );
	//Muestra los POST de la BD
	$query->the_post();
	//Obtiene el campo personalizado 
	$normalPrice = get_post_meta(get_the_ID(), 'precio-normal', true);
	//Obtiene el campo personalizado 
	$descMayor = get_post_meta(get_the_ID(), 'descuento-adultos', true);
	//Nombre del POST
	$name = get_the_title();

?>

<!-- CONTENT -->
<section id="content" class="container" id="app">
	<div class="row justify-content-md-center" id="app">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 caja1">
			<p>Por favor complete los datos solicitados a continuación, para facturación de compra e información de todas las personas
				que vayan a participar en este viaje.</p>
			<div class="check">
				<label for="natural_person">
					<input type="checkbox" id="natural_person" name="person" value="natural_person">&nbsp;&nbsp;Persona Natural
				</label>
				<label for="juridical_person">
					<input type="checkbox" id="juridical_person" name="person" value="juridical_person">&nbsp;&nbsp;Persona Juridica
				</label>
			</div>
			<form action="#" class="form">
				<!-- NATURE PERSON -->
				<div class="row">
					<div class="col-md-2">
						<select name="Gentlemen" id="">
							<option value="sr">Sr.</option>
							<option value="sra">Sra.</option>
						</select>
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Nombres">
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Apellidos">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<input type="number" min="0" placeholder="Cel/Tel:">
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Correo">
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<select name="Identification" id="">
							<option value="cc">C.C.</option>
							<option value="pst">Pasaporte</option>
							<option value="cce">C.E.</option>
						</select>
					</div>
					<div class="col-md-5">
						<input type="number" min="0" placeholder="C.C o Nit">
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Nacionalidad">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<input type="text" placeholder="Dirección">
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Ciudad">
					</div>
				</div>
				<br>
				<br>

				<div class="row">
					<div class="col-md-12">
						<h3>FECHA NACIMIENTO</h3>
						<input class="form-input-date" type="date" id="date">
					</div>
				</div>
				<br>
				<br>

				<div class="row">
					<div class="col-md-12">
						<h3>ELIGE UNA FECHA</h3>
						<input class="form-input-date" type="date" id="date">
					</div>
				</div>
				<br>
				<br>

				<h3>CANTIDAD DE PASAJEROS</h3>

				<div class="row justify-content-md-center">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<span>Mayores de 4 años</span>
						<input type="number" id="cant1" min="0" max="99" value="0">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<span>De 0 a 3 años</span>
						<input type="number" id="cant2" min="0" max="99" value="0">
					</div>
				</div>
				<br>
				<br>

				<h3>INFORMACIÓN PASAJEROS</h3>

				<div class="row">
					<div class="col-md-6">
						<input type="text" placeholder="Nombres">
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Apellidos">
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<select name="Identification">
							<option value="cc">C.C.</option>
							<option value="pst">Pasaporte</option>
							<option value="cce">C.E.</option>
						</select>
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Número de Identificación">
					</div>
					<div class="col-md-5">
						<input type="number" min="-1" placeholder="Cel/Tel:">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<h4>Fecha de Nacimiento</h4>
						<input type="date" id="date">
					</div>
				</div>
				<br>
				<br>

				<!-- JURIDICAL PERSON -->
				<!-- <div class="row">
						<div class="col-6">
							<input class="form-input-juridical" type="text" placeholder="Empresa">
						</div>
						<div class="col-6">
							<input class="form-input-juridical" type="number" min="0" placeholder="C.C o Nit">
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<input class="form-input-juridical" type="number" min="0" placeholder="Cel/Tel:">
						</div>
						<div class="col-6">
							<input class="form-input-juridical" type="text" placeholder="Correo">
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<input class="form-input-juridical" type="text" placeholder="Dirección">
						</div>
						<div class="col-6">
							<select class="form-select-juridical" name="city" id="city">
								<option value="">Cali</option>
								<option value="">Bogotá</option>
								<option value="">Medellin</option>
							</select>
						</div>
					</div>
					<br><br>

					<div class="row">
						<div class="col-md-12">
							<h3>FECHA NACIMIENTO</h3>
							<input class="form-input-date" type="date" id="date">	
						</div>
					</div>
					<br><br>

					<div class="row">
						<div class="col-md-12">
							<h3>ELIGE UNA FECHA</h3>
							<input class="form-input-date" type="date" id="date">	
						</div>
					</div>
					<br><br>

					<h3>CANTIDAD DE PASAJEROS</h3>
					
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<span>Mayores de 4 años</span><input type="number" id="cant1" min="0" max="99" value="0">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<span>De 0 a 3 años</span><input type="number" id="cant2" min="0" max="99" value="0">	
						</div>
					</div>
					<br><br>

					<h3>INFORMACIÓN PASAJEROS</h3>	

					<div class="row">
						<div class="col-md-6">
							<input type="text" placeholder="Nombres">
						</div>
						<div class="col-md-6">
							<input type="text" placeholder="Apellidos">	
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<select name="Identification">
								<option value="cc">C.C.</option>
								<option value="pst">Pasaporte</option>
								<option value="cce">C.E.</option>
							</select>	
						</div>
						<div class="col-md-5">
							<input type="text" placeholder="Número de Identificación">	
						</div>
						<div class="col-md-5">
							<input type="number" min="-1" placeholder="Cel/Tel:">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<h4>Fecha de Nacimiento</h4><input type="date" id="date">	
						</div>
					</div>
					<br><br> -->

				<!-- BUS -->
				<!-- <div class="chair">
						<h3 class="select-chair">SELECCIÓN DE SILLAS</h3>
						<div class="graychair">
							<span>Sillas Vacías</span><img src="img/gray-chair.png" alt="">
						</div>
						<div class="bluechair">
							<span>Sillas Ocupadas</span><img src="img/blue-chair.png" alt="">
						</div>
					</div> -->

				<div class="row chair">
					<h3 class="select-chair">SELECCIÓN DE SILLAS</h3>
					<div class="col-md-3 graychair">
						<span>Sillas Vacías</span>
						<img src="http://localhost/paraisotour/wp-content/uploads/2018/09/gray-chair.png" alt="">
					</div>
					<div class="col-md-3 bluechair">
						<span>Sillas Ocupadas</span>
						<img src="http://localhost/paraisotour/wp-content/uploads/2018/09/blue-chair.png" alt="">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12 stock">
						<label for="stock">
							Deseo reservar las sillas a mi nombre
							<input type="checkbox" id="stock" name="person" value="stock">
						</label>
					</div>
				</div>
				<div  class="scroll">
					<div class="big-bus">
						<div class="bus-container">
							<div class="bus-enabled">
								<div class="bus-lat"></div>
								<div class="bus-back"></div>
								<div class="bus-content">
									<div class="bus-content-child">

										<div v-for="chair in busChairs" :id="chair.id" :key="chair.id" :class="[chair.label != '' ? 'click-chair bus-chair-container' : 'bus-chair-container', chair.cssClass]"
										 style="margin-right: 2.3px;" @click="clickChair(chair.id, chair.label)">
											<div v-if="chair.label" class="flecha-down"></div>
											<label v-if="chair.label" for="bus-chair-container" class="chair-label">{{chair.label}}</label>
										</div>


									</div>
								</div>
								<div class="bus-front"></div>
								<div class="bus-lat"></div>
							</div>
						</div>
					</div>
				</div>
				<div v-if="cont === 41" class="scroll">
					<div class="big-bus">
						<div class="bus-container">
							<div class="bus-enabled">
								<div class="bus-lat"></div>
								<div class="bus-back"></div>
								<div class="bus-content">
									<div class="bus-content-child">

										<div v-for="chair2 in bus2Chairs" :id="chair2.id" :key="chair2.id" :class="[chair2.label != '' ? 'click-chair bus-chair-container' : 'bus-chair-container', chair2.cssClass]"
										 style="margin-right: 2.3px;" @click="clickChair2(chair2.id, $event)">
											<div v-if="chair2.label" class="flecha-down"></div>
											<label v-if="chair2.label" for="bus-chair-container" class="chair-label">{{chair2.label}}</label>
										</div>


									</div>
								</div>
								<div class="bus-front"></div>
								<div class="bus-lat"></div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<!-- INFO -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 caja2">

			<!-- TOTAL -->
			<div class="row">
				<div class="col-md-12">
					<div class="header-total">
						<h2>TU VIAJE</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="body-total">
						<div class="col-md-12 destiny">
							<h3>DESTINO</h3>
							<br>
							<p><?php echo $name; ?></p>
						</div>
						<br>
						<br>

						<div class="col-md-12 fare">
							<h3 class="title-fare">TARIFA</h3>
							<!-- <br> -->
							<h3 class="price1">COP</h3>&nbsp;&nbsp;
							<h1 class="price2">$<?php echo "{{rate =".$normalPrice."}}"?></h1>
							<p>POR PERSONA</p>
						</div>

						<div class="col-md-12 info1">
							<p>Cant. Pasajeros</p>
							<h3>3	</h3>
						</div>

						<div class="col-md-12 info2">
							<p>Sillas reservadas</p>
							<h3>{{reservedChairs}}</h3>
						</div>

						<div class="col-md-12 info3">
							<p>Descuento (Grupo Adultos)</p>
							<h3><?php echo $descMayor != '' ? $descMayor: 0; ?>%</h3>
						</div>
						<br>

						<div class="col-md-12 info-total">
							<h3>TOTAL A PAGAR</h3>
							<br>
							<br>
							<h2>COP ${{totalPayment}}</h2>
							<br>
						</div>
						<br>

						<div class="col-md-12">
							<button id="button" class="button">
								<span>COMPRAR</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<!-- END TOTAL -->

			<!-- BANNER -->
			<div class="row">
				<div class="col-md-12">
					<div class="banner-info-header">
						<div class="col-md-12">
							<h2>DUDA O
								<br> INQUIETUD</h2>
							<p>¡Llámanos!</p>
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
<!-- END CONTENT -->

<?php get_footer(); ?>