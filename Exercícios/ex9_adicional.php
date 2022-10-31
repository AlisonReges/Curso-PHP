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
        if(isset($_GET["analisar"])){
            $n1=$_GET['n1'];
            $n2=$_GET['n2'];
            var_dump($n1);
            if(($n1+$n2)/2 > 6){
                echo "Você está aprovado.";
            }elseif(($n1+$n2)/2 < 6 || ($n1+$n2)/2 > 3){
                echo "Você está em recuperação";
            }else{
                echo "Você está reprovado";
            }
        }
    ?>
    <form action="" method="get">
        Nota1:
        <input type="number" name="n1" placeholder="N1">
        <br/>
        Nota2:
        <input type="number" name="n2" placeholder="N2">
        <br/>
        <input type="submit" value="Analisar" name="analisar">

    </form>
</div>
</body>
</html>
 