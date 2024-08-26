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


                <div class="card mt-4">
                    <div class="card-header">
                        口コミを投稿
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.evaluations.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">

                            <div class="form-group">
                                <label for="evaluation">評価</label>
                                <select name="evaluation" id="evaluation" class="form-control" required>
                                    <option value="">選択してください</option>
                                    <option value="5">5 - 非常に良い</option>
                                    <option value="4">4 - 良い</option>
                                    <option value="3">3 - 普通</option>
                                    <option value="2">2 - 悪い</option>
                                    <option value="1">1 - 非常に悪い</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="word">コメント</label>
                                <textarea name="word" id="word" class="form-control" rows="3" maxlength="255"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">投稿</button>
                        </form>
                    </div>
                </div>

                <p class="pt-5 h5">口コミ</p>
                @forelse($book->evaluations as $evaluation)
                    <div class="card-body border border-secondary mb-3">
                        <p>評価: {{ $evaluation->evaluation }}</p>
                        <p>コメント: {{ $evaluation->word }}</p>
                    </div>
                @empty
                    <p>まだ口コミがありません。</p>
                @endforelse
                @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('addJs')
@endsection
