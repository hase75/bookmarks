<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EvaluationRequest;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function store(EvaluationRequest $request)
    {
        $params = $request->validated();

        $evaluation = new Evaluation();
        $evaluation->book_id = $params['book_id'];
        $evaluation->evaluation = $params['evaluation'];
        $evaluation->word = $params['word'];
        $evaluation->save();

        return back()->with('success', '口コミが正常に保存されました。');
    }
}
