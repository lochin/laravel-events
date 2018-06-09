<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Create a post</title>
</head>
<body>
    <div class="container mt-3">
        <h1>Create a post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="title" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea id="body" name="body" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>
</body>
</html>
