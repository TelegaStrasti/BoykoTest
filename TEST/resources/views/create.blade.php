@extends('layouts.app')
@section('content')
    <form action="{{route('store')}}" method="post">
        @csrf
        <div>
            <label for="name">
                <input type="text" id="name" placeholder="название новости" name="name">
            </label>
        </div>
        <div>
            <label for="desc">
                <textarea name="description" id="desc" cols="30" rows="10" placeholder="Новость"></textarea>
            </label>
        </div>
        <div>
            <button>
                Добавить новость
            </button>
        </div>
    </form>
@endsection
