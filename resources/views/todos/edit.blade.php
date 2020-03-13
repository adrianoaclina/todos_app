<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Editando o {{$todo->id}}</title>
</head>
<body>
    <div class="container">
        <h1>Editar</h1>
        <form action="store-edit" method="post">
            <div class="form-group">
                <label for="id">Id</label>
                <input class="form-control" type="text" name="id" value="{{$todo->id}}" disabled>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" value="{{$todo->name}}">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" type="textarea" name="desc">{{$todo->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-danger" href="/todos">Voltar</a>
        </form>
    </div>
</body>
</html>