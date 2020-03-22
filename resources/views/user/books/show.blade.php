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

                <p class="text-center pt-5 h2">{{ $book->title }}</>

                <p class="text-right pt-5 h3">{{ $book->price }}円</p>

                <p class="pt-5">概要</p>
                <div>
                    {{ $book->outline }}
                </div>

                <form action="{{ route('user.evaluations.store') }}" method="POST" >
                    {{ csrf_field() }}
                    <p class="pt-5">口コミ</p>
                    <input type="hidden" name="books_id" value="{{ $book->id }}">
                    <textarea class="form-control {{ $errors->has('word') ? 'is-invalid' : '' }}" id="word" name="word" rows="6">{{ $errors->any() ? old('word') : '' }}</textarea>

                    <div class="text-right bottom-button mt-5">
                        <button class="btn btn-primary btn-submit px-5">投稿</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-8 offset-2">
                @foreach ($evaluations AS $evaluate)
                    <div class=" card">
                        <div class="col-12 card-body">
                            <p class="card-text">{{ $evaluate->word }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('addJs')
@endsection