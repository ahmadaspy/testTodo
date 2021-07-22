@extends('templates.home')
@section('title')
    View : {{ $data->name }}
@endsection
@section('content')
    <h1 class="text-center">{{ $data->name }}</h1>
    <div class="card card-default">
        {{ $data->description }}
    </div>
@endsection

