<?php
    $bdHost = 'localhost';
    $bdUsername = 'root';
    $bdPassword = '';
    $bdName = 'bd_rifas';

    $conexao = new mysqli($bdHost,$bdUsername,$bdPassword,$bdName);
    
    //if($conexao->connect_errno){
    //    echo "Error connecting to";
    //}
    //else{
    //    echo "connected successfully";
    //}
    //sucessfully connected
    
?>