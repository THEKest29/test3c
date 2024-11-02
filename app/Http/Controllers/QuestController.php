<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quests;

class QuestController extends Controller
{
    public function index() {
        $quests = Quests::orderBy('id', 'desc')->cursorPaginate(3);
        return view('index', compact('quests'));
    }
    public function show(Request $request) {
        $request->validate([
            'tema' => 'required|string|min:8',
            'quest' => 'required|string|min:20',
        ]);

        Quests::Create(attributes:[
            'id' => $request->id,
            'tema' => $request->tema,
            'quest' => $request->quest,
        ]);

        return redirect(to: '/quests');
    }
    public function share($id) {
        $quests = Quests::findOrFail($id);
        return view('answers', compact('quests'));
    }
}
