<?php
include_once './includes/_head.php';
include_once './includes/_header2.php';


?>
<link rel="stylesheet" href="./css/contato.css?1422585377" type="text/css"/>

<h1><strong>Contato</strong></h1>
<section id="contato_info">
<form action="./contato.php" method="post">
    <ul>
        <li>
            <p><label for="txtNome">Nome Completo</label></p>
            <input type="text" name="txtNome" id="txtNome">
        </li>
        <li>
            <p><label for="txtEmail">E-mail</label></p>
            <input type="text" name="txtEmail" id="txtEmail">
        </li>
        <li>
            <p><label for="txtTel">Telefone</label></p>
            <input type="text" name="txtTel" id="txtTel">
        </li>
        <li>
            <p><label for="txtMensagem">Mensagem</label></p>
            <textarea name="txtMensagem" id="txtMensagem" cols="20" rows="10"></textarea>
        </li>
    </ul>
    <p><button type="button" class="btn btn-warning"><strong>Enviar</strong></button></p> 
</form>
</section>






<?php
// include do footer
include_once './includes/_footer.php';
?>