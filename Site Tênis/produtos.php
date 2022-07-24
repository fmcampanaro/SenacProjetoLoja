<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header5.php';
include_once './includes/_dados.php';
?>
<link rel="stylesheet" href="./css/produtos.css">
<h1>Produtos</h1>
<section>
    <?php
        foreach($produtos as $key => $value){
    ?>
    <div class="cartao">
        <img src="./fotos/produtos/<?php echo($value["imagem"]) ?>" class="imagem-cartao" alt="...">
        <div class="card-body">
            <h4 class="card-title"><?php echo($value["nome"]) ?></h4>
            <h3 class="card-text"><?php echo($value["preco"]."R$") ?></h3>
            <a href="produto-detalhe.php?id=<?php echo $key ?>" class="btn btn-warning">Ver</a>
        </div>
    </div>
    <?php
        }
    ?>
</section>
        


<?php
// include do footer
include_once './includes/_footer.php';
?>