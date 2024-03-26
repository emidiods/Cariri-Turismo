<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadastrado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $pesquisa = $_POST['busca'] ?? '' ;
    
    include "conexao.php";

    $sql = "SELECT * FROM usuario where nome LIKE '%$pesquisa%' ";
    $dados = mysqly_query($conexao, $sql);

    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                    <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="pesquisa">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                      </form>
                    </div>

                    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">telefone</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
                </nav>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>