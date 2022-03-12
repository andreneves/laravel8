@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<h2>Categoria</h2>
<p><b>Nome:</b>    {{ $categoria->nome       }} </p>
<p><b>Criação:</b> {{ $categoria->created_at }} </p>

</div>
</div>
</div>
</div>
</div>
@endsection