<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Lista de Todo's</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">New Todo</h1>
        <form action="store-todo" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Description" name="description" cols="5" rows="5"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Create Todo</button>
            </div>
        </form>
    </div>
</body>
</html>