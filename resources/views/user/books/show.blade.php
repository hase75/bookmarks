@extends('layouts.app')
@section('addCss')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('user.books.index') }}">戻る</a>

                <div class="pt-3">
                    <img src="{{ Storage::disk('local')->url($book->image) }}" width="100%" height="500px"/>
                </div>

                <p class="text-center pt-5 h2">{{ $book->title }}</p>

                <p class="text-right pt-5 h3">{{ $book->price }}円</p>

                <p class="pt-5">概要</p>
                <div>
                    {{ $book->outline }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addJs')
@endsection