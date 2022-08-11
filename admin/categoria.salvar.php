<?php
include_once '../includes/_banco';
include_once './_header.php';
if (isset($_GET['id']) || !empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM categorias WHERE CategoriaID =".$id;
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
}
    else{
        $id = '';
        $dados['Nome'] = '';
        $dados['Descrição'] = '';
        $dados['Imagem'] = ''; 
    }
    include_once  './menu.php';
?>
    <main>
        <h2>Adminstração das Categorias</h2>
        <a href="categoria-lista.php">Listagem</a>
        <hr>
        <form action="categoria-processa.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="salvar" name="acao">
        
        </form>
    </main>






<?php
include_once './footer.php';
?>