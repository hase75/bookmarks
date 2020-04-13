@extends('layouts.app')
@section('addCss')
@endsection

@section('content')
    <div class="container">
        <div class="page-header pb-5">
            @if ($mode == 'create')
                <h1 class="pb-2 mt-4 mb-2 border-bottom">管理側書籍登録画面</h1>
            @else
                <h1 class="pb-2 mt-4 mb-2 border-bottom">管理側書籍管理画面</h1>
            @endif
        </div>

        @if(count($errors) > 0)
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if ($mode == 'create')
                <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
            @else
                <form action="{{ route('admin.books.update', ['book' => $book->id]) }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
            @endif
            <div class="form-group row">
                <label for="title" class="col-form-label col-md-3 text-right">タイトル</label>
                <div class="col-1"></div>

                <div class="col-md-6">
                    <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" name="title" value="{{ $errors->any() ? old('title') : $book->title  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="file" class="col-form-label col-3 text-right">画像</label>
                <div class="col-1"></div>
                <div id="file" class="col-md-6 ml-3">
                    <input type="file" class="custom-file-input form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" id="customFile" name="image" value="{{ $errors->any() ? old('image') : '/storage/app/' . $book->image  }}">
                    <label class="custom-file-label" for="customFile" data-browse="参照">ファイル選択...</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-form-label col-md-3 text-right">価格</label>
                <div class="col-1"></div>

                <div class="col-md-6">
                    <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" name="price" value="{{ $errors->any() ? old('price') : $book->price  }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="outline" class="col-form-label col-3 text-right">概要</label>

                <div class="col-1"></div>

                <div class="col-md-6">
                    <textarea class="form-control {{ $errors->has('outline') ? 'is-invalid' : '' }}" id="outline" name="outline">{{ $errors->any() ? old('outline') : $book->outline  }}</textarea>
                </div>
            </div>
            @if ($mode == 'create')
                <div class="form-group row">
                    <div class="mx-auto bottom-button mt-5">
                        <button class="btn btn-primary btn-submit px-5">登録</button>
                    </div>
                </div>
             @else
                <div class="form-group row">
                    <div class="mx-auto bottom-button mt-5">
                        <button class="btn btn-success btn-submit px-5">更新</button>
                    </div>
                </div>
             @endif
         </form>

    </div>
@endsection
@section('addJs')
@endsection
