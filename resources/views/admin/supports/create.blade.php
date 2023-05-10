<h1>nova duvida</h1>

<a href="{{ route('support.index') }}">Mostrar</a>

<form action="{{ route('support.store') }}" method="POST">
    @csrf
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body"  cols="30" rows="10"></textarea>
    <button type="submit">Enviar</button>
</form>
