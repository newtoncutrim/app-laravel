<h1>edite {{$support->id}}</h1>

<x-alert/>

<a href="{{ route('support.index') }}">Mostrar</a>

<form action="{{ route('support.update', [$support->id]) }}" method="POST">
    @csrf
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support
    ])
</form>
