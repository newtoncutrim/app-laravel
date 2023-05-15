<h1>edite {{$support->id}}</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<a href="{{ route('support.index') }}">Mostrar</a>

<form action="{{ route('support.update', [$support->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Assunto" value="{{$support->subject}}" name="subject">
    <textarea name="body"  cols="30" rows="10" >{{$support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>
