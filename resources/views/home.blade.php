@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">Permissões</div>
                    <div class="card-body">
                        <span class="card-title d-block">Quantidade: {{ $totalPermission }}</span>
                    </div>
                </div>                       
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">Usuários</div>
                    <div class="card-body">
                        <span class="card-title d-block">Quantidade: {{ $totalUsers }}</span>
                    </div>
                </div>                       
            </div>        
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">Nível de Acesso</div>
                    <div class="card-body">
                        <span class="card-title d-block">Quantidade: {{ $totalRoles }}</span>
                    </div>
                </div>                       
            </div>        
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">Noticias</div>
                    <div class="card-body">
                        <span class="card-title d-block">Quantidade: {{ $totalNotice }}</span>
                    </div>
                </div>                       
            </div>
        </div>
    </div>
@endsection
