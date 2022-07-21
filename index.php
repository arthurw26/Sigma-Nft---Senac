<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1>Home</h1>

<div class="container">
    <h2>Promoção</h2>
    <div class="row mt-5 ml-4">
        <?php
        // cria uma variavel que contem SQL executado
        $sql = "SELECT * FROM produtos WHERE Ativo = 1 LIMIT 3";
        // executa o comando SQL
        $exec = mysqli_query($conn,$sql);
        //informa a quantidade de registros de dados
        $numProdutos = mysqli_num_rows($exec);

        // percorre todos os dados extraidos do banco
        while ($dados = mysqli_fetch_assoc($exec)) {
        ?>
        <div class="card m-3" style="width: 18rem;">
            <img src="./content/<?php echo $dados['Imagem'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dados['Nome']; ?></h5>
                <p class="card-text"><?php echo $dados['Descricao'];?> </p>
                <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID'];?>&tipo=promocao" class="btn btn-primary">Comprar</a>
            </div>  
        </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>