<!DOCTYPE html>
<html>
	<!--Cabeçalho da pagina
	Aqui inclui a importação de arquivos externos-->
	<head >
		<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon"/>
		<link href="images/flores.png" rel="icon"/>
		<a name="top"></a>
		<title>Foricutura Broto & CIA</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="css/bootstrap.css">
  		<link rel="stylesheet" href="css/lightbox.css">
  		<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">   
  		<link rel="stylesheet" href="css/style.css" >
  		
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="js/lightbox.min.js"></script>
  		<script src="js/jquery.js"></script>
  		<script src="js/bootstrap.js"></script>
  		<script type="text/javascript" src="js/functions.js" lenguage="javascript"></script>
	</head>
		
	<!--Corpo da pagina-->
	<body>
		<div class="container-fluid">
			<header class="row">
				<!-- MENU -->			    
			      <nav class="navbar navbar-default navbar-fixed-top">			        
			          <div class="navbar-header">
			          	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>						
			            <a class="navbar-brand" href="index.html"><img class="img-responsive" width=85 height=70 src="images/flowers1.png"> </a>
			          </div>
			          <div class="collapse navbar-collapse pull-right" id="myNavbar">
			 				<ul class="nav">
  						<li class="active"><a href="index.html" >Inicio</a></li>
 						 <li><a href="pedidos.php" >Pedidos</a></li>
						  <li><a href="cadastro.php" >Cadastrar</a></li>
						  <li><a href="#" >Logar</a></li>
						</ul>			        
			          </div><!-- colapse -->					        
			      </nav></br></br></br>    			    
			    <!-- FIM DO MENU -->
			</header>
			<div class="row"> 
				<div role="main">					
					<section id="myCarousel" class="carousel slide" data-ride="carousel">
					    <!-- Wrapper for slides -->

					    <div class="carousel-inner" role="listbox">

					      <section class="item active">
					        <a href="#"><img src="images/banner1.png" alt="img1" class="img-responsive"></a>
					      </section>

					      <section class="item">
					        <a href="#"><img src="images/foto11.jpg" alt="img2" class="img-responsive"></a>
					      </section>
					    
					      <section class="item">
					        <a href="#"><img src="images/foto14.jpg" alt="img3" class="img-responsive"></a>
					      </section>    
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					      <span class="sr-only">Next</span>
					    </a>
					 </section><!-- Carousel -->		
				</div><!-- main -->					
		</div><!-- Conteiner fluid -->

			<div class="container">

				<form class="form-horizontal">
					<fieldset>

					<!-- Form Name -->
					<legend></legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Remetente</label>  
					  <div class="col-md-6">
					  <input id="textinput" name="textinput" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Contato</label>  
					  <div class="col-md-6">
					  <input id="textinput" name="contato" type="text" placeholder="Contato do Remetente" class="form-control input-md" required="">
					    
					  </div>
					</div>
					

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="destino">Destinatario</label>  
					  <div class="col-md-6">
					  <input id="destino" name="destino" type="text" placeholder="Digite o nome do Destinatario" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="dataPedido">Data do Pedido</label>  
					  <div class="col-md-6">
					  <input id="dataPedido" name="dataPedido" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Textarea -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="descricao">Descrição do Pedido</label>
					  <div class="col-md-6">                     
					    <textarea class="form-control" id="descricao" name="descricao"></textarea>
					  </div>
					</div>

					<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="entrega">Entrega</label>
					  <div class="col-md-6">
					    <label class="checkbox-inline" for="entrega-0">
					      <input type="checkbox" name="entrega" id="entrega-0" value="Retirar em endereço Físico">
					      Retirar em endereço Físico
					    </label>
					    <label class="checkbox-inline" for="entrega-1">
					      <input type="checkbox" name="entrega" id="entrega-1" value="Entregar">
					      Entregar
					    </label>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="dataEntrega">Data de entrega</label>  
					  <div class="col-md-6">
					  <input id="dataEntrega" name="dataEntrega" type="text" placeholder="" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="horario">Horário da Entrega</label>  
					  <div class="col-md-6">
					  <input id="horario" name="horario" type="text" placeholder="Melhor Horário " class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="endereco">Endereço da entrega</label>  
					  <div class="col-md-6">
					  <input id="endereco" name="endereco" type="text" placeholder="Logradouro" class="form-control input-md">
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="bairro">Bairro</label>  
					  <div class="col-md-6">
					  <input id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="cidade">Cidade</label>  
					  <div class="col-md-6">
					  <input id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="estado">Estado</label>
					  <div class="col-md-2">
					    <select id="estado" name="estado" class="form-control">
					      <option value="1">MG</option>
					      <option value="2">SP</option>
					      <option value="3">RJ</option>
					    </select>
					  </div>
					</div>

					<label class="col-md-4 control-label" for="botao"></label>
					  <div class="col-md-4">
					    <button id="botao" name="botao" class="btn btn-success">Enviar</button>
					  </div>
					</fieldset>
					</form>

		
			</div>


		</br></br></br></br>	
			<section id="sectionrodape" style="background-color:rgba(0,0,0,0.9)" >
			<div id="footer" >
				<div class="container" >
					</br>
					<div id="credit" class="row">	
					<p class="muted credit" > Copyright © 2017  &nbsp;-&nbsp; Desenvolvido por: 
						<a href"#">Caio Rodrigues & Juliana Cristina</a>
					</p>
					</div><!--credit -->
				</div> <!-- Conteiner -->
   			</div> <!-- Footer -->
   		</section> <!-- Rodapé -->
		</div>
	</body>
</html>		