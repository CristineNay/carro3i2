<?php 
    try {
        $conecta = mysqli_connect("localhost", "cristinenay","", "carro");
        //servidor, usuario banco, senha, nome do banco
        
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $cor = $_POST['cor'];
        $valor = $_POST['valor'];
        
        $query = "insert into carro values (null, '$marca', '$modelo',$ano,'$cor',$valor);";
        
        mysqli_query($conecta, $query);
        echo "Cadastro realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
    
?>

<!-- phpmyadmin-ctl install