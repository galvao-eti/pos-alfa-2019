<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <form action="addUser.php" method="post">
            <label for="email">E-mail: </label>
            <input type="text" name="email"><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha"><br>
            <label for="confirma_senha">Confirme a Senha: </label>
            <input type="password" name="confirma_senha"><br>
            <button type="submit">Enviar</button>
        </form>
    </body> 
</html>
