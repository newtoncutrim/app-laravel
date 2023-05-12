<h1>Duvida {{$support->id}}, status {{$support->status}}</h1>

<ul>
    <li>Assunto: {{$support->subject}}</li>
    <li>status: {{$support->status}}</li>
    <li>conteudo: {{$support->body}}</li>
    <a href="{{route('support.index')}}">voltar</a>
</ul>
