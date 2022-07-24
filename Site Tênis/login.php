<?php
include_once './includes/_head.php';
include_once './includes/_header3.php';
?>
<link rel="stylesheet" href="./css/login.css">
<h1>Login e Cadastro</h1>
<section id="contato_info">
<form action="./contato.php" method="post">
    <ul>
        <li>
            <p><label for="txtNome">Email ou Nome de Usuário</label></p>
            <input type="text" name="txtNome" id="txtNome">
        </li>
        <li>
            <p><label for="txtEmail">Senha</label></p>
            <input type="text" name="txtEmail" id="txtEmail">
        </li>
    </ul>
    <p><button type="button" class="btn btn-warning"><strong>Entrar</strong></button></p> 
    <p><button type="button" class="btn btn-warning"><strong>Cadastrar</strong></button></p> 
</form>
</section>
<?php
include_once './includes/_footer.php';
?>