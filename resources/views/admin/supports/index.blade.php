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
                <td>{{$support->subject}}</td>
                <td>{{$support->status}}</td>
                <td>{{$support->body}}</td>
                <td>
                    <a href="{{ route('support.show', [$support->id]) }}">ver</a>
                    <a href="{{route('support.edit', [$support->id])}}">editar</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
