@extends('layouts.app')
@section('addCss')
@endsection

@section('content')
    <div class="container">
        <div class="row pb-4">
            <a href="{{ route('user.books.index') }}">戻る</a>
        </div>

        <div class="row card">
            <div class="col-8 offset-2">

                <div class="pt-5">
                    <img src="{{ Storage::disk('local')->url($book->image) }}" class="card-img-top" width="100%" height="500px"/>
                </div>

                <h2 class="text-center pt-5 card-title">{{ $book->title }}</h2>

                <h3 class="text-right pt-5 card-text">{{ $book->price }}円</h3>

                <p class="pt-5 h3">概要</p>
                <div class="card-body border border-secondary mb-5">
                    {{ $book->outline }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addJs')
@endsection