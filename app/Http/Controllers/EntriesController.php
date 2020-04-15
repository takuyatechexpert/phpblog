<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    //
    public function index() {
        $entries = Entry::all();
        // useでEntryモデルを使うことの宣言が必要

        return view('entries/index', ['entries'=>$entries]);
    }

    public function view($id) {
        $entry = Entry::findOrFail($id);
        // findOrFail:検索した値が見つからなければ404のエラー画面へ遷移してくれる

        return view('entries.view', ['entry'=>$entry]);
    }
}
