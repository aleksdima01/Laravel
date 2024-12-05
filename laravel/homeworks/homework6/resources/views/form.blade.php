<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h3 class="mb-4">Book Form</h3>
    <form name="bookform" method="post" action="{{url('index')}}">
        @csrf
        <div class="mb-3 col-sm-3">
            <label class="form-label" for="title">Title</label>
            <input class="form-control form-control-sm" placeholder="Title" type="text" name="title" id="title" required>
        </div>
        <div class="mb-3 col-sm-3">
            <label class="form-label" for="author">Author</label>
            <input class="form-control form-control-sm" placeholder="Author" type="text" name="author" id="author" required>
        </div>
        <div class="mb-4 col-sm-3">
            <label class="form-label" for="genre">Choose Genre</label>
            <select name="genre" class="form-select" aria-label="select">
                <option value="Fantasy">Fantasy</option>
                <option value="Sci-FI">Sci-FI</option>
                <option value="Mystery">Mystery</option>
                <option value="Drama">Drama</option>
            </select>
        </div>
        <button class="btn btn-primary mb-4" type="submit">Send</button>
    </form>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>