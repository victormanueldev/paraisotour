<?php 
    /*
    Template Name: Page Reserves
    */
?>
<?php get_header(); ?>

<?php 
    // error_reporting(E_ALL);
    // ini_set("display_errors", 1);
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
	$desc4To6 = get_post_meta(get_the_ID(), 'descuento-4a6', true);
	$desc0To3 = get_post_meta(get_the_ID(), 'descuento-0a3', true);
	//Obtiene el campo personalizado 
	$dateTravel = get_post_meta(get_the_ID(), 'fecha-salida', true);
	//Nombre del POST
	$name = get_the_title();
	$tags = get_the_tags();

?>

<!-- CONTENT -->
<section id="content" class="container">
	<br>
	<br>
	<div class="row justify-content-md-center" id="app">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 caja1">
			<p>Por favor complete los datos solicitados a continuación, para facturación de compra e información de todas las personas
				que vayan a participar en este viaje.</p>
			<div class="check">
				<label for="natural_person">
					<input type="radio" id="natural_person" name="person" value="natural_person" checked="checked">&nbsp;&nbsp;Persona Natural
				</label>
				<label for="juridical_person">
					<input type="radio" id="juridical_person" name="person" value="juridical_person">&nbsp;&nbsp;Persona Juridica
				</label>
			</div>
			<form action="#" class="form">
				<!-- NATURE PERSON -->
				<div class="row">
					<div class="col-md-2">
						<select name="Gentlemen" v-model="passengersForm.gender" placeholder="Seleccione el tipo">
							<option value="sr" selected="selected">Sr.</option>
							<option value="sra">Sra.</option>
						</select>
					</div>
					<div class="col-md-10">
						<input type="text" placeholder="Nombre Completo" v-model="paymentForm.buyerFullName">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<input type="number" min="0" placeholder="Cel/Tel:" v-model="paymentForm.mobilePhone">
					</div>
					<div class="col-md-6">
						<input type="email" placeholder="Correo" v-model="paymentForm.buyerEmail">
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<select name="Identification" v-model="passengersForm.idType">
							<option value="cc">C.C.</option>
							<option value="pst">Pasaporte</option>
							<option value="cce">C.E.</option>
						</select>
					</div>
					<div class="col-md-5">
						<input type="number" min="0" placeholder="C.C o Nit" v-model="paymentForm.payerDocument">
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Nacionalidad" v-model="passengersForm.nationality">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<input type="text" placeholder="Dirección" v-model="passengersForm.address">
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Ciudad" v-model="passengersForm.city">
					</div>
				</div>
				<br>
				<br>

				<div class="row">
					<div class="col-md-12">
						<h3>FECHA NACIMIENTO</h3>
						<input class="form-input-date" type="date" id="date" v-model="passengersForm.birthDay">
					</div>
				</div>
				<br>
				<br>

				<!-- <div class="row">
					<div class="col-md-12">
						<h3>ELIGE UNA FECHA</h3>
						<input class="form-input-date" type="date" id="date">
					</div>
				</div> -->
				<br>
				<br>

				<h3>CANTIDAD DE PASAJEROS</h3>

				<!-- Set del descuento para niños de 4 a 6 años -->
				<div style="display: none">
					<label ><?php echo $desc4To6 == '' ? "{{descMin4To6=0}}" : "{{descMin4To6=".$desc4To6."}}"; ?><label>
				</div>

				<!-- Set del descuento para niños de  0 a 3 años-->
				<div style="display: none">
					<label ><?php echo $desc0To3 == '' ? "{{descMin0To3=0}}" : "{{descMin0To3=".$desc0To3."}}"; ?><label>
				</div>


				<div class="row justify-content-md-center">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<span>Mayores de 7 años {{calculateDescMajors}}</span>
						<input type="number" min="0" max="99" value="0" v-model="cantPassengersMajor">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<span>Niños de 4 a 6 años {{calculateDescMin4To6}}</span>
						<input type="number" min="0" max="99" value="0" v-model="cantPassengersMinor4To6">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<span>Niños de 0 a 3 años </span>
						<input type="number" min="0" max="99" value="0" >
					</div>
				</div>

				<br>
				<br>

				<h3>INFORMACIÓN PASAJEROS</h3>

				<div class="row">
					<div class="col-md-12">
						<p>A continuación, escribe el nombre, número de documento y fecha de nacimiento de cada pasajero que vayan a participar
							en esta actividad:</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<textarea rows="10" placeholder="Pepito Perez - 1000000 - 16/08/1998" v-model="passengersForm.passengers"></textarea>
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
							<span>Mayores de 4 años</span><input type="number" min="0" max="99" value="0">
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

				<h3 class="select-chair" style="margin: 0 0 10px 0">SELECCIÓN DE SILLAS</h3>
				<div class="row chair">
					<div class="col-md-3 graychair">
						<span>Sillas Vacías </span>
						<img src="http://localhost/paraisotour/wp-content/uploads/2018/09/gray-chair.png" alt="">
					</div>
					<div class="col-md-3 bluechair">
						<span>Sillas Seleccionadas</span>
						<img src="http://localhost/paraisotour/wp-content/uploads/2018/09/blue-chair.png" alt="">
					</div>
					<div class="col-md-3 bluechair">
						<span>Sillas Ocupadas </span>
						<img src="http://localhost/paraisotour/wp-content/uploads/2018/09/red-chair.png" alt="">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6 stock">
						<label for="stock">
							Deseo reservar las sillas a mi nombre
							<input type="checkbox" id="stock" name="person" value="stock">
						</label>
					</div>
				</div>
				<!-- BUS 1-->
				<div class="scroll">
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
				<!-- END BUS 2-->
				<!-- BUS 2-->
				<div v-if="chairsComputed" class="scroll">
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
				<!-- END BUS 2-->
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
							<p>
								<?php echo "{{paymentForm.description='".$name."'}}"; ?>
							</p>
						</div>
						<p style="display: none"><?php echo "{{paymentForm.extra1='".$idPost."'}}"; ?></p>
						<br>
						<div class="col-md-12 destiny">
								<h3>FECHA DE SALIDA</h3>
								<br>
								<p><?php echo "{{paymentForm.extra3='".$dateTravel."'}}"; ?> </p>
								<p style="display: none;"><?php echo "{{idTravel='".$idPost."'}}"; ?></p>
								
							</div>
							<br>

						<div class="col-md-12 fare">
							<h3 class="title-fare">TARIFA</h3>
							<!-- <br> -->
							<h3 class="price1">COP</h3>&nbsp;&nbsp;
							<h1 class="price2">$
								<?php echo  $tags[0]->name == '' ? "{{rate =".$normalPrice."}}" : "{{rate =".($normalPrice - (($normalPrice * $tags[0]->name)/100))."}}" ;?>
							</h1>
							<p>POR PERSONA</p>
						</div>

						<div class="col-md-12 info1">
							<p>Cant. Pasajeros</p>
							<h3>{{cantPassengers}} </h3>
						</div>

						<div class="col-md-12 info2">
							<p>Sillas reservadas</p>
							<h3>{{reservedChairs}}</h3>
						</div>

						<div class="col-md-12 info3">
							<p>Descuento (Grupo Adultos)</p>
							<h3>
								<?php echo $descMayor != '' ? "{{descMayor=".$descMayor."}}" : 0; ?>%</h3>
						</div>
						<br>

						<div class="col-md-12 info-total">
							<h3>TOTAL A PAGAR</h3>
							<br>
							<br>
							<h2>COP ${{paymentForm.totalPayment.toFixed(0)}}</h2>
							<br>
						</div>
						<br>
						<form method="POST" action="https://checkout.payulatam.com/ppp-web-gateway-payu">
							<div style="display: none">
								<input type="number" name="merchantId" v-model="paymentForm.merchantId" />
							</div>
							<div style="display: none">
								<input type="text" name="apiKey" v-model="paymentForm.apiKey" />
							</div>
							<div style="display: none">
								<input type="text" name="referenceCode" v-model="paymentForm.referenceCode" />
							</div>
							<div style="display: none">
								<input type="number" name="accountId" v-model="paymentForm.accountId" />
							</div>
							<div style="display: none">
								<input type="text" name="description" v-model="paymentForm.description" />
							</div>
							<div style="display: none">
								<input type="text" name="amount" v-bind:value="paymentForm.totalPayment.toFixed(2)"/>
							</div>
							<div style="display: none">
								<input type="number" name="tax" v-model="paymentForm.tax" />
							</div>
							<div style="display: none">
								<input type="number" name="taxReturnBase" v-model="paymentForm.taxReturnBase" />
							</div>
							<div style="display: none">
								<input type="text" name="currency" v-model="paymentForm.currency" />
							</div>
							<div style="display: none">
								<input type="text" name="signature" v-model="paymentForm.signature" />
							</div>
							<div style="display: none">
								<input type="text" name="test" v-model="paymentForm.test" />
							</div>
							<div style="display: none">
								<input type="text" name="buyerEmail" v-bind:value="paymentForm.buyerEmail" />
							</div>
							<div style="display: none">
								<input type="text" name="buyerFullName" v-bind:value="paymentForm.buyerFullName" />
							</div>
							<div style="display: none">
								<input type="text" name="mobilePhone" v-bind:value="paymentForm.mobilePhone" />
							</div>
							<div style="display: none">
								<input type="text" name="payerDocument" v-bind:value="paymentForm.payerDocument" />
							</div>
							<div style="display: none">
								<input type="text" name="extra1" v-model="paymentForm.extra1" />
							</div>
							<div style="display: none">
								<input type="text" name="extra2" v-model="paymentForm.extra2" />
							</div>
							<div style="display: none">
								<input type="text" name="extra3" v-bind:value="paymentForm.extra3" />
							</div>
							<div style="display: none">
								<input type="text" name="responseUrl" v-model="paymentForm.responseUrl" />
							</div>
							<div style="display: none">
								<input type="text" name="confirmationUrl" v-model="paymentForm.confirmationUrl" />
							</div>
							<div style="width: 100%; text-align: center;" >
								<br>
								<button id="btnn" type="button" class="button" @click="disableSubmitMethod()">
									<span>PAGAR</span>
								</button>
							</div>
							<div  style="width: 100%; text-align: center;display:none" >
								<br>
								<button id="btn-submit" type="submit" class="button">
									<span>PAGAR</span>
								</button>
							</div>
						</form>
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
<!-- END CONTENT -->

<?php get_footer(); ?>