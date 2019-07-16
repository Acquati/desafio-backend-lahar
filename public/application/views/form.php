<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Forulário Teste Lahar</title>
</head>

<body>
  <?php
  echo form_open('Exercicio_lahar/processa_resultado_lahar');
  echo form_label('Tentativa');
  echo form_input(array('id' => 'tentativa', 'name' => 'tentativa'));
  echo "<br/>";

  echo form_submit(array('id' => 'submit', 'value' => 'Processar Resultado'));
  echo form_close();
  echo "<br/>";
  ?>

  <table border="1">
    <?php
    echo "<tr>";
    echo "<td>ID#</td>";
    echo "<td>Tentativa</td>";
    echo "<td>Correto</td>";
    echo "<tr>";

    foreach ($resultado as $r) {
      echo "<tr>";
      echo "<td>" . $r->id . "</td>";
      echo "<td>" . $r->tentativa . "</td>";
      if($r->correto == 'S') {
        echo "<td>Contém todas as palavras.</td>";
      } else {
        echo "<td>Não contém todas as palavras.</td>";
      }
      echo "<tr>";
    }
    ?>
  </table>

  <table border="1">
    <?php    
    echo "<br/>";

    echo "<tr>";
    echo "<td>ID#</td>";
    echo "<td>Valor</td>";
    echo "<tr>";

    foreach ($dados_exercicio as $r) {
      echo "<tr>";
      echo "<td>" . $r->id . "</td>";
      echo "<td>" . $r->valor . "</td>";
      echo "<tr>";
    }
    ?>
  </table>
</body>
</html>
