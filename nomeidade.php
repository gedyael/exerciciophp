<?php
   
   
   // Verifica se o formulário foi submetido
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Coleta os dados do formulário
       $nome = htmlspecialchars($_POST["nome"]);
       $idade = (int)$_POST["idade"];
   
       // Exibe os dados recebidos
       echo "Nome: " . $nome . "<br>";
       echo "Idade: " . $idade . " anos";
   }
   ?>
   
   <!DOCTYPE html>
   <html lang="pt-br">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Formulário de Entrada</title>
   </head>
   <body>
       <h2>Digite seus dados</h2>
       <form action="entrada_form.php" method="POST">
           <label for="nome">Nome:</label>
           <input type="text" id="nome" name="nome" required><br><br>
   
           <label for="idade">Idade:</label>
           <input type="number" id="idade" name="idade" required><br><br>
   
           <input type="submit" value="Enviar">
       </form>
   </body>
   </html>
   
