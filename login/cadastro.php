<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadasto.css">
    <title>cadastro</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php
           
           include("config.php");

           if(isset($_POST['submit'])){

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $numero = $_POST['numero'];

            $verify_query = mysqli_query($con, 
            "SELECT * FROM users WHERE email='$email' and numero='$numero'");
            if(mysqli_num_rows($verify_query)  != 0){

                echo"<div calss='message'>
                    <p> este email já está em uso </p>
                    </div>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>voltar</button>";

            }else{
                mysqli_query($con, "INSERT INTO users(nome,email,numero)
                 VALUE('$nome','$email','$numero')") or die("erro ocorrido");
                   echo"<div calss='message'>
                   <p> Cadastrado com sucesso</p>
                   </div>";
               echo header('location:editar.php');
            }
           }else{

?>
            
            <form action="" method="post">
                <div class="input">
                    <label for="username">Nome completo</label><br>
                    <input type="text" name="nome" id="name" autocomplete="off">
                </div>

                <div class="input">
                    <label for="email">Email</label><br>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="input">
                    <label for="numero">Número para contato</label>
                    <input type="number" name="numero" id="numero" autocomplete="off" required>

                <div class="enviar">
                    <input type="submit" class="btn" name="submit" value="cadastrar" required>
                     </div>
                  </div>
            </form>
        </div>
        <?php }  ?>
      </div>
      

<!-- footer section starts  -->

<section class="footer" id="share">

<div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-instagram"></a>
   

</div>

<div class="links">
    <a href="#">Início</a>
    <a href="#">Tratamentos</a>
    <a href="#">especialidades</a>
</div>

<div class="credit">Ola Mundo<span>Por</span> | Vtwave</div>

</section>

<!-- footer section ends -->

</body>
</html>
