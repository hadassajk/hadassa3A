<h1> Minha primeira aula de php </h1>

<?php
// Exibindo uma mensagem na tela
echo "Olá mundo";
echo "<br>";

//comentário de uma linha 
# comentário de uma linha 

  /*
   comentario multiplos linhas 
   Aqui pode escreva varias linhas de comentario
   Sem se preocupar com limite de uma linha 
   */

   //variáveis iniciam com cifrão ($)
   //podem conter letras numeros e o caracter 
   //nao ter espaco em branco
   //nao podem ter caracteres especiais , exeto do sublinhado (_)
   // nao pode palavras reservadas do PHP
   $nome = "Hadassa"; //string
   $idade = 17; // inteiro
   $altura = 1.55;// float
   $peso = 55.0; // float
   $casada = false; // booleano ( true ou falser )
   $filhos = null; // nulo (sem valor definitivo ) (cachorros e gatos )
   
   // para aparecer as variaveis coloca-se o echo 

   echo "Nome:$nome <br>";
   echo "Idade:$idade <br>";
   echo "Altura:$altura <br>";
   echo "Peso:$peso <br>";

   ?>
