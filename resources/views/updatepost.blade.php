@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">{{ $item->title }}</div>
                    <div class="card-body">
                        <span class="card-title d-block">Autor: {{ $item->user->name }}</span>
                        {{ $item->description }}
                    </div>
                </div>     
            </div>
        </div>
    </div>
@endsection
