@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($books AS $book)
                <div class="col-4 pt-5 card">
                    <a href="{{ route('user.books.show', ['book' => $book->id]) }}" class="text-dark text-decoration-none">
                        <img src="{{ Storage::disk('local')->url($book->image) }}" class="card-img-top" width="100%" height="300px"/>
                        <h4 class="text-center card-title pt-4">{{ $book->title }}</h4>
                        <h5 class="text-right card-text mb-3 pt-3">{{ $book->price }}円</h5>
                        <h5 class="text-center card-text mb-3 pt-3">登録日：{{ \Carbon\Carbon::parse($book->created_at)->format('Y年m月d日') }}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('addCss')

@endsection

@section('addJs')

@endsection
