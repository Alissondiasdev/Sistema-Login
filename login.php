<?php
session_start();
/* este !empty significa ( não estiver vazia)*/
/* este isset significa ( se existir )*/
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include('conexao.php');
    
    
$email = ($_POST['email']);
$senha = ($_POST['senha']);





$sql = "SELECT * FROM cadastro WHERE email = '$email' and  senha = '$senha' ";

$resultado = $conexao->query($sql);






if(mysqli_num_rows($resultado) <1){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: index.php');
}
else
{
    
    $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
    
    header('location: listagemdb.php');
}

}
else{
    header('location: index.php');
}

?>