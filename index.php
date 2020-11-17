<?php

    session_start();

?>
<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/style.css">
    <title>Title</title>

</head>

<body>
    
    <div class="header">

    </div>

    <?php require_once("menus_topo.php"); ?>

    <div class="section">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/assets/img/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/assets/img/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/assets/img/3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container-fluid">
    <br>
    <h2 class="text-center"> COMO ADOTAR?</h2>
    <br>	

    <style type="text/css">.row {
									text-align: center;
								}</style>

  	<div class="row">
      <div class="col-lg-4">
      	<h2 class="text-center">Passo 1</h2>
        <img src="_imagens/cadastre-se.png" height="110" width="110" class="bd-placeholder-img rounded-circle">
        <p class="text-center">Cadastre-se no nosso Site.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

      	<h2 class="text-center">Passo 2</h2>
        <img src="_imagens/escolha.png" height="110" width="110" class="bd-placeholder-img rounded-circle">
        <p class="text-center">Escolha o Peludo que mais combina com você.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

      	 <h2 class="text-center">Passo 3</h2>
        <img src="_imagens/entre-contato.png" height="110" width="110" class="bd-placeholder-img rounded-circle">
        <p class="text-center">Entre em contato com o doador e seja feliz com seu novo Animalzinho.</p>
      </div><!-- /.col-lg-4 -->
    </div>


     <br><br><br>
    <h2 class="text-center"> COMO DOAR?</h2>
    <br>	

    <style type="text/css">.row {
									text-align: center;
								}</style>

  	<div class="row">
      <div class="col-lg-4">
      	<h2 class="text-center">Passo 1</h2>
       		 <img src="_imagens/cadastre-se.png" height="110" width="110" class="bd-placeholder-img rounded-circle">		
        <p class="text-center">Cadastre-se no nosso Site.</p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
      	<h2 class="text-center">Passo 2</h2>
         <img src="_imagens/dados.png" height="110" width="110" class="bd-placeholder-img rounded-circle">
        <p class="text-center">Coloque os dados do seu Animal com Foto.</p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
      	 <h2 class="text-center">Passo 3</h2>
         <img src="_imagens/espere.png" height="110" width="110" class="bd-placeholder-img rounded-circle">
        <p class="text-center">Aguarde ser notificado sobre pessoas interessadas.</p>
      </div><!-- /.col-lg-4 -->
    </div>
    <br><br><br><br><br><br>

<<<<<<< HEAD
=======
                     
                             
        <div class="container">	       
           <div class="row justify-content-center mt-5">            

              <?php while ($rows_animais = mysqli_fetch_assoc($resultado_animais)) { 
                   echo '<div class="col-lg-3 col-md-6 col-12 mb-4">
	       		            <div class="card" style="width: 16rem;" >
	  		 	                 <img src="inserir_animais/upload/'.$rows_animais['ani_id'].'" width="200" height="200" class="card-img-top " style="border-radius: 1%" alt="...">
  			                        <div class="card-body text-left"   style="color: #684686; ">	  					
                                        <p>Nome:'. $rows_animais['ani_nome']. '</p>
	    				                <p>Porte: '. $rows_animais['ani_porte'] .'</p>
	    				                <p>Cidade: '. $rows_animais['ani_cidade'] .'</p>	    				
                                        <div class="form-group col-12 text-center"> 
<<<<<<< HEAD
	   		 			                    <a href="detalhes.php?ani_id'.$rows_animais['ani_id'].'" class="btn btn-light" style="border: 1px solid #684686;">Adotar</a>
=======
	   		 			                    <a href="" class="btn btn-light" style="border: 1px solid #684686;">Adotar</a>
>>>>>>> 6a5db49a3715b63158a52e1262f44857fbfb2097
                                        </div>
	  				                </div>
				            </div>
                        </div>';
                   } 
                ?>
		    </div>
        </div>
