<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>

<script>
$('.map-container')
	.click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});
</script>

<div class="container-fluid">
<div class="row">
<div class="map-container">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.544920102654!2d-46.64959728481751!3d-23.54886488468917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5850f598aeed%3A0x6ef07c287680f19e!2sRNJ+Brasil+Publicidade!5e0!3m2!1spt-BR!2sbr!4v1478798355159" scrolling="no" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</div>
</div>

<!-- Sobre Intro -->
<div class="bg_padrao bg_branco">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2 class="centralizado azul_01">Rua Gravataí, 23 - Sobreloja | Consolação, São Paulo/SP Brasil</h2><br>
				<h2 class="centralizado cinza">+55 (11) 3256-0288 | contato@rnj.com.br</h2><br>
			</div>
		</div>
		<div class="row">
	<div class="col-sm-3 col-md-3 col-lg-3 col-xs-1"></div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xs-10">
				<div id="fundo_formulario_sites" class="card-1">
					<h3 class="azul_01 centralizado">Envie sua mensagem por aqui!</h3><br>
					
					<form name="contato" method="post" action="envia_form_sites.php" target="_parent">
						<div class="form-group">
							<input type="text" class="input_site" id="nome" name="nome" placeholder="Nome*" required>
						</div>
						<div class="form-group">
							<input type="email" class="input_site" id="email" name="email" placeholder="E-mail*" required>
						</div>
						<div class="form-group">
							<input type="text" class="input_site" id="telefone" name="telefone" placeholder="Telefone*" required>
						</div>

						<div class="form-group">
							<textarea name="msg" id="msg" class="input_site_msg" placeholder="Mensagem*" required></textarea>
						</div>
						<button type="submit" class="btn_enviar">ENVIAR</button>
				</form>
				</div>
			</div>
						<div class="col-sm-3 col-md-3 col-lg-3 col-xs-1"></div>	
		</div>
	</div>
</div>
<!-- Soluções -->



<?php include("include/footer.php"); ?>