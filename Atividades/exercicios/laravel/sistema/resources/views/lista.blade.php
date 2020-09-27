<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Produtos</title>
</head>
  <body>

    <div class="jumbotron">
      <header>
        <h1>Produtos</h1>
      </header>
    </div>


    <div class="container-fluid">
      <div class="table-responsive container-fluid">
        <!--
        <table class="table table-bordered table-hover table-striped" style="text-align:center">
          <thead>
            <tr class="thead-dark">
              <th>ID</th>
              <th>Nome</th>
              <th>Unidade de Medida</th>
            </tr>
          </thead>


          <tbody class="table-primary table-sm">

            {{$dados}}
          </tbody>

        </table>
      -->
      {{$dados}}
      </div>
  </body>
</html>
