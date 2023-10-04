<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo formulário</title>
</head>
<body>
    <h1>Exemplo formulário</h1>
    <form action="processa.php" method="post">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" autofocus autocomplete="off" maxlength="30"><br/><br/>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" autocomplete="on" maxlength="20"><br/><br/>
        <input type="submit" name="enviar" value="Entrar">        
        <input type="reset" name="limpar" value="Limpar">
    </form>
</body>
</html>