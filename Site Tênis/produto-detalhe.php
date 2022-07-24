<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header3.php';
$id = $_GET['id'];
?>
<link rel="stylesheet" href="./css/detalhe.css">
<div class="container">
<div class="cartao">
    <img src="./fotos/produtos/<?php echo($produtos[$id]["imagem"]) ?>" class="imagem-cartao" alt="...">
    <div id="info">
        <p id="marca"><?php echo($produtos[$id]["marca"]) ?></p>
        <p id="nome"><?php echo($produtos[$id]["nome"]) ?></p>
        <p id="preco"><?php echo($produtos[$id]["preco"]."R$") ?></p>
            <div class="col"><a class="btn btn-warning comprar" href="#" role="button">Comprar</a></button></div>
    </div>
        

</div>
    
    <?php
// include do footer
include_once './includes/_footer.php';
?>