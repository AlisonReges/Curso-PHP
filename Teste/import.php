<?php

    include("mysqlconect.php");
    if(isset($_POST['enviar'])){
        $arquivo = $_FILES['file'];
                
        $arquivoNew = explode('.',$arquivo['name']);

        if($arquivoNew[sizeof($arquivoNew)-1]!='csv'){
            die('Você não pode fazer upload deste tipo de arquivo.');
        }else{
            
            move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
            var_dump($arquivo);
            echo "sucesso";
                        
            /*$sql_code =
            "LOAD DATA INFILE "."'C:\\\\wamp64\\\\www\\\\Curso-PHP\\\\Curso-PHP\\\\Teste\\\\uploads\\\\".$arquivo['name']."'".
            "INTO TABLE cadastros
            FIELDS TERMINATED BY ','
            ENCLOSED BY '\"'
            LINES TERMINATED BY '\\n'
            IGNORE 1 ROWS
            (nome,matricula,cpf);";

            $query = mysqli_query($link,$sql_code);
            
            if (!$query) {
                die('Erro ao importar arquivo: '.mysqli_error($link));
            }
            else{
                echo "Sucesso ao importar arquivo!";
            }*/
        }

    }
    
?>