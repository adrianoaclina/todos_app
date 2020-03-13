<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Lista de Todo's</h1>
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    <span>{{$todo->name}}</span>
                    <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right ml-m1">Visualizar</a>
                    <a href="/todos/{{$todo->id}}/edit" class="btn btn-warning btn-sm float-right ml-m1">Editar</a>
                    <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm float-right ">Excluir</a>
                </li>

            @endforeach
        </ul>
        <div class="row">
            <a href="/new-todo" class="btn btn-primary btn-sm mt-4">Novo Todo</a>
        </div>
    </div>
</body>
</html>