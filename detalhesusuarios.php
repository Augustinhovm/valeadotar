<?php
session_start();

//SE O USUÁRIO NÃO ESTIVER AUTENTICADO, FAZ O ENVIO DO LOGIN

include_once('conexao2.php');

$msg   = null;
//---| APÓS SUBMIÇÃO DO FORMULÁRIO, RECEBE VALOR SELECIONADO |---
if(array_key_exists("status",$_POST) && strlen(trim($_POST["status"]))>0)
{
    //---| PEGAR A VARIÁVEL E INSERIR NO BANCO |---
    $erros = 0;
    
    $ani_id = filter_input(INPUT_POST, 'ani_id', FILTER_SANITIZE_NUMBER_INT);
	if (!$ani_id) {
        $erros++;
		$msg .= "ID Inválido!<br>";
    }

    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
	if (!$status) {
        $erros++;
		$msg .= "STATUS Inválido!<br>";
    }
    
    $msg = '<div class="alert alert-danger">'.$msg.'</div>';
    
    if($erros<1)
    {
        $query = "UPDATE animais SET status='".$status."' WHERE ani_id=".$ani_id;
        $resultado_usuarios = mysqli_query($conn, $query);
        if ($resultado_usuarios) {
            $msg = '<div class="alert alert-success">Status alterado com sucesso</div><br>';
        }
    }

}
//---

$ani_id = $_GET['ani_id'];
$result_animais = "SELECT a.*, (SELECT nome FROM usuarios WHERE id=a.usuario_id) as nome_usuario 
                    FROM animais a 
                    WHERE ani_id='$ani_id'";
$resultado_animais = mysqli_query($conn, $result_animais);
$row_animais = mysqli_fetch_assoc($resultado_animais);
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
$result_animais = "SELECT * FROM animais WHERE ani_id='$ani_id'";
$resultado_animais = mysqli_query($conn, $result_animais);
$total_animais = mysqli_num_rows($resultado_animais);

    

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/style.css">
    <title>Detalhes</title>
</head>

<body>

    <style type="text/css">
        .row {
            font-family: 'Titillium Web', sans-serif;
        }

        .section-nome-animal {
            font-family: 'Titillium Web', sans-serif;
        }
    </style>

    <div class="header">
        <?php require_once("menus_topo.php"); ?>
        <div class="container">


            <div class="section-nome-animal">
                <div class="container">
                    <div class="text-center">
                        <br>
                        <h1><?php echo $row_animais['ani_nome'];  ?></h1>
                    </div>
                </div>
            </div>

            <div class="section-detalhes">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <figure>
                                <?php while ($rows_animais = mysqli_fetch_assoc($resultado_animais)) {
                                    echo  '<img src="upload/' . $rows_animais['ani_id'] . '" width="600" height="400" class="rounded" style="border-radius: 1%" alt="...">';
                                }
                                ?>

                            </figure>

                        </div>
                        <div class="col-md-4">

                        </div>

                        <div class="col-md-3 jumbotron">
                            <h6><?php echo "Usuario ID: "   . $row_animais['usuario_id'];  ?></h6>
                            <h6><?php echo "Nome ID: "      . $row_animais['nome_usuario'];  ?></h6>
                            <h6><?php echo "Gênero: "       . $row_animais['ani_genero'];  ?></h6>
                            <h6><?php echo "Espécie: "      . $row_animais['ani_especie'];  ?></h6>
                            <h6><?php echo "Porte: "        . $row_animais['ani_porte'];  ?></h6>
                            <h6><?php echo "Descrição: "    . $row_animais['ani_descricao'];  ?></h6>                        
                            <h6><?php echo "Telefone: "     . $row_animais['ani_telefone'];  ?></h6>
                            <h6><?php echo "Cidade: "       . $row_animais['ani_cidade'];  ?></h6>
                            <h6><?php echo "<strong>STATUS:</strong> "; ?></h6>

                            <!--- CRIAR UM FORMULÁRIO -->
                            <form method="POST" id="frmMudaStatus">
                                <input type="hidden" name="ani_id" value="<?=$row_animais['ani_id']?>">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status1" value="EM TRANSACAO"  <?php echo ($row_animais['status']=="EM TRANSACAO")?'checked':null; ?>>
                                    <label class="form-check-label" for="status1">EM TRANSAÇÃO:</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status2" value="DOADO"  <?php echo ($row_animais['status']!="EM TRANSACAO")?'checked':null; ?>>
                                    <label class="form-check-label" for="status2">DOADO:</label>
                                </div>
                            </form>
                            <?php echo ($msg)?$msg:null; ?>
                            <!-- / -->
                            
                        </div>

                    </div>
                    <br><br>
                    <div class="text-center"><a href="quero_adotar.php" class="btn btn-warning" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24">Voltar</a> </div>
                </div>

            </div>
            <br>

           
        </div>
        <?php require_once("rodape.php"); ?>
        <?php require_once("modal_login.php"); ?>




    </div>
    <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("input.form-check-input").click(function(evt){
                $("form#frmMudaStatus").submit();
            })
        });
    </script>

</body>

</html>