>>>>>>> 04c291bf5c08cce85691e5e4d78b59a41033352d

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Os benefícios da adoção de animais. <span class="text-muted">Mais saúde para  seu lar!</span></h2>
        <p class="lead">Os bichinhos fazem bem para o coração: os pets podem ajudar o coração dos donos, muito além apenas do amor, estudos apontam que criar um bicho em casa ajuda a reduzir a pressão sanguínea, o colesterol e o nível de triglicérides e consequentemente a evitar ataques cardíacos.</p>
      </div>
      <div class="col-md-5">
        <img src="_imagens/pets-saude.png">
      </div>
    </div>
    <br><br><br><br>


    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Os benefícios da adoção de animais. <span class="text-muted">Mais felicidade na sua vida!</span></h2>
        <p class="lead">Ajuda a diminuir a depressão: ter um animal é uma excelente maneira de ajudar pessoas com depressão, pois a essa convivência reduz a sensação de solidão, a ansiedade  e melhora o bom-humor. Estudo feito pela Universidade Estadual de Nova York, mostrou que os bichos de estimação são ótimas companhias para combater o estresse, pois eles ajudam a quebrar sua rotina.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="_imagens/pet-feliz.jpeg" height="450" width="500">
      </div>
    </div>
    <br><br><br><br>


    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Os benefícios da adoção de animais. <span class="text-muted">Gratidão, carinho e amor incondicional.</span></h2>
        <p class="lead">Animais adotados sentem muito amor e gratidão, e gostam de deixar isso bem claro para os seus donos, principalmente pelo fato de já terem sofrido muito, pois foram abandonados e muitas vezes sofreram maus tratos. Por isso, quando você adota um cachorro ou um gato que já passou por situações muito difíceis, a probabilidade dele ser grato à você é de 100%. Dá pra ver no olhinho deles. É incrível a relação entre um vira-lata abandonado e o seu novo dono. Tenha certeza que ele será um companheiro fiel que vai amar você independentemente do que aconteça. Além de fazer você se sentir bem, o amor incondicional deles ajuda também a sua autoestima, devido ao imenso carinho que eles demonstram. Diz-se que os animais sabem quando foram resgatados, então o vínculo entre você e ele com certeza será incrível.</p>
      </div>
      <div class="col-md-5">
        <img src="_imagens/adocao-cachorro.jpeg" height="450" width="500">
      </div>
    </div>

    <div class="col-md-5 p-lg-5 mx-auto my-5 text-center">
    <h2 class="display-6 font-weight-normal">Gostou da ideia de adotar um Animal?</h2>
    <p class="lead font-weight-normal">Clique no botão abaixo e veja nossos Peludos.</p>
    <a class="btn btn-outline-secondary" href="index.php">Adotar</a>
  </div>
 </div>

    <div class="footer">
        <div class="jumbotron mt-5 mb-0" style="background-color: #684686; border-radius: 0;">
            <div class="row">
                <div class="col-md-12 text-center text-light">
                    <div class="row">
                        <div class="col-md-3">
                            <p>Quer um Amigo?</p>
                            <span>Adoção reponsável</span><br>
                            <span>Procure um amigo</span><br>
                            <span>Inspire-se</span><br>
                        </div>
                        <div class="col-md-3">
                            <p>Quem somos</p>
                            <span>Sobre nós</span><br>
                            <span>Perguntas frequentes</span><br>
                            <span>Fale conosco</span><br>
                        </div>
                        <div class="col-md-3">
                            <p>Melhores Amigos</p>
                            <span>Dicas e cuidados</span><br>
                            <span>Guarda responsável</span><br>
                            <span>Não perca seu amigo</span><br>
                        </div>
                        <div class="col-md-3 my-3">
                            <img src="src/assets/img/logofooter.png" class="img-fluid mb-4"
                                style="width: 50%; border-radius: 1%" alt="...">
                            <span>FALE@AMIGONAOSECOMPRA.COM.BR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require_once("modal_login.php"); ?>

    <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>