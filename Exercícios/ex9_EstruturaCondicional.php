<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/aulaPHP/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i. <br/>";
        if($i < 16){
          $tipoVoto = "voto nao obrigatorio.";
        }
        elseif(($i >= 16 && $i < 18) || ($i > 65)){
            $tipoVoto = "voto opcional.";
          }
          else{
            $tipoVoto = "voto obrigatorio.";
          }
        echo "Para essa idade o $tipoVoto";
        
    ?>
    <form action="" method="get">
      Ano de nascimento:
      <input type="number" name="ano">
      <input type="submit" value="Verificar">
    </form>
</div>

</body>
</html>
 