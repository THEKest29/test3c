<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answers;

class AnswersController extends Controller
{
    public function vie() {
        $answers = Answers::orderBy('id', 'desc')->cursorPaginate(5);
        return view('answers', compact('answers'));
    }
    public function learn(Request $request) {
        Answers::Create(attributes:[
            'id' => $request->id,
            'text' => $request->text,
        ]);
        return redirect()->back();
    }
}
