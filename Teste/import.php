<?php

    include("mysqlconect.php");
    if(isset($_POST['enviar'])){
        $arquivo = $_FILES['file'];
        $arquivoNew = explode('.',$arquivo['name']);
        var_dump($arquivo['name']);

        if($arquivoNew[sizeof($arquivoNew)-1]!='csv'){
            die('Você não pode fazer upload deste tipo de arquivo.');
        }else{
            
            move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
            

            $sql_code = "
            LOAD DATA INFILE 'C:\\\wamp64\\\www\\\Clone\\\Curso-PHP\\\Teste\\\uploads\\\arquivo.csv'
            INTO TABLE cadastros
            FIELDS TERMINATED BY ','
            ENCLOSED BY '\"'
            LINES TERMINATED BY '\\n'
            IGNORE 1 ROWS
            (nome,niveldeacesso,senha,genero,datadecadastro,cpf);";
            var_dump($sql_code);
            $query = mysqli_query($link,$sql_code);
            
            if (!$query) {
                die('Invalid query: '.mysqli_error($link));
            }
        }

        
    }
        
?>