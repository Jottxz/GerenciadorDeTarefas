<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD MYSQL</title>
    <!--BOOSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
<!-- FONT AWESOME    -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div  class="container">
                <a class="navbar-brand" href="index.php">Crud PHP </a>''
            </div>
        </nav>
        <main class="container p-4">
            <div class="row">
                <div class="col-md-4">
                    <!-- Formulário -->
                     <div class="card">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <input type="text" name="titulo" class="form-control"
                                placeholder="Task Title" atofocus>
                            </div>
                            <div class="form-group">
                                <textarea name="descricao" rows="2" class="form-control"
                                       placeholder="descricao da tarefa">
                            </textarea>
                            </div>
                            <input type="submit" name="salvar" class="btn btn-success btn-block"
                            value="Save Task">
                        </form>
                     </div>
                </div>
            </div>
            <!-- /Formulario -->

            <!-- Tabela de Tarefas -->
             <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr></tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Criado em</th>
                        <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Atividade</td>
                            <td>Descrição</td>
                            <td>15-08-2025</td>
                            <td><a href="#" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                        <a href="#" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                            </a>
                          </td>
                        </tr>
                    </tbody>
                </table>
             </div>
        </main>
    </div>
 
</body>
 
</html>
