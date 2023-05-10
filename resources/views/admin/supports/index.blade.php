<h1>meu index ta funcionando</h1>

<a href="{{ route('support.create') }}">Criar duvida</a>
<table border="1">
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
    </thead>
    <tbody>

        @foreach ($supports as $support)
            <tr>
                <th>{{$support->subject}}</th>
                <th>{{$support->status}}</th>
                <th>{{$support->body}}</th>
            </tr>
        @endforeach

    </tbody>
</table>
