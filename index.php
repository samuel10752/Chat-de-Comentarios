<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="imagex/png" href="icons/opiniao.png">
  <link rel="stylesheet" href="lib/css/css.css">
  <link rel="stylesheet" href="lib/css/responsivel.css">
  <title>Chat de Coemntarios</title>
</head>

<body>

  <div class="container">
    <div class="like-icon">
     <img src="icons/opiniao.png" alt="">
    </div>



    <form class="form" action="add_comment.php" method="post">
      <div id="comments">
        <!-- Comentários serão carregados aqui -->
      </div>

      <div id="profile-picture">
        <img src="icons/padrao.png" alt="" id="profile-icon">
        <select name="icon" id="icon-select" onchange="updateProfilePicture(this.value)">
          <option value="padrao">Padrao</option>
          <option value="f">Feminino</option>
          <option value="m">Masculino</option>
        </select>
      </div>

      <input type="text" name="username" placeholder="Seu primeiro nome" required>
      <textarea name="comment" placeholder="Adicionar Comentario" required></textarea>
      <input type="submit" value="Adicionar comentário">
    </form>
  </div>

  <script src="lib/js/javascript.js"></script>


</body>

</html>