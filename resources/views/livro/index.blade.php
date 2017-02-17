<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listagem de Livros</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Listagem de Livros</h1>
      </div>

      <div class="row">

        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">Editoras</div>

            <table class="table table-striped">

              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Preço</th>
                    <th>Editora</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($livros as $livro)
                <tr>
                  <td>
                      {{$livro->id}}
                  </td>
                  <td>
                    {{$livro->titulo}}
                  </td>
                  <td>
                     {{$livro->preco}}
                  </td>
                  <td>
                     {{$livro->editora->nome}}
                  </td>
                  <td>
                    <a href="/livros/{{ $livro->id }}">Detalhes</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
            </table>

        </div>

        </div>

      </div>

    </div>

    <script type="text/javascript" src="/js/app.js" >
  </body>
</html>
