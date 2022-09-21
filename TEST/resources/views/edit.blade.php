@extends('layouts.app')
@section('content')
    <form action="{{route('update', $news->id)}}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="name">
                <input type="text" id="name" placeholder="название новости" name="name" value="{{$news->name}}">
            </label>
        </div>
        <div>
            <label for="desc">
                <textarea name="description" id="desc" cols="30" rows="10" placeholder="Новость">
                    {{$news->description}}
                </textarea>
            </label>
        </div>
        <div>
            <button>
                Изменить новость
            </button>
        </div>
    </form>
@endsection
