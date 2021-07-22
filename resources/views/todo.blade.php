@extends('templates.home')
@section('title')
    Todo
@endsection
@section('content')
    <h1 class="text-center">Todo</h1>
    <div class="card card-default">
        <div class="card-header">
            TODO
        </div>
        <ul class="list-group">
            @foreach ($data as $item)
                <li class="list-group-item">{{ $item->name }}
                    <div class="float-right">
                        <a href="/view/{{ $item->id }}" class="btn btn-primary">view</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

