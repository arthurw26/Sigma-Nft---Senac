<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1>Home</h1>

<?php
 for ($i=0; $i <3 ; $i++) { 
     echo $i. '<br>';
     echo $produtos [$i]{'nome'};
     echo $produtos [$i]{'preco'};
     echo $produtos [$i]{'imagem'};
     ?>
     <img src="./content/<?php echo $produtos[$i]['imagem'];?>" width='200px'> <?php
     echo '<hr>';
 }

?>



<?php
// include do footer
include_once './includes/_footer.php';
?>