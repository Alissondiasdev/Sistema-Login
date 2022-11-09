<?php

session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])== true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: index.php');
}
    
    $logado = $_SESSION['email'];



include('conexao.php');
$sqli = "SELECT * FROM cadastro";
$result = mysqli_query($conexao, $sqli);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">email</th>
      <th scope="col">telefone</th>
      <th scope="col">sexo</th>
      <th scope="col">data de nascimento</th>
      <th scope="col">cidade</th>
      <th scope="col">estado</th>
      <th scope="col">endereço</th>
      <th scope="col">...</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    
    

    while($userdata = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" .$userdata['nome']."</td>";
        echo "<td>" .$userdata['email']."</td>";
        echo "<td>" .$userdata['telefone']."</td>";
        echo "<td>" .$userdata['sexo']."</td>";
        echo "<td>" .$userdata['data_nascimento']."</td>";
        echo "<td>" .$userdata['cidade']."</td>";
        echo "<td>" .$userdata['estado']."</td>";
        echo "<td>" .$userdata['endereco']."</td>";
        

    }
   
    ?>
    
    </div>
    
</body>
</html>