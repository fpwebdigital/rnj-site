<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>


<div class="row">
	<img src="img/bg_parceria.jpg" class="img-responsive center-block" alt="Parceriso RNJ">
	<h2 class="titulo_trabalhos_int branco sombra">Parceria<br> <img src="img/seta.svg" class="seta"></h2>
</div>

<!-- Sobre Intro -->
<div class="bg_padrao bg_branco">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h1 class="centralizado azul_01"><img src="img/icon_parceiros.svg" class="icon_md" alt="Parceiros"> venha ser nosso parceiro</h1><br>
				<h2 class="centralizado cinza">juntos faremos melhor</h2><br>
				<p class="texto_geral cinza justificado">Uma das principais especialidades da RNJ Brasil é atender contas publicitárias em parceria com outras agências. Por esta razão, a RNJ Brasil está associada a várias empresas de Publicidade, Marketing e Mídia ao redor do Mundo, oferecendo sua experiência nos serviços de:</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-2 col-xs-6 col-centered col-fixed"><button class="btn_rnj2 btn_rnj-3 btn_rnj-3c" onclick="location.href='solucoes_criacao_de_sites.php'"><img src="img/icon_sites.svg" class="icon_lg" alt="Criação de Sites em SP"><br>criação de sites</button>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2 col-xs-6 col-centered col-fixed"><button class="btn_rnj2 btn_rnj-3 btn_rnj-3c" onclick="location.href='solucoes_mkt_digital.php';"><img src="img/icon_mkt.svg" class="icon_lg" alt="Marketing Digital"><br>mkt digital e redes sociais</button>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2 col-xs-6 col-centered col-fixed"><button class="btn_rnj2 btn_rnj-3 btn_rnj-3c" onclick="location.href='solucoes_planejamento.php';"><img src="img/icon_planejamento.svg" class="icon_lg" alt="Planejmanto de Mídia"><br>planejamento de mídia</button>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2 col-xs-6 col-centered col-fixed"><button class="btn_rnj2 btn_rnj-3 btn_rnj-3c" onclick="location.href='solucoes_compra.php';"><img src="img/icon_compra.svg" class="icon_lg" alt="Compra de Mídia"><br>compra de mídia</button>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2 col-xs-6 col-centered col-fixed"><button class="btn_rnj2 btn_rnj-3 btn_rnj-3c" onclick="location.href='solucoes_criacao.php';"><img src="img/icon_criacao.svg" class="icon_lg" alt="Criação de Material Digital e Offline"><br>criação offline/digital</button>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-2 col-xs-6 col-centered col-fixed"><button class="btn_rnj2 btn_rnj-3 btn_rnj-3c" onclick="location.href='solucoes_sistemas.php';"><img src="img/icon_sistemas.svg" class="icon_lg" alt="Desenvolvimento de Sistemas"><br>sistemas<br>web</button>
			</div>
		</div>
	</div>
</div>
<!-- Soluções -->
<section class="bg_padrao bg_cinza">
	<div class="container">
		<div class="bg_padrao"><div class="row"><h3 class="cinza centralizado" style="left: 10px;">Confira alguns parceiros</h3></div></div>
		<div class="row">
			
			<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">		
				<div id="parce"><a href="http://smvgroup.com" target="_blank"><img src="img/parceiros/starcom.jpg" class="img-responsive center-block" alt="Parceiro Starcom"></a></div>
				<div id="parce"><a href="http://mktnetwork.com/web2015/" target="_blank"><img src="img/parceiros/mktnetwork.jpg" class="img-responsive center-block" alt="Parceiro Mkt network"></a></div>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">		
				<div id="parce"><a href="http://www.imscorporate.com/" target="_blank"><img src="img/parceiros/ims.jpg" class="img-responsive center-block" alt="Parceiro IMS"></a></div>
				<div id="parce"><a href="http://www.havasmediagroup.com/" target="_blank"><img src="img/parceiros/havasmedia.jpg" class="img-responsive center-block" alt="Parceiro HavasMedia"></a></div>	
			</div>


			<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
				<div id="fundo_formulario_sites" class="card-1">
					<h3 class="azul_01 centralizado">Quer fazer uma parceria?</h3><br>
					
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
</section>


<?php include("include/footer.php"); ?>