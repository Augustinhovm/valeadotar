<?php

include_once('conexao2.php');

$palavra1 = $_POST['palavra1'];
$palavra2 = $_POST['palavra2'];
$palavra3 = $_POST['palavra3'];
$palavra4 = $_POST['palavra4'];

$sql = "SELECT * FROM animais where ani_especie = '$palavra1' and ani_porte = '$palavra2' and ani_genero = '$palavra3' and ani_cidade = '$palavra4'";
$resultado_animais = mysqli_query($conn, $sql);

?>
<?php while ($rows_animais = mysqli_fetch_assoc($resultado_animais)) {
    echo '<div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="card" style="width: 16rem;" >
                                 <img src="upload/' . $rows_animais['ani_id'] . '" width="200" height="200" class="card-img-top " style="border-radius: 1%" alt="...">
                                    <div class="card-body text-left"   style="color: #684686; ">                        
                                        <p>Nome: ' . $rows_animais['ani_nome'] . '</p>
                                        <p>Porte: ' . $rows_animais['ani_porte'] . '</p>
                                        <p>Cidade: ' . $rows_animais['ani_cidade'] . '</p>
                                        <p>Gênero: ' . $rows_animais['ani_genero'] . '</p>
                                        <p>Espécie: ' . $rows_animais['ani_especie'] . '</p>                        
                                        <div class="form-group col-12 text-center"> 
                                            <a href="detalhes.php?ani_id=' . $rows_animais['ani_id'] . ' class="btn btn-light" style="border: 1px solid #684686;">Adotar</a>
                                        </div>
                                    </div>
                            </div>
                        </div>';
}
?>