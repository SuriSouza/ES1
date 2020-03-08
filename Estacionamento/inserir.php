<?php


$teste = "<script>confirmaVaga()</script>";


echo $teste;




function departamento(){
    include_once("conexao.php");
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_NUMBER_INT);
    $codigo = filter_input(INPUT_POST, 'código',FILTER_SANITIZE_NUMBER_INT);
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_NUMBER_INT);
    $dnr = filter_input(INPUT_POST, 'dnr',FILTER_SANITIZE_NUMBER_INT);

    $saida ="INSERT INTO departamento(código,nome,dnr) VALUES ($codigo,'$nome',$dnr)";
    $resultado = pg_query($conn, $saida);
}
?>