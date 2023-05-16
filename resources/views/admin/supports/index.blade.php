<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
<h1>meu index ta funcionando</h1>

<a href="{{ route('support.create') }}">Criar duvida</a>
<table class="table table-striped">
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
    </thead>
    <tbody>

        @foreach ($supports as $support)
            <tr>
                <td>{{$support['subject']}}</td>
                <td>{{$support['status']}}</td>
                <td>{{$support['body']}}</td>
                <td>
                    <a href="{{ route('support.show', [$support['id']]) }}" class="btn btn-primary">ver</a>
                    <a href="{{route('support.edit', [$support['id']])}}" class="btn btn-danger">editar</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

</body>
</html>
