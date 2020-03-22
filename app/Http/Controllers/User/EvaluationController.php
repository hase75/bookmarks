<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EvaluationRequest;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function store(EvaluationRequest $request)
    {
        $params = $request->validated();

        // TODO::evaluationがNOT NULLなので0をセットしておく
        $params['evaluation'] = 0;

        Evaluation::create($params);

        session()->flash('flash_message', '登録が完了しました');

        return redirect(route('user.books.show', ['book' => $request->books_id]));
    }
}
