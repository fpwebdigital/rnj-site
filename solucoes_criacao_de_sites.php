<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>

<div class="container-fluid">
<div class="row">
	<img src="img/bg_banner1.jpg" class="img-responsive center-block" alt="Parceriso RNJ">
	<h2 class="titulo_trabalhos_int branco sombra">Criação de Sites<br> <img src="img/seta.svg" class="seta"></h2>
</div>
</div>
<!-- Sobre Intro -->
<div class="bg_padrao bg_branco">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h1 class="centralizado azul_01">Um site repaginado faz toda a diferença</h1><br>
			</div>
		</div>	
				
			<div class="row">
			<div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">			
				<p class="texto_geral cinza justificado">Para que a sua empresa alcance resultados acima da média no mercado, invista em um site profissional e criativo.</p>
				
				<p class="texto_geral cinza justificado">Nosso objetivo é fazer com que a web seja um recurso para os seus negócios e a sua marca. Deste modo, criamos sites personalizados para cada cliente, buscamos proporcionar uma experiência visual nova para cada projeto, principalmente na criação de sites.</p>		
				<h2 class="centralizado cinza">Confira alguns projetos:</h2><br>
	            <div id="owl-demo2" class="owl-carousel">
                <div class="item"><img src="img/trabalhos/case_site_responsivo_gerenciavel_israel.png"  class="img-responsive center-block" alt="Case Israel"></div>
                <div class="item"><img src="img/trabalhos/case_site_responsivo_gerenciavel_cancun.png" class="img-responsive center-block" alt="Case Cancún"></div>           
                <div class="item"><img src="img/trabalhos/case_site_responsivo_gerenciavel_decameron.png" class="img-responsive center-block" alt="Case Decameron"></div>
               <div class="item"><img src="img/trabalhos/case_site_responsivo_gerenciavel_affinity.png" class="img-responsive center-block" alt="Case Affinity"></div>          
              </div>
				
			</div>

             <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
             
             								<div id="fundo_formulario_sites" class="card-1">
					<h3 class="azul_01 centralizado">Faça seu site conosco</h3>
					<p class="texto_geral cinza centralizado">Solicite um orçamento pelo formulário e nós entraremos em contato :)</p>
					
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

			
			
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>