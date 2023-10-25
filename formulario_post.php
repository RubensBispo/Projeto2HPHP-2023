<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo formulário</title>
</head>
<body>
    <h1>Exemplo formulário</h1>
    <form action="processa_estado_civil.php" method="post">
        <label for="usuario">Nome</label>
        <input type="text" name="nome" id="nome" autofocus autocomplete="off" maxlength="30"><br/><br/>
        <label for="senha">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" autocomplete="on" maxlength="20"><br/><br/>
        <input type="radio" name="estado_civil" value="solteiro"><label for="solteiro">Solteiro</label><br/>
        <input type="radio" name="estado_civil" value="casado"><label for="casado">Casado</label><br/><br/>

        <input type="checkbox" name="asp">ASP<br/>
        <input type="checkbox" name="asp">PHP<br/>
        <input type="checkbox" name="asp">JAVA<br/>

        <p>Estados</p>
        <select name="estados">
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="BA">Bahia</option>
        </select><br/><br/>

        <input type="hidden" name="user" value="admin">
        <input type="hidden" name="nivel" value="2">

        <input type="submit" name="enviar" value="Entrar">   
        <input type="reset" name="limpar" value="Limpar">
    </form>
</body>
</html>