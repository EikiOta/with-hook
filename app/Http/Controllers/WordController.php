<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
class WordController extends Controller
{
    public function add(Request $request){
        $post = new Word;
        $post->word = $request->word;
        $post->meaning = $request->meaning;
        $post->hook = $request->hook;
        $post->save();
        return redirect('/add'); 
    }
    public function show(){
        $Word_Show = Word::get();
        return view('show', compact('Word_Show'));// compact関数を使用することでスマートに記述
    }
    public function delete($id)
{
    $word = Word::find($id);

    if ($word) {
        $word->delete();
    }

    return redirect('/show'); // 削除後、一覧ページにリダイレクト
}
}
