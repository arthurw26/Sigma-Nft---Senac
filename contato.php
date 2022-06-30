<?php
// include do footer 
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
// não se utiiza requesst por conta de segurança


//valida se a variavel post txtNome foi enviada
if(isset($_POST['txtNome'] ) ){
    $nome = strtoupper($_POST['txtNome']);
    echo $nome. '<br>';  
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
    echo $email.'<br>';
}
if(isset($_POST['telefone'])){
    $telefone = $_POST['telefone'];
    echo $telefone. '<br>';
}
if(isset($_POST['duvida'])){
    $duvida = $_POST['duvida'];
    echo $duvida. '<br>';
}

?>

<h1>Contato</h1>
<form action="./contato.php" method="post">
    <ul style='list-style: none;'>
        <li>
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome Completo">
        </li>

        <li>
            <input type="email" name="email" id="email" placeholder="E-mail">
        </li>

        <li>
            <input type="tel" name="telefone" id="telefone" placeholder="Telefone">
        </li>

        <li>
        <textarea name="duvida" id="duvida" cols="30" rows="10" placeholder="Digite sua duvida..."></textarea>
        <input type="submit" value="Enviar">
    </li>
    </ul>
    
</form>


<?php
// include do footer
include_once './includes/_footer.php';
?>