<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $Login = $_GET ["Login"];
      $senha = $_GET ["senha"];
      if($Login == "admin" && $senha == "admin"){
    ?> 

    <h1> WELLCOME <?= $Login ?> </h1>

    <?php
      }else{
    ?>
      <h1> ERRO 4004 </h1>
    <?php
      }
    ?>


  </body>
</html>
