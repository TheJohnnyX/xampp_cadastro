<?php require_once "includes/db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style>
    table, th, td {border:1px solid black;}
    th { text-align: center;}
  </style>
</head>
<body>
  <div class="container">
  <form action="add_colab.php" method="post" style="border-top: 1px solid black; padding-top: 16px;">
        <fieldset>
          <div class="form-group">
            <label for="nomeCurso">Nome:</label>
            <input type="text" id="nomeCurso" name="nome" class="form-control" required/>
            <label for="nomeCurso">Idade:</label>
            <input type="number" id="nomeCurso" name="idade" class="form-control" required/>
            <label for="nomeCurso">Email:</label>
            <input type="email" id="nomeCurso" name="email" class="form-control" required/>
            <label for="nomeCurso">Filial:</label>
            <input type="text" id="nomeCurso" name="filial" class="form-control" required/>
          </div>
          <button class="btn btn-primary btn-lg">Cadastrar Curso</button>
        </fieldset>
      </form>
      <br>
    <main style="padding: 21px;">
      <h4><strong>Lista de Colaboradores:</strong></h4>
      <?php
      	$query = $db->query("SELECT * FROM colaboradores");
      	$rows = $query->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100px" id="backgroundTable">
        <tr>
          <th align="center">Nome</th>
          <th align="center">Idade</th>
          <th align="center">Email</th>
          <th align="center">Filial</th>
          <th align="center">excluir</th>
        </tr>
        <?php foreach ($rows as $colab):?>
          <tr>
            <td align="center"><?php echo $colab['nome'];?></td>
            <td align="center"><?php echo $colab['idade'];?></td>
            <td align="center"><?php echo $colab['email'];?></td>
            <td align="center"><?php echo $colab['filial'];?></td>
            <td align="center"><a href="delet_colab.php?id=<?php echo $colab['id'];?>">X</a></td>
          </tr>
        <?php endforeach;?>
        </table>   
    </main>
    <?php require_once "includes/footer.php";?>
  </div>
</body>
</html>
