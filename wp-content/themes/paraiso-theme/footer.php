<!-- FOOTER -->
<footer>
	<div class="terms-social">
		<div class="terms">
			<a href="http://localhost/paraisotour/?page_id=44">Términos y condiciones</a>
			<a href="#">Políticas de privacidad</a>
			<a href="#">Trabaja con nosotros</a>
			<a href="http://localhost/paraisotour/?page_id=46">Sugerencias y reclamos</a>
			<a href="#">Métodos de pago</a>
		</div>
		<div class="social">
			<p>ÚNETE A NUESTRA COMUNIDAD</p>
			<i class="fab fa-instagram"></i>
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-youtube"></i>
		</div>
	</div>
	<div class="copyrigth">
		<p>Copyrigth 2018 Viajes y turismo Paraiso Tour, todos los derechos reservados.</p>
	</div>
</footer>
<!-- END FOOTER -->
<script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qs/6.5.2/qs.js"></script>

<!-- Scripts-->
<script src="<?php echo bloginfo(url).'/wp-content/themes/paraiso-theme/assets/js/app.js'; ?>"></script>
<script src="<?php echo bloginfo(url).'/wp-content/themes/paraiso-theme/assets/js/footer.js'; ?>"></script>
<!-- Sweet Alert -->
<script type="text/javascript">
	document.getElementById('AlertSingUp').addEventListener('click', function (e) {
		e.preventDefault();
		swal({
			title: 'Ingresa tu email',
			input: 'email',
			inputAttributes: {
				autocapitalize: 'off'
			},
			showCancelButton: true,
			confirmButtonText: 'Registrar',
			cancelButtonText: 'Cancelar',
			showLoaderOnConfirm: true,
			preConfirm: (email) => {
				return fetch(`http://localhost/paraisotour/wp-content/themes/paraiso-theme/src/enviarRegistro.php?email=${email}`)
					.then(response 	=> {
						return response.json()
					})
					.catch(error => {
						swal.showValidationMessage(
							`Request failed: ${error}`
						)
					})
			},
			allowOutsideClick: () => !swal.isLoading()
		}).then((result) => {
				console.log(result.value.response);
			if (result.value.response == "success") {
				swal({
					title: '¡Enhorabuena!',
					text: 'Muchas gracias, pronto te estaremos enviado nuestras mejor ofertas y novedades.',
					confirmButtonText: '¡Entendido!'
				})
			}
		})
	});
</script>
</body>

</html>