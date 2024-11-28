<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form name="userform" method="post" action="{{url('userform')}}">
        @csrf
        <div class="mb-3 col-sm-3">
            <label class="form-label" for="username">Name</label>
            <input class="form-control form-control-sm" placeholder="First name" type="text" name="username" id="username" required>
        </div>
        <div class="mb-3 col-sm-3">
            <label class="form-label" for="last_name">Lastname</label>
            <input class="form-control form-control-sm" placeholder="Last name" type="text" name="last_name" id="last_name" required>
        </div>
        <div class="mb-3 col-sm-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control form-control-sm" placeholder="Email" aria-describedby="emailHelp" type="email" name="email" id="email" required>
        </div>
        <button class="btn btn-primary" type="submit">Send</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>