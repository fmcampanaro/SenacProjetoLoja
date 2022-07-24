<?php
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header1.php';
?>
<link rel="stylesheet" href="./css/index.css" type="text/css"/>
    <section id="nomes">
        <h1><strong>NIKE</strong></h2>
        <h2><strong>DUNK LOW</strong></h1>
        <h3><strong>SAIL COAST</strong></h1>
    </section>
    <section id="botoes">
        <p><a href ="produto-detalhe.php?id=4" type="button" class="btn btn-warning"><strong>Ver</strong></a></p> 
        <p><a href ="produtos.php" type="button" class="btn btn-warning"><strong>Outros</strong></a></p> 
    </section>
    
    <div id="enfeite"></div>
    <img id="tenis" src="./fotos/dunk_coast.png" alt="">
    
    

<?php

// include do footer
include_once './includes/_footer.php';
?>