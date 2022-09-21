@extends('layouts.app')
@section('content')
    <div>
        <p>НОМЕР НОВОСТИ: {{$news->id}}</p>
        <p>НАЗВАНИЕ НОВОСТИ: {{$news->name}}</p>
        <p>ОПИСАНИЕ НОВОСТИ: {{$news->description}}</p>
        <a href="{{route('index')}}" style="font-size: 20px">На главную</a>
    </div>
@endsection()
