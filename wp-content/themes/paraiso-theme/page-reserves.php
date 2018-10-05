<?php 
    /*
    Template Name: Page Reserves
    */
?>
<?php get_header(); ?>

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

				<!--Start Bus-->

				<!-- <div class="scroll">
			        	<div class="big-bus"> 
			            <div class="bus-container">
			                <div class="bus-enabled">
			                    <div class="bus-lat"></div>
			                    <div class="bus-back"></div>
			                    <div class="bus-content">
			                        <div class="bus-content-child"> 

			                            <div id="23" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">23</label>
			                            </div>
			    
			                            <div id="25" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">25</label>
			                            </div>
			    
			                            <div id="27" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">27</label>
			                            </div>
			    
			                            <div id="29" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">29</label>
			                            </div>
			    
			                            <div id="31" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">31</label>
			                            </div>
			    
			                            <div id="33" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">33</label>
			                            </div>
			    
			                            <div id="35" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">35</label>
			                            </div>
			    
			                            <div id="37" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">37</label>
			                            </div>
			    
			                            <div id="39" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">39</label>
			                            </div>
			    
			                            <div id="41" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">41</label>
			                            </div>
			    
			                            <div id="22" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">22</label>
			                            </div>
			    
			                            <div id="24" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">24</label>
			                            </div>
			    
			                            <div id="26" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">26</label>
			                            </div>
			    
			                            <div id="28" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">28</label>
			                            </div>
			    
			                            <div id="30" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">30</label>
			                            </div>
			    
			                            <div id="32" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">32</label>
			                            </div>
			    
			                            <div id="34" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">34</label>
			                            </div>
			    
			                            <div id="36" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">36</label>
			                            </div>
			    
			                            <div id="38" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">38</label>
			                            </div>
			    
			                            <div id="40" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">40</label>
			                            </div>
			    
			    
			    
			                            <div id="21" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">21</label>
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			                            <div class="bus-chair-container">
			    
			                            </div>
			    
			    
			                            <div id="20" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">20</label>
			                            </div>
			    
			                            <div id="18" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">18</label>
			                            </div>
			    
			                            <div id="16" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">16</label>
			                            </div>
			    
			                            <div id="14" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">14</label>
			                            </div>
			    
			                            <div id="12" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">12</label>
			                            </div>
			    
			                            <div id="10" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">10</label>
			                            </div>
			    
			                            <div id="8" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp8</label>
			                            </div>
			    
			                            <div id="6" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp6</label>
			                            </div>
			    
			                            <div id="4" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp4</label>
			                            </div>
			    
			                            <div id="2" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp2</label>
			                            </div>
			    
			
			    
			                            <div id="19" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">19</label>
			                            </div>
			    
			                            <div id="17" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">17</label>
			                            </div>
			    
			                            <div id="15" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">15</label>
			                            </div>
			    
			                            <div id="13" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">13</label>
			                            </div>
			    
			                            <div id="11" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">11</label>
			                            </div>
			    
			                            <div id="9" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp9</label>
			                            </div>
			    
			                            <div id="7" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp7</label>
			                            </div>
			    
			                            <div id="5" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp5</label>
			                            </div>
			    
			                            <div id="3" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp3</label>
			                            </div>
			    
			                            <div id="1" class="click-chair bus-chair-container  gray-chair">
			                                <div class="flecha-down"></div>
			                                <label for="bus-chair-container" class="chair-label">&nbsp1</label>
			                            </div>

			                        </div>
			                    </div>
			                    <div class="bus-front"></div>
			                    <div class="bus-lat"></div>
			                </div>
			            </div>
		        	</div>
		    	</div> -->
				<!-- END BUS -->
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
							<p>Quindío a paso fino y chapuzón</p>
						</div>
						<br>
						<br>

						<div class="col-md-12 fare">
							<h3 class="title-fare">TARIFA</h3>
							<!-- <br> -->
							<h3 class="price1">COP</h3>&nbsp;&nbsp;
							<h1 class="price2">$<?php $total = 145000; echo "{{tarifa =".$total."}}"?></h1>
							<p>POR PERSONA</p>
						</div>

						<div class="col-md-12 info1">
							<p>Cant. Pasajeros</p>
							<h3>COP $300.000</h3>
						</div>

						<div class="col-md-12 info2">
							<p>Sillas reservadas</p>
							<h3>COP ${{total}}</h3>
						</div>

						<div class="col-md-12 info3">
							<p>Descuento (Grupo Adultos)</p>
							<h3>20%</h3>
						</div>
						<br>

						<div class="col-md-12 info-total">
							<h3>TOTAL</h3>
							<br>
							<br>
							<h2>COP ${{total}}</h2>
							<br>
						</div>
						<br>

						<div class="col-md-12">
							<button @click="viewTotal()"id="button" class="button">
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