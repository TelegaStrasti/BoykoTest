@extends('layouts.app')
@section('content')
    <div class="container" style="margin: 50px 5% 0 5%; width: 90%;">
        <h1>НОВОСТИ</h1>
        <a href="{{route('create')}}" style="font-size: 20px; display: block; margin-bottom: 30px;">Добавить новость</a>
        <div class="news">
            @foreach($news as $tiding)
                <div class="news-item" style="border: solid 1px black; margin-bottom: 10px;">
                    <p class="news-item-name" style="margin-left: 10px;">
                        {{$tiding->name}}
                    </p>
                    <p class="news-item-desc" style="margin-left: 10px;">
                        {{$tiding->description}}
                    </p>
                    <a href="{{route('show', $tiding->id)}}" style="margin-left: 10px;">
                        Подробнее
                    </a>
                    <a href="{{route('edit', $tiding->id)}}" style="margin-left: 10px;">
                        Изменить
                    </a>
                    <div>
                        <form action="{{route('delete', $tiding->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="УДАЛИТЬ"
                                   style="padding: 5px; border: 1px solid black; background-color: red">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
