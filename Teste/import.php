<?php

    include("mysqlconect.php");
    if(isset($_POST['enviar'])){
        $arquivo = $_FILES['file'];
        $arquivoNew = explode('.',$arquivo['name']);

        if($arquivoNew[sizeof($arquivoNew)-1]!='csv'){
            die('Você não pode fazer upload deste tipo de arquivo.');
        }else{
            
            move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);

            $sql_code = "
            LOAD DATA INFILE 'C:\\wamp64\\www\\Curso-PHP\\Curso-PHP\\Teste\\uploads\\cadastro.csv'
            INTO TABLE usuario
            FIELDS TERMINATED BY ','
            ENCLOSED BY '\"'
            LINES TERMINATED BY '\\n'
            (nome,niveldeacesso,senha,genero,datadecadastro,cpf);";
            $query = mysqli_query($link,$sql_code);
            if(isset($query)){
                var_dump($sql_code);
                echo "Sucesso ao importar";
            }
        }

        
    }
        
?>