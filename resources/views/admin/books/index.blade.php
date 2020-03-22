@extends('layouts.app')
@section('addCss')
@endsection

@section('content')
    <div class="container">
        <div class="row pb-5">
            <div class="col-12">
                <div class="create-route float-right">
                    <a href="{{ route('admin.books.create') }}" class="btn btn-primary px-5">本追加</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead class="bg-info">
            <tr>
                <th>タイトル</th>
                <th>価格</th>
                <th>評価</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($books AS $book)
                <tr class="bg-white">
                    <th class="text-left">{{ $book->title }}</th>

                    <td class="text-right">{{ $book->price }}円</td>

                    <td class="text-center"></td>

                    <td class="text-center">
                        <a href="{{ route('admin.books.edit', ['book' => $book->id]) }}" class="btn btn-primary">編集</a>

                        <a href="{{ route('admin.books.destroy', ['book' => $book->id]) }}" class="btn btn-danger">削除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
@section('addJs')
@endsection