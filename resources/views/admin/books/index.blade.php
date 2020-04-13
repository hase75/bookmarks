@extends('layouts.app')
@section('addCss')
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="pb-2 mt-4 mb-2 border-bottom">管理側書籍一覧画面</h1>
        </div>

        <div class="row pb-5 pt-3">
            <div class="col-12">
                <div class="create-route float-right">
                    <a href="{{ route('admin.books.create') }}" class="btn btn-primary px-5">新規登録</a>
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
                        <a href="" class="btn btn-primary">編集</a>

                        <form action="{{ route('admin.books.destroy', ['book' => $book->id])}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger delete-button" value="削除">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('addJs')
@endsection