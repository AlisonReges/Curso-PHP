<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Teste de importação de arquivo CSV.</title>
</head>
<body>
<div>
    <?php
        
    ?>
    <form action="import.php" method="post" enctype="multipart/form-data">
        <h1>Importar usuários</h1>
        <input type="file" name="file" placeholder="Insira o arquivo CSV...">
        <input type="submit" name="enviar" value="Enviar" />
    </form>

</div>
</body>
</html>
 