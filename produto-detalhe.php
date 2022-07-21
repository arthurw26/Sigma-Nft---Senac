<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET['id'];
$tipo = $_GET['tipo'];

?>

<div class="container mt-5">
    <div class="row">
    <?php
        // cria uma variavel que contem SQL executado
        $sql = "SELECT * FROM produtos WHERE Ativo = 1 AND ProdutoID = {$id}";
        // executa o comando SQL
        $exec = mysqli_query($conn,$sql);
        //informa a quantidade de registros de dados
        $numProdutos = mysqli_num_rows($exec);

        // percorre todos os dados extraidos do banco
        ($dados = mysqli_fetch_assoc($exec))
        ?>

        <div class="col">
        <h1><?php echo $dados ['Nome'];?></h1>
        <p><?php echo $dados ['Descricao'];?></p>
        <img src="./content/<?php echo $dados ['Imagem'];?>" alt="">
        <h4><?php echo $dados ['Preco'];?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col">Voltar</div>
        <div class="col">Comprar</div>

    </div>

</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>