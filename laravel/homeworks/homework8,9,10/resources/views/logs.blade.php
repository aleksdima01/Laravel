<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @if(!empty($data['error']))
    <div class="alert alert-danger">
        {{$data['error']}}
    </div>
    @else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Time</th>
                <th scope="col">Duration</th>
                <th scope="col">ip</th>
                <th scope="col">url</th>
                <th scope="col">method</th>
                <th scope="col">data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $log)
            <tr>
                <th scope="row">{{$log['id']}}</th>
                <td>{{$log['time']}}</td>
                <td>{{$log['duration']}}</td>
                <td>{{$log['ip']}}</td>
                <td>{{$log['url']}}</td>
                <td>{{$log['method']}}</td>
                @if(!empty($log['input']))
                <td>{{$log['input']}}</td>
                @else
                <td>Не задано</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>