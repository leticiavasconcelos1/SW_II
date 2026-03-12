<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    <?php 
        $nome = $_POST['nome']; 
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $anoatual = date('Y');
        $nasc =  $anoatual - $idade ;
        // echo $nome
    ?>

    <p>O nome é : <?php echo $nome ?> </p>
    <p>O email é : <?php echo $email ?> </p>
    <p>O idade é : <?php echo $idade ?></p>
    <p> seu ano de nascimento é: <?php echo $nasc ?></p>
    <p style =></p>

    <hr>

    <?php
        if ($idade >=18) {
            echo "<p style = 'color: blue;'>  voce é maior de idade </p>" ;
        

        } else{
            echo "<p style = 'color: red;'>  voce é menor de idade </p>" ;
        }

        echo "<hr>" ;

        echo " <h1> lista de clientes </h1> ";
        echo " <ul> ";
        // laco :
        for ($i=1; $i <=3 ; $i++) { 
            echo "<li> Cliente $i </li>" ;
        }
        echo "</ul>"; 
    ?>


     <hr>

     <!-- <h1> lista de clientes</h1>
     <ul>
        <li>Cliente 1</li>
        <li>Cliente 2</li>
        <li>Cliente 3</li>
     </ul> -->



</body>
</html>