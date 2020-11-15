<?php
session_start();
include_once('conexao2.php');

$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
$result_animais = "SELECT * FROM animais";
$resultado_animais = mysqli_query($conn, $result_animais);
$total_animais = mysqli_num_rows($resultado_animais);
$quantidade_pagina = 8;
$num_pagina = ceil($total_animais/$quantidade_pagina);
$inicio = ($quantidade_pagina*$pagina)-$quantidade_pagina;

$result_animais2 = "SELECT * FROM animais limit $inicio, $quantidade_pagina";
$resultado_animais = mysqli_query($conn, $result_animais2);
$total_animais = mysqli_num_rows($resultado_animais);

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #613488;">
            <a class="navbar-brand" href="#">
                <img src="src/assets/img/log.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Início </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Quero Adotar</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="inserir_animais/index.php">Quero Doar</a>
                    </li>
                    
                </ul>
            </div>
            <form class="form-inline">
                <button class="navbar-toggler" type="button" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="login-cadastro/index.php"><input type="button" class="btn btn-danger mx-3" style="background-color:#613488; color:white; border: 1px solid #3a1e53;" value="Cadastro"></a></input>
                <input type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24" value="Login"></input>
            </form>
        </nav>

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

        <div class="container w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron" id="formprincipal" style="margin-top: -70px; background-color: #f4aa24;">
                        <form class="text-center" style="color: white">
                            <p style="font-size: 40px; font-family: cursive; text-align: center; margin-top: -20px;">
                                Encontre seu novo amigo</p>
                            <div class="form-row ">
                                <div class="form-group col-md-6">
                                    <label for="inputtext1">Espécie</label>
                                <select class="form-control" name="ani_especie" id="sel1" placeholder="Espécie" required>
                                    <option selected></option>
                                    <option>Gato</option>
                                    <option>Cachorro</option>
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputtext2">Porte</label>
                                <select class="form-control" name="ani_porte" id="sel1" placeholder="Porte" required>
                                    <option selected></option>
                                    <option>Pequeno</option>
                                    <option>Medio</option>
                                    <option>Grande</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputtext3">Gênero</label>
                                <select class="form-control" name="ani_genero" id="sel1" placeholder="Gênero" required>
                                    <option selected></option>
                                    <option>Femea</option>
                                    <option>Macho</option>
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputtext4">Cidade</label>
                                <select class="form-control" name="ani_cidade" id="sel1" placeholder="Cidade" required>
                                    <option selected></option>
                                    <option>Aparecida</option>
                                    <option>Cachoeira Paulista</option>
                                    <option>Guaratinguetá</option>
                                    <option>Lorena</option>
                                    <option>Pindamonhangaba</option>
                                    <option>Potim</option>
                                    <option>Roseira</option>
                                </select>
                                </div>
                            </div>

                            
                            <div class="row justify-content-center">
                                <button type="button" class="btn btn-danger mt-5" style="background-color:#613488; color:white; border: 1px solid #684686;">Procurar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="main">
        <div class="section">
            <div class="container w-100 ">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="my-4" style="font-size: 40px; font-family: cursive; text-align: center; margin-top: -20px; color: #f4aa24;">
                            Novos no Site</p>
                       <h4><span>Nosso site está cheio de peludos ansiosos pra ter uma família. Tente diferentes buscas até
                            encontrar um peludo pra chamar de seu. :) </span></h4>
                    </div>
                </div>
            </div>
        </div>

        	
        	<div class="row">

        	<?php while ($rows_animais = mysqli_fetch_assoc($resultado_animais)) { ?>

	       <div class="col-lg-3 col-md-6 col-12">
	       		<div class="card" style="width: 18rem;">

	  		 	 <img src="inserir_animais/upload/<?php echo $rows_animais['ani_id']; ?>" width="200" height="300" class="card-img-top" alt="Image not found">
	  				<div class="card-body text-center" >
	  					
	    				<h2>Nome: <?php echo $rows_animais['ani_nome']; ?></h2>
	    				<h5>Gênero: <?php echo $rows_animais['ani_genero']; ?></h5>
	    				<h5>Tamanho: <?php echo $rows_animais['ani_porte']; ?></h5>
	    				<h5>Cidade: <?php echo $rows_animais['ani_cidade']; ?></h5>
	    				<h5>Telefone:  <?php echo $rows_animais['ani_telefone']; ?></h5>
	   		 			<a href="#" class="btn btn-primary">Adotar</a>
	  				</div>
				</div>
			</div>
			<?php } ?>
		</div>

				<?php
					$pagina_anterior = $pagina - 1;
					$pagina_posterior = $pagina +1;
				?>

				<div>

					
				<nav aria-label="Page navigation example" >
 					 <ul class="pagination" >
   						 <li class="page-item">
   						 	<?php 
   						 		if($pagina_anterior !=0){ ?>
   						 			 <a class="page-link" href="index.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
        							<span aria-hidden="true">&laquo;</span>
     						 </a>
     						  <?php } else{ ?>
   						 		<?php } ?>
   						 </li>
   						 <?php 
   						 	for ($i=1; $i < $num_pagina + 1; $i++) { ?>
   						 		<li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>

   						<?php } ?>
    						
    					 <li class="page-item">
      						 <li class="page-item">
      						<?php 
   						 		if($pagina_posterior <= $num_pagina){ ?>
   						 			 <a class="page-link" href="index.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
        							<span aria-hidden="true">&raquo;</span>
     						 </a>
     						  <?php } else{ ?>
   						 		<?php } ?>
    					</li>
  					</ul>
				</nav>



            <div class="section">
                <div class="container w-100">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="my-4" style="font-size: 40px; font-family: cursive; text-align: center; margin-top: -20px; color: #f4aa24;">
                                Por que adotar?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="src/assets/img/log.png" class="img-fluid" style="border-radius: 1%" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut iure maxime fugiat non
                                        ullam tempore, ipsum, consequuntur </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="src/assets/img/log.png" class="img-fluid" style="border-radius: 1%" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut iure maxime fugiat non
                                        ullam tempore, ipsum, consequuntur </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="src/assets/img/log.png" class="img-fluid" style="border-radius: 1%" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut iure maxime fugiat non
                                        ullam tempore, ipsum, consequuntur </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <img src="src/assets/img/logofooter.png" class="img-fluid mb-4" style="width: 50%; border-radius: 1%" alt="...">
                                <span>FALE@AMIGONAOSECOMPRA.COM.BR</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Login Vale Adotar </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="logar.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Login"></input>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #f4aa24; color:white; border: 1px solid #f4aa24;" value="Fechar"></input>
                    <input type="button" class="btn btn-primary" style="background-color:#613488; color:white; border: 1px solid #684686;" value="Logar"></input>
                </div>
            </div>char
        </div>
    </div>

    <script>
        $('#myModal').modal({
            keyboard: false
        })
    </script>

    <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>