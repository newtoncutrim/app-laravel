<h1>nova duvida</h1>

<x-alert/>

<a href="{{ route('support.index') }}">Mostrar</a>

<form action="{{ route('support.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form>
