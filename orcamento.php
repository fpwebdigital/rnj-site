<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>


 <div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  espaco_baixo"><img src="img/bg_orcamento.jpg" class="img-responsive center-block"><h2 class="titulo_trabalhos_int branco sombra">Orçamento<br> <img src="img/seta.svg" class="seta"></h2></div>
 </div> 


<!-- Sobre Intro -->
<div class="bg_padrao bg_branco">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2 class="centralizado azul_01">Preencha o formulário ou envie e-mail para contato@rnj.com.br</h2><br>
			</div>
		</div>
		<div class="row">
	        <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12"></div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<div id="fundo_formulario_sites" class="card-1">
					
					
					<form name="contato" method="post" action="envia-orcamento.php" target="_parent">
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
							<input type="text" class="input_site" id="assunto" name="assunto" placeholder="Assunto*" required>
						</div>

						<div class="form-group">
							<textarea name="msg" id="msg" class="input_site_msg" placeholder="Mensagem*" required></textarea>
						</div>
						<button type="submit" class="btn_enviar">ENVIAR</button>
				</form>
				</div>
			</div>
<div class="col-sm-3 col-md-3 col-lg-3 col-xs-12"></div>
		</div>
	</div>
</div>
<!-- Soluções -->



<?php include("include/footer.php"); ?>