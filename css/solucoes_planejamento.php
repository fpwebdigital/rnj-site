@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700|Roboto:300,300i,400,700,700i');

* {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
/* -------------------------------- 
Primários
-------------------------------- */
*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  color: #fff;
  overflow-x: hidden;
  font-weight: 300;	
  font-family: 'Open Sans', sans-serif;
  background-color: #ffffff !important;
}
body.overflow-hidden {
  /* when primary navigation is visible, the content in the background won't scroll */
  overflow: hidden;
}

a {
  color: #626262;
  text-decoration: none;
}
html, body {
  height: 100%;
}
::selection { background: #25aae0; color: #fff; } ::-moz-selection { background: #25aae0; color: #fff; }

h1,
h2,
h3 {
    margin: 0 auto !important;
    padding: 0 auto !important;
    font-family: 'Roboto', sans-serif !important;;
    font-weight: 700 !important;;
    text-transform: uppercase;
}
.texto_geral {
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
    font-size: 18px;
    padding: 10px
}
.texto_direitos {
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
    font-size: 12px;
    padding: 10px
}


.azul_01 {color: #25aae0;}
.azul_02 {color: #022551;}
.branco {color: #ffffff;}
.cinza {color: #626262;}
.bg_azul_01 { background-color: #25aae0;}
.bg_azul_02 {background-color: #022551;}
.bg_azul_03 {background-color: #169dd3;}
.bg_branco {background-color: #ffffff;}
.bg_cinza {background-color: #f3f3f3;}
.centralizado {text-align: center;}
.justificado {text-align: justify;}
.sombra {text-shadow: 1px 1px 2px rgba(0, 2, 0, 1);}
.espaco_baixo {margin-bottom: 20px;}
.seta {width: 20px; height: 13px;}

.bg_padrao {
    width: 100%;
    height: auto;
    padding-top: 20px;
    padding-bottom: 20px; 
}
.bg_titulos {
    width: 100%;
    height: auto;
    padding: 5%;
    position: relative;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
}
.titulo_trabalhos_bt {
    width: auto;
    height: auto;
    position: absolute;
    bottom: 15px;
    left: 30px;
}
.titulo_trabalhos_int {
    width: 100%;
    height: 20px;
    position: relative;
    bottom: 70px;
    text-align: center;
}
.icon_md {
    width: 50px;
    height: 50px;
}
.icon_lg {
    width: 70px;
    height: 70px;
    margin-bottom: 7px;
}
#teste {
    width: 100%;
    height: 50px;
    background-color: blueviolet;
    position: relative;
    margin-bottom: 10px;
    
}


/* -------------------------------- 
Formulários
-------------------------------- */
#fundo_formulario_sites {
	width: 100%;
    height: auto;
	background-color: #fff;
    position: relative;
	padding: 10px;
}
#fundo_cards {
	width: 100%;
    height: auto;
	background-color: #fff;
    position: relative;
	margin-top: 15px;
	padding: 10px;
}
#fundo_titulo_cards1 {
	width: 100%;
    height: auto;
	background-color: #0a3b51;
    position: relative;
	padding: 10px;
	text-align:center;
	margin-bottom: 10px;
}


.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.input_site{
	width:100%;
	height: 40px;
    font-family: 'Open Sans Condensed', Arial, sans-serif;
	color:#1cadec;
	font-size:16px;
	background-color:#eeeeee;
	border: solid #d7d7d7;
	outline: none;
	-webkit-border-radius: 10px 10px 10px 10px;
	border-radius: 10px 10px 10px 10px;
	padding-left: 10px;
}
.input_site:hover{
	width:100%;
	height:40px;
    font-family: 'Open Sans Condensed', Arial, sans-serif;
	color:#1cadec;
	font-size:16px;
	background-color:#eeeeee;
	border: solid #1cadec;
	outline: none;
	-webkit-border-radius: 10px 10px 10px 10px;
	border-radius: 10px 10px 10px 10px;
	padding-left: 10px;
}

.input_site_msg{
	width:100%;
	height: 80px;
    font-family: 'Open Sans Condensed', Arial, sans-serif;
	color:#1cadec;
	font-size:16px;
	background-color:#eeeeee;
	border: solid #d7d7d7;
	outline: none;
	-webkit-border-radius: 10px 10px 10px 10px;
	border-radius: 10px 10px 10px 10px;
	padding-left: 10px;
}
.input_site_msg:hover{
	width:100%;
	height:80px;
    font-family: 'Open Sans Condensed', Arial, sans-serif;
	color:#1cadec;
	font-size:16px;
	background-color:#eeeeee;
	border: solid #1cadec;
	outline: none;
	-webkit-border-radius: 10px 10px 10px 10px;
	border-radius: 10px 10px 10px 10px;
	padding-left: 10px;
}
.btn_enviar {
  background: #1cadec;
  -webkit-border-radius: 10;
  -moz-border-radius: 10;
  border-radius: 10px;
  font-family: 'Open Sans Condensed', Arial, sans-serif;
  color: #ffffff;
  font-size: 16px;
  font-weight: 700;
  padding: 7px 10px 7px 10px;
  text-decoration: none;
  cursor: pointer;
  border: solid 1px #FFFFFF;
}

.btn_enviar:hover {
  background: #0a3b51;
  text-decoration: none;
  cursor: pointer;
  border: solid 1px #FFFFFF;
}
#parce {
 	width: 100%;
	height: auto;
	background-color: #fff;
	margin-bottom:  20px;
	position: relative;
}

@media screen and (max-width: 768px) {

h1,
h2,
h3 {
    font-size: 19px !important;
}
.icon_md {
    width: 30px;
    height: 30px;
}
 .texto_geral {
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
    font-size: 14px;
    padding: 10px
}   
    
}


.teste {
		width: 20px;
	height: 20px;
	background-color: aqua;
	margin-top: 20px;
	position: relative;
}
