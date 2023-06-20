<!DOCTYPE html>
<html>
<head>
  <title>Fluxo caixa</title>
</head>
<body>
  <h1>Fluxo caixa</h1>
  <form action="cadrastro_fluxo_caixa.php" method="POST">
  Nome: <input type="text" name="nome"><br>
    Sobrenome: <input type="text" name="sobrenome"><br>
    Endereço: <input type="text" name="endereco">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" required></textarea><br><br>
    
    <input type="submit" value="Enviar">
  </form>
</body>
</html>