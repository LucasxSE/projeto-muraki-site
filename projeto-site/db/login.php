<?php
  include ('../db/conexao.php');

  /*
  isset -> verifica a existência de uma variável, retorna true caso ela exista;
  strlen -> retorna o tamanho de uma string;
  real_escape_string -> escapa caracteres especiais em uma string para que a consulta possa ser feita no SQl;
  query -> solicitação feita ao BD;
  num_rows -> retorna o número de linhas da consulta feita;
  fetch_assoc -> retorna uma matriz associativa que corresponde a linha obtida;
  */

  if(isset($_POST['email']) || isset($_POST['senha'])) {
    
    $email = $mysqli -> real_escape_string($_POST['email']);
    $senha = $mysqli -> real_escape_string(MD5($_POST['senha']));

    $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli -> error);

    $linhas = $sql_query -> num_rows;

    if($linhas == 1) {
        $usuario = $sql_query -> fetch_assoc();
        
        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: ../html/painelusuario.php");

        } else {
            echo "<script>alert('Falha ao logar! E-mail ou senha incorretos')</script>";
    }
}
?>