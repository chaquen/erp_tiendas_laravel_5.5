@extends('layouts.admin')

@section('contenido_principal')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">Panel de control</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <strong>Bienvenid@  <i>{{auth()->user()->name}}</i> a {{config('app.name')}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
